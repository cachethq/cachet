<?php


namespace CachetHQ\Cachet\Services\Excel;

use Maatwebsite\Excel\Facades\Excel;
use Mockery\Exception;
use PHPExcel_Chart;
use PHPExcel_Chart_DataSeries;
use PHPExcel_Chart_DataSeriesValues;
use PHPExcel_Chart_Legend;
use PHPExcel_Chart_PlotArea;
use PHPExcel_Chart_Title;

class UpTimesExporter {

    private static $fields = [
        "Date Time",
        "UpTime %",
        "DownTime %"
    ];



    private static $indexes = [];

    /**
     * @param $sheetName
     * @param $componentName
     * @param $currentIndex
     * @param $currentIndexEnd
     * @param $length
     * @return PHPExcel_Chart
     * @internal param $componentData
     */
    private static function createChartForComponent($sheetName,$componentName,$currentIndex,$currentIndexEnd,$length){

        //	Set the Labels for each data series we want to plot
        //		Datatype
        //		Cell reference for data
        //		Format Code
        //		Number of datapoints in series
        //		Data values
        //		Data Marker
        $dataSeriesLabels = [
	        new PHPExcel_Chart_DataSeriesValues(
	            'String',
                "'$sheetName'".'!$C$'.($currentIndex-1),
                NULL,
                1
            ),
	        new PHPExcel_Chart_DataSeriesValues(
	            'String',
                "'$sheetName'".'!$D$'.($currentIndex-1),
                NULL, 1
            ),
        ];
        //	Set the X-Axis Labels
        //		Datatype
        //		Cell reference for data
        //		Format Code
        //		Number of datapoints in series
        //		Data values
        //		Data Marker
        $xAxisTickValues = array(
            new PHPExcel_Chart_DataSeriesValues(
                'String',
                "'$sheetName'".'!B'.$currentIndex.':B'.$currentIndexEnd,
                NULL,
                $length
            ),
        );
        //	Set the Data values for each data series we want to plot
        //		Datatype
        //		Cell reference for data
        //		Format Code
        //		Number of datapoints in series
        //		Data values
        //		Data Marker
        $dataSeriesValues = array(
            new PHPExcel_Chart_DataSeriesValues(
                'Number',
                "'$sheetName'".'!C'.$currentIndex.':C'.$currentIndexEnd,
                "0.00%",
                $length
            ),
            new PHPExcel_Chart_DataSeriesValues(
                'Number',
                "'$sheetName'".'!D'.$currentIndex.':D'.$currentIndexEnd,
                "0.00%",
                $length
            ),
        );


        $series = new PHPExcel_Chart_DataSeries(
            PHPExcel_Chart_DataSeries::TYPE_BARCHART,
            PHPExcel_Chart_DataSeries::GROUPING_STACKED,
            range(0, count($dataSeriesValues)-1),
            $dataSeriesLabels,
            $xAxisTickValues,
            $dataSeriesValues
        );

        $plotArea = new PHPExcel_Chart_PlotArea(NULL, array($series));
        $legend = new PHPExcel_Chart_Legend(
            PHPExcel_Chart_Legend::POSITION_RIGHT,
            NULL,
            false
        );
        $title = new PHPExcel_Chart_Title($componentName);
        $yAxisLabel = new PHPExcel_Chart_Title('');


        $chart = new PHPExcel_Chart(
            "chart_$sheetName\_$componentName",
            $title,
            $legend,
            $plotArea,
            true,
            0,
            NULL,
            $yAxisLabel
        );

        $chart->setTopLeftPosition('H'.($currentIndex));
        $chart->setBottomRightPosition('V'.($currentIndex+25));
        return $chart;

    }

    public static function createFile($data, $length, $format="xlsx"){

        Excel::create('Filename', function($excel) use ($length, $data) {


            $data["groups"]->each(function ($g) use ($length, $data, $excel) {

                self::$indexes = [];

                $excel->sheet($g["name"], function($sheet) use ($length, $g, $data) {

                    // Won't auto generate heading columns
                    $sheet->fromArray(null, null, 'A1', false, false);

                    $rows = $g["components"]->map(function ($c, $componentIndex) use ($length, $sheet, $g) {

                        $currentIndex = ($componentIndex*($length+1)+2);

                        $currentIndexEnd = ($currentIndex+$length-1);

                        self::$indexes[] = [
                            "sheetName" => $g["name"],
                            "componentName" => $c["name"],
                            "currentIndex" => $currentIndex,
                            "currentIndexEnd" => $currentIndexEnd
                        ];


                        return collect($c["data"]["items"])->map(function($data,$key) use ($c) {
                            return collect([
                                "",
                                $key,
                                round($data,2),
                                round(100-$data,2)
                            ]);
                        })
                        ->prepend(array_prepend(self::$fields,$c["name"]))
                        ->values();
                    })->flatten(1)->toArray();


                    $sheet->rows(
                        $rows
                    );

                    $sheet->setAutoSize(true);


                    collect(self::$indexes)->map(function($i) use ($length, $sheet) {
                        $chart = self::createChartForComponent(
                            $i["sheetName"],
                            $i["componentName"],
                            $i["currentIndex"],
                            $i["currentIndexEnd"],
                            $length
                        );
                        $sheet->addChart($chart);
                        $sheet->row($i["currentIndex"]-1, function($row) {
                            // call cell manipulation methods
                            $row->setBackground('#3498db');
                            $row->setFontColor("#FFFFFF");
                            $row->setFontWeight('bold');
                        });
                        $sheet->mergeCells("A".($i["currentIndex"]-1).":A".$i["currentIndexEnd"]);

                        $sheet->cell("A".($i["currentIndex"]-1), function($cell){
                            $cell->setAlignment('center');
                            $cell->setValignment('center');
                            $cell->setTextRotation(90);
                            $cell->setFontSize(24);
                            $cell->setBackground("#2980b9");
                        });

                    });
                });
            });
        })->export($format);
    }
}

