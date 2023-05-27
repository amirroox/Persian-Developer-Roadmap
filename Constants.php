<?php

const TURN_SITE = 0;  /* 0 -> Turn On    , 1 -> Turn Off */
if (TURN_SITE) exit();
const MAIN_DIR = __DIR__ . '/';  #Main Directory
const MAIN_SERVER = "http://localhost:63342/Persian-developer-Roadmap" . '/';  # Main Server
const MAIN_GITHUB = "https://github.com/amirroox/Persian-Developer-Roadmap"; # Github Page
const MAIN_SITE = "https://ro-ox.com";

const CHECK_SVG = 0;  // Default Value (OFF) - add SVG File Emulate

/* Const Color For Svg Road Map */
/* MAIN_SVG_COPY COLOR , MAIN  */
const COLOR_SVG = [
    "TURN" => CHECK_SVG ,
    'COPY' => [
        "Recommend" => "rgb(153,0,255)",    # Recommend
        "Alternative" => "rgb(56,118,29)",  # Alternative
        "No" => "rgb(153,153,153)",         # Other Or Not Recommend
        "Main" => "rgb(255,255,0)",         # MAIN COLOR
        "Minor" => "rgb(255,229,153)",      # Minor
        "Road" => "rgb(43,120,228)",        # Road - Line
        "Text" => 'fill="rgb(0,0,0)"',      # Text
    ],
    'MAIN' => [ # MAIN COLOR FOR SVG
        "Recommend" => "rgb(254,0,38)",
        "Alternative" => "rgb(255, 153, 145)",
        "No" => "rgb(153,153,153)",
        "Main" => "rgb(0,255,225)",
        "Minor" => "rgb(122,255,101)",
        "Road" => "rgb(43,120,228)",
        "Text" => 'fill="rgb(0,0,0)"',
    ],
    /* <IMPORTANT> COPY AS COLOR_SVG["MAIN"] */
    /* بعد از هر تغییر در عبارت بالا ، برای تغییر بعدی حتما از تغییرات قبلی کپی بگیرید */
    /* After each change in the above statement, be sure to copy the previous changes for the next change */
    'CUSTOM' => [ # COPY COLOR MAIN
        "Recommend" => "rgb(254,0,38)",
        "Alternative" => "rgb(255, 153, 145)",
        "No" => "rgb(153,153,153)",
        "Main" => "rgb(0,0,225)",
        "Minor" => "rgb(122,255,101)",
        "Road" => "rgb(43,120,228)",
        "Text" => 'fill="rgb(0,0,0)"',
    ],
];
include "assets/vendor/Helper.php";

const GET_ALL_TOPICS = 0 ; # 1 is Check and Make File - 0 is Not (Default)

define("NOW_YEAR", [ # Now Year
    "solar" => "1402",
    "ad" => (date("Y"))
]);