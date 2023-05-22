<?php

const TURN_SITE = 0 ;  /* 0 -> Turn On    , 1 -> Turn Off */
if (TURN_SITE) exit();
const MAIN_DIR = __DIR__ . '/';  #Main Directory
const MAIN_SERVER = "http://localhost:63342/Persian-developer-Roadmap" . '/';  # Main Server
const MAIN_GITHUB = "https://github.com/amirroox/Persian-Developer-Roadmap"; # Github Page
const MAIN_SITE = "https://ro-ox.com";
const CHECK_SVG = 1 ;  //Default Value

include "assets/vendor/Helper.php" ;