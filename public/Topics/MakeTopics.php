<?php

include "../../Constants.php";

$directory = MAIN_DIR . "public/Topics/{$_POST['name_page']}/bin/";
$file_names = str_replace(':', "__", $_POST['data']);
$content = file_get_contents(MAIN_DIR . "public/Topics/templateTopics.php");
foreach ($file_names as $name) {
    $file_path = $directory . $name . ".php";
    if (!((strpos($file_path, "ext_link") or strpos($file_path, "__professional") or strpos($file_path, "__beginner")) !== false)) {
        if (!file_exists($file_path)) {
            $file = fopen($file_path, 'w');
            if ($file) {
                fwrite($file, $content);
                fclose($file);
            } else {
                echo "It is not possible to create a file\n";
            }
        } else {
            echo "The $name file already exists!\n";
        }
    } else {
        echo "The $name file not allowed!\n";
    }
}

