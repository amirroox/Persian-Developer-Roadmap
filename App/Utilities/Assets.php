<?php

namespace App\Utilities;

class Assets {
    public static function loadAssets(string $fileName): string
    {
        if(strpos($fileName, "/")) // Find it / (Directory)!
        {
            return $_ENV["HOST"] . "assets/$fileName";
        }
        // Without the use of directory (/)
        $format = explode('.', $fileName);
        $format = end($format);
        if($format == "css") return $_ENV["HOST"] . "assets/css/$fileName";
        if($format == "js") return $_ENV["HOST"] . "assets/js/$fileName";
        return "$fileName Not Found";
    }
}
