<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Excel;

use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_Chart;
use PHPExcel_Chart_DataSeries;
use PHPExcel_Chart_DataSeriesValues;
use PHPExcel_Chart_Legend;
use PHPExcel_Chart_PlotArea;
use PHPExcel_Chart_Title;

/**
 * Class to exports uptime date to csv, execl...
 *
 * @author Diogo Ferreira Venancio <diogo.ferreiravenancio@swisscom.com>
 */
class UpTimesExporter
{
    private static $fields = [
        'Date Time',
        'UpTime',
        'DownTime',
        'Incidents',
    ];

    private static $indexes = [];

    /**
     * @param $sheetName
     * @param $componentName
     * @param $currentIndex
     * @param $currentIndexEnd
     * @param $length
     *
     * @return array
     * @internal param $componentData
     */
    private static function createChartsForComponent($sheetName, $componentName, $currentIndex, $currentIndexEnd, $length)
    {
        $dataSeriesLabels = [
            new PHPExcel_Chart_DataSeriesValues(
                'String',
                "'$sheetName'".'!$C$'.($currentIndex - 1),
                null,
                1
            ),
            new PHPExcel_Chart_DataSeriesValues(
                'String',
                "'$sheetName'".'!$D$'.($currentIndex - 1),
                null,
                1
            ),
        ];

        $xAxisTickValues = [
            new PHPExcel_Chart_DataSeriesValues(
                'String',
                "'$sheetName'".'!B'.$currentIndex.':B'.$currentIndexEnd,
                null,
                $length
            ),
        ];

        $dataSeriesValuesUpTimes = [
            new PHPExcel_Chart_DataSeriesValues(
                'Number',
                "'$sheetName'".'!C'.$currentIndex.':C'.$currentIndexEnd,
                null,
                $length
            ),
            new PHPExcel_Chart_DataSeriesValues(
                'Number',
                "'$sheetName'".'!D'.$currentIndex.':D'.$currentIndexEnd,
                null,
                $length
            ),
        ];

        $dataSeriesValueIncidents = [
            new PHPExcel_Chart_DataSeriesValues(
                'Number',
                "'$sheetName'".'!E'.$currentIndex.':E'.$currentIndexEnd,
                null,
                $length
            ),
        ];

        $seriesUpTimes = new PHPExcel_Chart_DataSeries(
            PHPExcel_Chart_DataSeries::TYPE_BARCHART,
            PHPExcel_Chart_DataSeries::GROUPING_PERCENT_STACKED,
            range(0, count($dataSeriesValuesUpTimes) - 1),
            $dataSeriesLabels,
            $xAxisTickValues,
            $dataSeriesValuesUpTimes
        );

        $seriesIncidents = new PHPExcel_Chart_DataSeries(
            PHPExcel_Chart_DataSeries::TYPE_BARCHART,
            PHPExcel_Chart_DataSeries::GROUPING_STANDARD,
            range(0, count($dataSeriesValueIncidents) - 1),
            $dataSeriesLabels,
            $xAxisTickValues,
            $dataSeriesValueIncidents
        );

        $plotAreaUpTimes = new PHPExcel_Chart_PlotArea(null, [$seriesUpTimes));
        $plotAreaIncidents = new PHPExcel_Chart_PlotArea(null, [$seriesIncidents));

        $legendUpTimes = new PHPExcel_Chart_Legend(
            PHPExcel_Chart_Legend::POSITION_RIGHT,
            null,
            false
        );


        $legendIncidents = new PHPExcel_Chart_Legend(
            PHPExcel_Chart_Legend::POSITION_RIGHT,
            null,
            false
        );

        $titleUpTimes = new PHPExcel_Chart_Title("$componentName Up and Down Times");
        $titleIncidents = new PHPExcel_Chart_Title("$componentName Incidents");

        $yAxisLabelUpTimes = new PHPExcel_Chart_Title('%');
        $yAxisLabelIncidents= new PHPExcel_Chart_Title('Incidents');

        $chartUpTimes = new PHPExcel_Chart(
            "chart_$sheetName\_$componentName\_uptimes",
            $titleUpTimes,
            $legendUpTimes,
            $plotAreaUpTimes,
            true,
            0,
            null,
            $yAxisLabelUpTimes
        );
        $chartIncidents = new PHPExcel_Chart(
            "chart_$sheetName\_$componentName\_incidents",
            $titleIncidents,
            $legendIncidents,
            $plotAreaIncidents,
            true,
            0,
            null,
            $yAxisLabelIncidents
        );

        $chartUpTimes->getChartAxisY()->setAxisNumberProperties(\PHPExcel_Chart_Axis::FORMAT_CODE_PERCENTAGE);
        $chartIncidents->getChartAxisY()->setAxisNumberProperties('0');
        $chartUpTimes->setTopLeftPosition('H'.($currentIndex));
        $chartUpTimes->setBottomRightPosition('V'.($currentIndex + 20));
        $chartIncidents->setTopLeftPosition('H'.($currentIndex + 21));
        $chartIncidents->setBottomRightPosition('V'.($currentIndex + 41));

        return [$chartUpTimes, $chartIncidents];

    }

