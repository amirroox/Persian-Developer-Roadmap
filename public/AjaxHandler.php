<?php


$folder = __DIR__ . "/Topics/" ;
$name_folder = $_POST['name'];
$name_data = str_replace(":" , "__",$_POST['data_result']);

if($name_data == 'json__beginner') echo "Beginner";
else if($name_data == 'json__professional') echo "Professional";
else if(strpos($name_data, 'ext_link__') !== (false)) { #ext_link__ = external Link
    echo "$name_data";
}
else {
    $path_folder = $folder . $name_folder . '/bin/' . $name_data . '.php';
    if(file_exists($path_folder)) {
        readfile($path_folder);
    }
    else echo "<p style='direction: ltr'>File Not Found '$name_data'</p>";
}

