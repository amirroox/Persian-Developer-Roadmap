<?php

/* Const Color For Svg Road Map */
/* Change -> Static -> MAIN_SVG_COPY */
/* Change -> Static -> MAIN_SVG_COPY */
$MAIN_COLOR_CHECK = [
    "Recommend" => ["rgb(120,20,255)", "rgb(254,0,38)", "rgb(153,0,255)"],   # Recommend
    "Alternative" => ["rgb(120, 54, 100)", "rgb(255, 153, 145)", "rgb(56,118,29)"],  # Alternative
    "No" => ["rgb(153,153,153)", "rgb(153,153,153)", "rgb(153,153,153)"],  # Other Or Not Recommend
];
$MAIN_COLOR_BACK = [
    "Main" => ["rgb(0,12,225)", "rgb(0,255,225)", "rgb(255,255,0)"],   # MAIN COLOR
    "Minor" => ["rgb(122,255,0)", "rgb(0,255,225)", "rgb(255,229,153)"],  # Minor
    "Road" => ["rgb(43,120,0)", "rgb(0,255,225)", "rgb(43,120,228)"],  # Road - Line
    "Text" => ['fill="rgb(0,0,0)"', 'fill="rgb(0,0,0)"', 'fill="rgb(0,0,0)"'],  # Text
];

function CheckLoadSVG($test, $Name_Page, $name = null): void  # Method For Change Color All SVG Road Map
{   #Checking Svg Reload
    global $MAIN_COLOR_CHECK;
    global $MAIN_COLOR_BACK;
    $check = MAIN_DIR . "public/Pages/$Name_Page/bin/" . "$Name_Page$name.svg";
    # $test ==> 1 (Test)   |   0 (No Test)
    if ($test) {
        $change = file_get_contents($check);
//        if (strpos($change, $MAIN_COLOR_CHECK['Recommend'][2])) {
//            #chcek Color MAINCopy
//            $change = str_replace($MAIN_COLOR_CHECK['Recommend'][2], $MAIN_COLOR_CHECK['Recommend'][1], $change);
//            $change = str_replace($MAIN_COLOR_CHECK['Alternative'][2], $MAIN_COLOR_CHECK['Alternative'][1], $change);
//            $change = str_replace($MAIN_COLOR_CHECK['No'][2], $MAIN_COLOR_CHECK['No'][1], $change);
//            #box Color MAINCopy
//            $change = str_replace($MAIN_COLOR_BACK['Main'][2], $MAIN_COLOR_BACK['Main'][1], $change);
//            $change = str_replace($MAIN_COLOR_BACK['Minor'][2], $MAIN_COLOR_BACK['Minor'][1], $change);
//            $change = str_replace($MAIN_COLOR_BACK['Road'][2], $MAIN_COLOR_BACK['Road'][1], $change);
////            $change = str_replace(MAIN_COLOR_BACK['text'][2], MAIN_COLOR_BACK['text'][1], $change);
//
//            $change = str_replace('font-family: balsamic' , 'font-family: lalezar', $change);
//        }

//        #chcek Color
//        $change = str_replace($MAIN_COLOR_CHECK['Recommend'][1], $MAIN_COLOR_CHECK['Recommend'][0], $change);
//        $change = str_replace($MAIN_COLOR_CHECK['Alternative'][1], $MAIN_COLOR_CHECK['Alternative'][0], $change);
//        $change = str_replace($MAIN_COLOR_CHECK['No'][1], $MAIN_COLOR_CHECK['No'][0], $change);
//
//        #box Color
//        $change = str_replace($MAIN_COLOR_BACK['Main'][1], $MAIN_COLOR_BACK['Main'][0], $change);
//        $change = str_replace($MAIN_COLOR_BACK['Minor'][1], $MAIN_COLOR_BACK['Minor'][0], $change);
//        $change = str_replace($MAIN_COLOR_BACK['Road'][1], $MAIN_COLOR_BACK['Road'][0], $change);
////        $change = str_replace(MAIN_COLOR_BACK['text'][1], MAIN_COLOR_BACK['text'][0], $change);

        #SWAP COLOR
        [
            &$MAIN_COLOR_CHECK['Recommend'][0] , &$MAIN_COLOR_CHECK['Recommend'][1],
            $MAIN_COLOR_CHECK['Alternative'][0], $MAIN_COLOR_CHECK['Alternative'][1] ,
            $MAIN_COLOR_CHECK['No'][0],$MAIN_COLOR_CHECK['No'][1],
            $MAIN_COLOR_BACK['Main'][0],$MAIN_COLOR_BACK['Main'][1] ,
            $MAIN_COLOR_BACK['Minor'][0], $MAIN_COLOR_BACK['Minor'][1] ,
            $MAIN_COLOR_BACK['Road'][0] , $MAIN_COLOR_BACK['Road'][1]
        ] = [
            &$MAIN_COLOR_CHECK['Recommend'][1] , &$MAIN_COLOR_CHECK['Recommend'][0],
            $MAIN_COLOR_CHECK['Alternative'][1], $MAIN_COLOR_CHECK['Alternative'][0] ,
            $MAIN_COLOR_CHECK['No'][1],$MAIN_COLOR_CHECK['No'][0],
            $MAIN_COLOR_BACK['Main'][1],$MAIN_COLOR_BACK['Main'][0] ,
            $MAIN_COLOR_BACK['Minor'][1], $MAIN_COLOR_BACK['Minor'][0] ,
            $MAIN_COLOR_BACK['Road'][1] , $MAIN_COLOR_BACK['Road'][0]
        ];

        var_dump($MAIN_COLOR_CHECK);

//        file_put_contents("$check", "$change", LOCK_EX);
    }
    readfile($check);
}