    /**
     * @param $data
     * @param $range
     * @param string $format
     */
    public static function createFile($data, $range, $format='xlsx'){

        $length = (
          Carbon::createFromFormat('Y-m-d H:i', $range['fromDate'])->getTimeStamp()
          -
          Carbon::createFromFormat('Y-m-d H:i', $range['toDate'])->getTimeStamp()
        ) / 3600.0 + 1;


        Excel::create('Filename', function ($excel) use ($format, $length, $data) {

            $data['groups']->each(function ($g) use ($format, $length, $data, $excel) {

                self::$indexes = [];

                $excel->sheet($g['name'], function ($sheet) use ($format, $length, $g, $data) {

                    // Won't auto generate heading columns
                    $sheet->fromArray(null, null, 'A1', false, false);

                    // We had the group header to get an avg of all components
                    $g['components']->prepend([
                        'name' => $g['name'],
                        'data' => $g['data'],
                    ]);

                    $rows = $g['components']->map(function ($c, $componentIndex) use ($length, $sheet, $g) {

                        $currentIndex = ($componentIndex * ($length + 1) + 2);
                        $currentIndexEnd = ($currentIndex + $length - 1);

                        self::$indexes[] = [
                            'sheetName'       => $g['name'],
                            'componentName'   => $c['name'],
                            'currentIndex'    => $currentIndex,
                            'currentIndexEnd' => $currentIndexEnd,
                        ];

                        return collect($c['data']['items'])->map(function ($data, $key) use ($c) {
                            return collect([
                                '',
                                $key,
                                round($data / 100.0, 2),
                                round(1.0 - $data / 100.0, 2),
                                count($c['data']['incidents'][$key])
                            ]);
                        })
                        ->prepend(array_prepend(self::$fields, $c['name']))
                        ->values();
                    })->flatten(1)->toArray();

                    $sheet->rows(
                        $rows
                    );

                    $sheet->setAutoSize(
                        true
                    );

                    collect(self::$indexes)->map(function ($i) use ($length, $sheet) {

                        $sheet->setColumnFormat([
                            'C'.($i['currentIndex']).':D'.$i['currentIndexEnd'] => '0.0%',
                        ]);

                        $charts = self::createChartsForComponent(
                            $i['sheetName'],
                            $i['componentName'],
                            $i['currentIndex'],
                            $i['currentIndexEnd'],
                            $length,
                        );

                        array_map(function ($c) use ($sheet) {
                            $sheet->addChart($c);
                        }, $charts);


                        $sheet->row($i['currentIndex'] - 1, function ($row) {
                            $row->setBackground('#3498db');
                            $row->setFontColor("#FFFFFF");
                            $row->setFontWeight('bold');
                        });

                        $sheet->mergeCells('A'.($i['currentIndex'] - 1).':A'.$i['currentIndexEnd']);

                        $sheet->cell('A'.($i['currentIndex'] - 1), function ($cell){
                            $cell->setAlignment('center');
                            $cell->setValignment('center');
                            $cell->setTextRotation(90);
                            $cell->setFontSize(24);
                            $cell->setBackground('#2980b9');
                        });

                    });
                });
            });
        })->export($format);
    }
}
