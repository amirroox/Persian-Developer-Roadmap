<?php
namespace App\Core\Routing;

class Routs{
    private static array $routs = [];
    public static function add($method, $url, $func = null, $Middleware = []){
        if(is_string($method) && strpos($method,",")) { // For Option => $Router::add("get , put", "/e");
            $method = str_replace(' ', '', $method);
            $method = explode(',', $method);
        }
        $method = is_array($method) ? $method : [$method];
        $method = array_map("strtoupper", $method); // To UpperCase
        if(strpos($url, '{') and strpos($url, '}')){
            // '/post/{slug}' ==> /^\/post\/(?<slug>[-%\w]+)$/
            $url = '/^' . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $url) . '$/';
        }
        if (strpos($url, '$') and strpos($url, '-')) {
            // '/javascript/day$1-30'
            $counter = explode('-', $url)[1];
            $url = explode('$', $url)[0];
            for ($i = 1 ; $i <= $counter ; $i++ ){
                $urlHere = "$url$i";
                self::$routs[] = ["method" => $method ,"url" => $urlHere, "func" => $func, "middleware" => $Middleware ];
            }
        }
        else {
            self::$routs[] = ["method" => $method ,"url" => $url, "func" => $func, "middleware" => $Middleware ];
        }
    }

    /**
     * Model Static
     **/
    public static function get($url, $func = null, $Middleware = []){
        self::add('GET', $url, $func, $Middleware);
    }
    public static function post($url, $func = null, $Middleware = []){
        self::add('POST', $url, $func, $Middleware);
    }
    public static function put($url, $func = null, $Middleware = []){
        self::add('PUT', $url, $func, $Middleware);
    }
    public static function patch($url, $func = null, $Middleware = []){
        self::add('PATCH', $url, $func, $Middleware);
    }
    public static function delete($url, $func = null, $Middleware = []){
        self::add('DELETE', $url, $func, $Middleware);
    }
    public static function options($url, $func = null, $Middleware = []){
        self::add('OPTIONS', $url, $func, $Middleware);
    }

    /**
     * Model One Non Static
     **/
    public function __call($name, $arguments)
    {
        $arguments[1] = $arguments[1] ?? null;
        if($name == "get" || $name == "GET")
            self::$routs[] = ["method" => "GET" , "url" => $arguments[0], "func" => $arguments[1] ];

        if($name == "post" || $name == "POST")
            self::$routs[] = ["method" => "POST" , "url" => $arguments[0], "func" => $arguments[1] ];

        if($name == "put" || $name == "PUT")
            self::$routs[] = ["method" => "PUT" , "url" => $arguments[0], "func" => $arguments[1] ];

        if($name == "patch" || $name == "PATCH")
            self::$routs[] = ["method" => "PATCH" , "url" => $arguments[0], "func" => $arguments[1] ];

        if($name == "delete" || $name == "DELETE")
            self::$routs[] = ["method" => "DELETE" , "url" => $arguments[0], "func" => $arguments[1] ];

        if($name == "options" || $name == "OPTIONS")
            self::$routs[] = ["method" => "OPTIONS" , "url" => $arguments[0], "func" => $arguments[1] ];
    }

    public static function getRouts(): array
    {
        return self::$routs;
    }
}