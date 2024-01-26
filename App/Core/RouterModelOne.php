<?php
namespace App\Core;

use App\Utilities\UrlTools;

class RouterModelOne
{
    private array $routes;
    public function __construct()
    {
        $this->routes = [
          "/" => "home/index.php",
          "/text/one" => "test/one.html",
          "/text/two" => "test/two.html"
        ];
    }
    public function run()
    {
        $current_route = UrlTools::current_route();
        foreach($this->routes as $route => $view)
            if($current_route == $route)
                $this->includeAndDie($view);
        $this->includeAndDie("errors/404.php");
    }
    private function includeAndDie($include)
    {
        include BASEPATH ."views/$include";
        die();
    }
}
