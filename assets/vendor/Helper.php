<?php

function CheckLoadSVG($color, $Name_Page, $name = null): void  # Method For Change Color All SVG Road Map
{   #Checking Svg Reload
    $check = MAIN_DIR . "public/Pages/$Name_Page/bin/" . "$Name_Page$name.svg";
    # $color['TURN'] ==> 1 (Test)   |   0 (No Test)
    if ($color['TURN']) {
        $change = file_get_contents($check);
        if (strpos($change, $color['COPY']['Alternative'])) { #Change Color Copy To MAIN
            #chcek Color MAINCopy
            $change = str_replace($color['COPY']['Recommend'], $color['MAIN']['Recommend'], $change);
            $change = str_replace($color['COPY']['Alternative'], $color['MAIN']['Alternative'], $change);
            $change = str_replace($color['COPY']['No'], $color['MAIN']['No'], $change);
            #box Color MAINCopy
            $change = str_replace($color['COPY']['Main'], $color['MAIN']['Main'], $change);
            $change = str_replace($color['COPY']['Minor'], $color['MAIN']['Minor'], $change);
            $change = str_replace($color['COPY']['Road'], $color['MAIN']['Road'], $change);
//            $change = str_replace(MAIN_COLOR_BACK['text'][2], MAIN_COLOR_BACK['text'][1], $change);

            $change = str_replace('font-family: balsamic' , 'font-family: lalezar', $change);
        }
        else if(!empty(array_diff_assoc($color['MAIN'] , $color['CUSTOM']))) {

            $change = str_replace($color['CUSTOM']['Recommend'], $color['MAIN']['Recommend'], $change);
            $change = str_replace($color['CUSTOM']['Alternative'], $color['MAIN']['Alternative'], $change);
            $change = str_replace($color['CUSTOM']['No'], $color['MAIN']['No'], $change);
            $change = str_replace($color['CUSTOM']['Main'], $color['MAIN']['Main'], $change);
            $change = str_replace($color['CUSTOM']['Minor'], $color['MAIN']['Minor'], $change);
            $change = str_replace($color['CUSTOM']['Road'], $color['MAIN']['Road'], $change);
        }

        file_put_contents("$check", "$change", LOCK_EX);
    }
    readfile($check);
}