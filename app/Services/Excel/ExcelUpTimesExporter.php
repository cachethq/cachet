<?php



namespace CachetHQ\Cachet\Services\Excel;





use Maatwebsite\Excel\Facades\Excel;

class ExcelUpTimesExporter {

    static $fields = [
        "Date Time",
        "UpTime Percent",
        "DownTime Percent",
        "Number incidents"
    ];

    public static function createFile($data){

        //TODO: refactor this !
        Excel::create('Filename', function($excel) use ($data) {
            $data["groups"]->each(function ($g) use ($data, $excel) {
                $excel->sheet($g["name"], function($sheet) use ($g, $data) {
                    $names = $g["components"]->map(function ($c){
                       return $c["name"];
                    })->toArray();
                    $sheet->fromArray(array_merge(array(
                        self::getNamesHeader($names),
                        self::getDataHeader($names),
                    ), collect(range(0,47))->map(function($i) use ($g) {
                        return array_flatten($g["components"]->map(function ($c) use ($i) {
                            $componentData = $c["data"];
                            return [
                                array_keys($componentData["items"])[$i],
                                array_values($componentData["items"])[$i],
                                100-array_values($componentData["items"])[$i],
                                0,
                            ];
                        })->toArray());
                    })->toArray()));
                });
            });

        })->export('xls');
    }


    private static function getNamesHeader($componentsName){
        return explode(",",
            join(", , , ,",$componentsName)
        );//Should do name1, , , name2, , ,
    }

    private static function getDataHeader($componentsName){
        return array_flatten(
                array_map(function (){
                    return self::$fields;
                }, range(0,count($componentsName)-1))
        );
    }

}

