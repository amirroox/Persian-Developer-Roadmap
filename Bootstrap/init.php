<?php

use App\Core\Request;

const MAIN_DIR = __DIR__ . '/../';  #Main Directory
const BASEPATH = MAIN_DIR;  #Main Directory
include MAIN_DIR . "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(MAIN_DIR);
$dotenv->load();
define("BASEHOST", $_ENV['HOST']);

$request = new Request();

const MAIN_SERVER = BASEHOST;  # Main Server

include MAIN_DIR . "helpers/helper.php";
include MAIN_DIR . "Routs/web.php";
include "Constants.php";  # My Constatnt
