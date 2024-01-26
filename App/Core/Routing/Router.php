<?php

namespace App\Core\Routing;

use App\Core\Request;
use Exception;

class Router
{
    private array $allRotes;        // All Rotes In Project
    private Request $request;       // Request Users
    private $current_uri;           // Current URI For User
    private array $passed = [];    // Passed Method Controller
    const HOME_CONTROLLER = "App\Controller\\";

    public function __construct()
    {
        $this->request = new Request();
        $this->allRotes = Routs::getRouts();
        $this->current_uri = $this->findRoute($this->request) ?? null;
        $this->middleware_current_uri($this->current_uri['middleware'] ?? []);
    }

    private function findRoute(Request $request)
    {
        foreach ($this->allRotes as $route) {
            # Excited Route
            if ($request->getUri() == $route["url"] || $this->check_regex($route["url"])) {
                return $route;
            }
        }
        # Route Not Excited
        return null;
    }

    private function check_regex($pattern): bool
    {
        if (strpos($pattern, '(?<') && preg_match($pattern, $this->request->getUri(), $array)) {
            $this->passed = $array; # Send Array To Method
            return true;
        }
        return false;
    }

    /**
     * @throws Exception
     */
    public function run()
    {
        # Check HTTP Error
        $this->invalidRequest($this->request);

        # Check DisPatch
        $this->disPatch($this->current_uri);

    }

    private function invalidRequest(Request $request): void # Check Error
    {
        # Check Valid Address => Error 404 Not Found
        if(empty($this->current_uri)){
            view('errors.404');
            die();
        }
        # Check Valid Methods (GET | POST | ...) => Error 405 Method Not Allowed
        if (!in_array($request->getMethod(), $this->current_uri["method"])) {
            view('errors.405');
            die();
        }
    }

    /**
     * @throws Exception
     */
    private function disPatch($patch) # 'HomeController@index' OR ['HomeController', 'index']
    {
//        var_dump($patch);
        $action = $patch["func"]; # Action Patch
        if (empty($action)) return; # Empty Return

        if (is_string($action)) { # => 'HomeController@index'
            $action = explode('@', $action);
        }

        if (is_array($action)) { # => ['HomeController', 'index']
            $class_name = self::HOME_CONTROLLER . $action[0];
            $method = $action[1];
            if (!class_exists($class_name)) {
                throw new Exception("(** Class : $class_name Not Existed **)");
            }
            if (!method_exists($class_name, $method)) {
                throw new Exception("(** Method : $method in Class : $class_name Not Existed **)");
            }
            $controller = new $class_name();
            $controller->{$method}($this->passed);
        }

        if (is_callable($action)) { # => Closure Function
            $action();
        }
    }

    private function middleware_current_uri($middlewares)
    {
        foreach ($middlewares as $middleware) {
            $middleware_obj = new $middleware;
            $middleware_obj->handler();
        }
    }
}
