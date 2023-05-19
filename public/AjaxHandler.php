<?php


$folder = __DIR__ . "/Topics/" ;
$name_folder = $_POST['name'];
$name_data = $_POST['data_result'];

if($name_data == 'json:beginner') echo "Beginner";
else if($name_data == 'json:pro') echo "Pro";
else {
    $path_folder = $folder . $name_folder . '/' . $name_data . '.php';
    if(file_exists($path_folder)) include $path_folder;
    else echo 'File Not Found';
}

