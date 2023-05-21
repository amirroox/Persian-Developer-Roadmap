<?php

function CheckLoadSVG($test,$Name_Page , $name=null): void  # Method For Change Color All SVG Road Map
{   #Checking Svg Reload
    # $test ==> 1 (Test)   |   0 (No Test)
    $check = MAIN_DIR . "public/Pages/$Name_Page/bin/" ."$Name_Page$name.svg";
    if((bool)$test) {
        $change = file_get_contents($check);
        if (!(bool)strpos("$change", "font-family: lalezar")) {

            #chcek Color
            $change = str_replace("rgb(153,0,255)", MAIN_COLOR_CHECK['ok'], $change);
            $change = str_replace("rgb(56,118,29)", MAIN_COLOR_CHECK['replace'], $change);
            $change = str_replace("rgb(153,153,153)", MAIN_COLOR_CHECK['no'], $change);

            #box Color
            $change = str_replace("rgb(255,255,0)", MAIN_COLOR_BACK['main'], $change);
            $change = str_replace("rgb(255,229,153)", MAIN_COLOR_BACK['minor'], $change);
            $change = str_replace("rgb(43,120,228)", MAIN_COLOR_BACK['road'], $change);
            $change = str_replace('font-family: balsamic'
                , 'font-family: lalezar', $change);
            file_put_contents("$check", "$change", LOCK_EX);
        }
    }
    readfile($check);
}