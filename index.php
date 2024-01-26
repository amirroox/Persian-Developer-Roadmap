<?php

use App\Core\Routing\Router;

include "Bootstrap/init.php";

$router = new Router();

try {
    $router->run();
} catch (Exception $e) {
    echo $e;
}
