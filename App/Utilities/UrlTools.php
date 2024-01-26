<?php
namespace App\Utilities;

class UrlTools
{
    public static function current_url(): string
    {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
            "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    public static function current_route(): string
    {
        return strtok($_SERVER["REQUEST_URI"], "?");
    }
}
