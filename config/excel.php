<?php

return array(

    'cache'      => [

        /*
        |--------------------------------------------------------------------------
        | Enable/Disable cell caching
        |--------------------------------------------------------------------------
        */
        'enable'   => true,

        /*
        |--------------------------------------------------------------------------
        | Caching driver
        |--------------------------------------------------------------------------
        |
        | Set the caching driver
        |
        | Available methods:
        | memory|gzip|serialized|igbinary|discISAM|apc|memcache|temp|wincache|sqlite|sqlite3
        |
        */
        'driver'   => 'memory',

        /*
        |--------------------------------------------------------------------------
        | Cache settings
        |--------------------------------------------------------------------------
        */
        'settings' => [

            'memoryCacheSize' => '32MB',
            'cacheTime'       => 600

        ],

        /*
        |--------------------------------------------------------------------------
        | Memcache settings
        |--------------------------------------------------------------------------
        */
        'memcache' => [

            'host' => 'localhost',
            'port' => 11211,

        ],

        /*
        |--------------------------------------------------------------------------
        | Cache dir (for discISAM)
        |--------------------------------------------------------------------------
        */

        'dir'      => storage_path('cache')
    ],

    'properties' => [
        'creator'        => 'Maatwebsite',
        'lastModifiedBy' => 'Maatwebsite',
        'title'          => 'Spreadsheet',
        'description'    => 'Default spreadsheet export',
        'subject'        => 'Spreadsheet export',
        'keywords'       => 'maatwebsite, excel, export',
        'category'       => 'Excel',
        'manager'        => 'Maatwebsite',
        'company'        => 'Maatwebsite',
    ],

    /*
    |--------------------------------------------------------------------------
    | Sheets settings
    |--------------------------------------------------------------------------
    */
    'sheets'     => [

        /*
        |--------------------------------------------------------------------------
        | Default page setup
        |--------------------------------------------------------------------------
        */
        'pageSetup' => [
            'orientation'           => 'portrait',
            'paperSize'             => '9',
            'scale'                 => '100',
            'fitToPage'             => false,
            'fitToHeight'           => true,
            'fitToWidth'            => true,
            'columnsToRepeatAtLeft' => ['', ''],
            'rowsToRepeatAtTop'     => [0, 0],
            'horizontalCentered'    => false,
            'verticalCentered'      => false,
            'printArea'             => null,
            'firstPageNumber'       => null,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Creator
    |--------------------------------------------------------------------------
    |
    | The default creator of a new Excel file
    |
    */

    'creator'    => 'Maatwebsite',

    'csv'        => [
        /*
       |--------------------------------------------------------------------------
       | Delimiter
       |--------------------------------------------------------------------------
       |
       | The default delimiter which will be used to read out a CSV file
       |
       */

        'delimiter'   => ',',

        /*
        |--------------------------------------------------------------------------
        | Enclosure
        |--------------------------------------------------------------------------
        */

        'enclosure'   => '"',

        /*
        |--------------------------------------------------------------------------
        | Line endings
        |--------------------------------------------------------------------------
        */

        'line_ending' => "\r\n",

        /*
        |--------------------------------------------------------------------------
        | setUseBom
        |--------------------------------------------------------------------------
        */

        'use_bom' => false
    ],

    'export'     => [

        /*
        |--------------------------------------------------------------------------
        | Autosize columns
        |--------------------------------------------------------------------------
        |
        | Disable/enable column autosize or set the autosizing for
        | an array of columns ( array('A', 'B') )
        |
        */
        'autosize'                    => true,

        /*
        |--------------------------------------------------------------------------
        | Autosize method
        |--------------------------------------------------------------------------
        |
        | --> PHPExcel_Shared_Font::AUTOSIZE_METHOD_APPROX
        | The default is based on an estimate, which does its calculation based
        | on the number of characters in the cell value (applying any calculation
        | and format mask, and allowing for wordwrap and rotation) and with an
        | "arbitrary" adjustment based on the font (Arial, Calibri or Verdana,
        | defaulting to Calibri if any other font is used) and a proportional
        | adjustment for the font size.
        |
        | --> PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT
        | The second method is more accurate, based on actual style formatting as
        | well (bold, italic, etc), and is calculated by generating a gd2 imagettf
        | bounding box and using its dimensions to determine the size; but this
        | method is significantly slower, and its accuracy is still dependent on
        | having the appropriate fonts installed.
        |
        */
        'autosize-method'             => PHPExcel_Shared_Font::AUTOSIZE_METHOD_APPROX,

        /*
        |--------------------------------------------------------------------------
        | Auto generate table heading
        |--------------------------------------------------------------------------
        |
        | If set to true, the array indices (or model attribute names)
        | will automatically be used as first row (table heading)
        |
        */
        'generate_heading_by_indices' => true,

        /*
        |--------------------------------------------------------------------------
        | Auto set alignment on merged cells
        |--------------------------------------------------------------------------
        */
        'merged_cell_alignment'       => 'left',

        /*
        |--------------------------------------------------------------------------
        | Pre-calculate formulas during export
        |--------------------------------------------------------------------------
        */
        'calculate'                   => false,

        /*
        |--------------------------------------------------------------------------
        | Include Charts during export
        |--------------------------------------------------------------------------
        */
        'includeCharts'               => false,

        /*
        |--------------------------------------------------------------------------
        | Default sheet settings
        |--------------------------------------------------------------------------
        */
        'sheets'                      => [

            /*
            |--------------------------------------------------------------------------
            | Default page margin
            |--------------------------------------------------------------------------
            |
            | 1) When set to false, default margins will be used
            | 2) It's possible to enter a single margin which will
            |    be used for all margins.
            | 3) Alternatively you can pass an array with 4 margins
            |    Default order: array(top, right, bottom, left)
            |
            */
            'page_margin'          => false,

            /*
            |--------------------------------------------------------------------------
            | Value in source array that stands for blank cell
            |--------------------------------------------------------------------------
            */
            'nullValue'            => null,

            /*
            |--------------------------------------------------------------------------
            | Insert array starting from this cell address as the top left coordinate
            |--------------------------------------------------------------------------
            */
            'startCell'            => 'A1',

            /*
            |--------------------------------------------------------------------------
            | Apply strict comparison when testing for null values in the array
            |--------------------------------------------------------------------------
            */
            'strictNullComparison' => false
        ],

        /*
        |--------------------------------------------------------------------------
        | Store settings
        |--------------------------------------------------------------------------
        */

        'store'                       => [

            /*
            |--------------------------------------------------------------------------
            | Path
            |--------------------------------------------------------------------------
            |
            | The path we want to save excel file to
            |
            */
            'path'       => storage_path('exports'),

            /*
            |--------------------------------------------------------------------------
            | Return info
            |--------------------------------------------------------------------------
            |
            | Whether we want to return information about the stored file or not
            |
            */
            'returnInfo' => false

        ],

        /*
        |--------------------------------------------------------------------------
        | PDF Settings
        |--------------------------------------------------------------------------
        */
        'pdf'                         => [

            /*
            |--------------------------------------------------------------------------
            | PDF Drivers
            |--------------------------------------------------------------------------
            | Supported: DomPDF, tcPDF, mPDF
            */
            'driver'  => 'DomPDF',

            /*
            |--------------------------------------------------------------------------
            | PDF Driver settings
            |--------------------------------------------------------------------------
            */
            'drivers' => [

                /*
                |--------------------------------------------------------------------------
                | DomPDF settings
                |--------------------------------------------------------------------------
                */
                'DomPDF' => [
                    'path' => base_path('vendor/dompdf/dompdf/')
                ],

                /*
                |--------------------------------------------------------------------------
                | tcPDF settings
                |--------------------------------------------------------------------------
                */
                'tcPDF'  => [
                    'path' => base_path('vendor/tecnick.com/tcpdf/')
                ],

                /*
                |--------------------------------------------------------------------------
                | mPDF settings
                |--------------------------------------------------------------------------
                */
                'mPDF'   => [
                    'path' => base_path('vendor/mpdf/mpdf/')
                ],
            ]
        ]
    ],

    'filters'    => [
        /*
        |--------------------------------------------------------------------------
        | Register read filters
        |--------------------------------------------------------------------------
        */

        'registered' => [
            'chunk' => 'Maatwebsite\Excel\Filters\ChunkReadFilter'
        ],

        /*
        |--------------------------------------------------------------------------
        | Enable certain filters for every file read
        |--------------------------------------------------------------------------
        */

        'enabled'    => []
    ],

    'import'     => [

        /*
        |--------------------------------------------------------------------------
        | Has heading
        |--------------------------------------------------------------------------
        |
        | The sheet has a heading (first) row which we can use as attribute names
        |
        | Options: true|false|slugged|slugged_with_count|ascii|numeric|hashed|trans|original
        |
        */

        'heading'                 => 'slugged',

        /*
        |--------------------------------------------------------------------------
        | First Row with data or heading of data
        |--------------------------------------------------------------------------
        |
        | If the heading row is not the first row, or the data doesn't start
        | on the first row, here you can change the start row.
        |
        */

        'startRow'                => 1,

        /*
        |--------------------------------------------------------------------------
        | Cell name word separator
        |--------------------------------------------------------------------------
        |
        | The default separator which is used for the cell names
        | Note: only applies to 'heading' settings 'true' && 'slugged'
        |
        */

        'separator'               => '_',

        /*
        |--------------------------------------------------------------------------
        | Slug whitelisting
        |--------------------------------------------------------------------------
        |
        | Here you can whitelist certain characters in the slug.
        | E.g. user.last_name will not remove . and _
        | Note: only applies to 'heading' settings 'true' && 'slugged'
        |
        */

        'slug_whitelist'       => '._',

        /*
        |--------------------------------------------------------------------------
        | Include Charts during import
        |--------------------------------------------------------------------------
        */

        'includeCharts'           => true,

        /*
        |--------------------------------------------------------------------------
        | Sheet heading conversion
        |--------------------------------------------------------------------------
        |
        | Convert headings to ASCII
        | Note: only applies to 'heading' settings 'true' && 'slugged'
        |
        */

        'to_ascii'                => true,

        /*
        |--------------------------------------------------------------------------
        | Import encoding
        |--------------------------------------------------------------------------
        */

        'encoding'                => [

            'input'  => 'UTF-8',
            'output' => 'UTF-8'

        ],

        /*
        |--------------------------------------------------------------------------
        | Calculate
        |--------------------------------------------------------------------------
        |
        | By default cells with formulas will be calculated.
        |
        */

        'calculate'               => true,

        /*
        |--------------------------------------------------------------------------
        | Ignore empty cells
        |--------------------------------------------------------------------------
        |
        | By default empty cells are not ignored
        |
        */

        'ignoreEmpty'             => false,

        /*
        |--------------------------------------------------------------------------
        | Force sheet collection
        |--------------------------------------------------------------------------
        |
        | For a sheet collection even when there is only 1 sheets.
        | When set to false and only 1 sheet found, the parsed file will return
        | a row collection instead of a sheet collection.
        | When set to true, it will return a sheet collection instead.
        |
        */
        'force_sheets_collection' => false,

        /*
        |--------------------------------------------------------------------------
        | Date format
        |--------------------------------------------------------------------------
        |
        | The format dates will be parsed to
        |
        */

        'dates'                   => [

            /*
            |--------------------------------------------------------------------------
            | Enable/disable date formatting
            |--------------------------------------------------------------------------
            */
            'enabled' => true,

            /*
            |--------------------------------------------------------------------------
            | Default date format
            |--------------------------------------------------------------------------
            |
            | If set to false, a carbon object will return
            |
            */
            'format'  => false,

            /*
            |--------------------------------------------------------------------------
            | Date columns
            |--------------------------------------------------------------------------
            */
            'columns' => []
        ],

        /*
        |--------------------------------------------------------------------------
        | Import sheets by config
        |--------------------------------------------------------------------------
        */
        'sheets'                  => [

            /*
            |--------------------------------------------------------------------------
            | Example sheet
            |--------------------------------------------------------------------------
            |
            | Example sheet "test" will grab the firstname at cell A2
            |
            */

            'test' => [

                'firstname' => 'A2'

            ]

        ]
    ],

    'views'      => [

        /*
        |--------------------------------------------------------------------------
        | Styles
        |--------------------------------------------------------------------------
        |
        | The default styles which will be used when parsing a view
        |
        */

        'styles' => [

            /*
            |--------------------------------------------------------------------------
            | Table headings
            |--------------------------------------------------------------------------
            */
            'th'     => [
                'font' => [
                    'bold' => true,
                    'size' => 12,
                ]
            ],

            /*
            |--------------------------------------------------------------------------
            | Strong tags
            |--------------------------------------------------------------------------
            */
            'strong' => [
                'font' => [
                    'bold' => true,
                    'size' => 12,
                ]
            ],

            /*
            |--------------------------------------------------------------------------
            | Bold tags
            |--------------------------------------------------------------------------
            */
            'b'      => [
                'font' => [
                    'bold' => true,
                    'size' => 12,
                ]
            ],

            /*
            |--------------------------------------------------------------------------
            | Italic tags
            |--------------------------------------------------------------------------
            */
            'i'      => [
                'font' => [
                    'italic' => true,
                    'size'   => 12,
                ]
            ],

            /*
            |--------------------------------------------------------------------------
            | Heading 1
            |--------------------------------------------------------------------------
            */
            'h1'     => [
                'font' => [
                    'bold' => true,
                    'size' => 24,
                ]
            ],

            /*
            |--------------------------------------------------------------------------
            | Heading 2
            |--------------------------------------------------------------------------
            */
            'h2'     => [
                'font' => [
                    'bold' => true,
                    'size' => 18,
                ]
            ],

            /*
            |--------------------------------------------------------------------------
            | Heading 3
            |--------------------------------------------------------------------------
            */
            'h3'     => [
                'font' => [
                    'bold' => true,
                    'size' => 13.5,
                ]
            ],

            /*
             |--------------------------------------------------------------------------
             | Heading 4
             |--------------------------------------------------------------------------
             */
            'h4'     => [
                'font' => [
                    'bold' => true,
                    'size' => 12,
                ]
            ],

            /*
             |--------------------------------------------------------------------------
             | Heading 5
             |--------------------------------------------------------------------------
             */
            'h5'     => [
                'font' => [
                    'bold' => true,
                    'size' => 10,
                ]
            ],

            /*
             |--------------------------------------------------------------------------
             | Heading 6
             |--------------------------------------------------------------------------
             */
            'h6'     => [
                'font' => [
                    'bold' => true,
                    'size' => 7.5,
                ]
            ],

            /*
             |--------------------------------------------------------------------------
             | Hyperlinks
             |--------------------------------------------------------------------------
             */
            'a'      => [
                'font' => [
                    'underline' => true,
                    'color'     => ['argb' => 'FF0000FF'],
                ]
            ],

            /*
             |--------------------------------------------------------------------------
             | Horizontal rules
             |--------------------------------------------------------------------------
             */
            'hr'     => [
                'borders' => [
                    'bottom' => [
                        'style' => 'thin',
                        'color' => ['FF000000']
                    ],
                ]
            ]
        ]

    ]

);
