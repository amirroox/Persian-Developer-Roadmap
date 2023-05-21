<?php

const TURN_SITE = 0 ;  /* 0 -> Turn On    , 1 -> Turn Off */
if (TURN_SITE) exit();
const MAIN_DIR = __DIR__ . '/';  #Main Directory
const MAIN_SERVER = "http://localhost:63342/Persian-developer-Roadmap" . '/';  # Main Server
const MAIN_GITHUB = "https://github.com/amirroox/Persian-Developer-Roadmap"; # Github Page
const MAIN_SITE = "https://ro-ox.com";
const MAIN_COLOR_CHECK = [
    "ok" => "rgb(254,0,38,255)" ,   # Recommend
    "replace" => "rgb(255, 153, 145)" ,  # Alternative
    "no" =>  "rgb(153,153,153)" ,  # Other Or Not Recommend
];
const MAIN_COLOR_BACK = [
    "main" => "rgb(0,255,225)" ,   # MAIN COLOR
    "minor" => "rgb(122,255,101)" ,  # Minor
    "road" =>  "rgb(43,120,228)" ,  # Road - Line
];
const CHECK_SVG = 0 ;  //Default Value

include "assets/vendor/Helper.php" ;