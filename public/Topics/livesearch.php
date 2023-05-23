<?php

include "../../Constants.php";

$name = strtolower(preg_replace('/[\/\\\\?*^()<>&{}\[\]!@#$%]/',"",$_POST['data']));
$name_page = $_POST['name'];
$excited_file_dir = glob("$name_page/bin/*.*");
#Delete File bin And .php
$excited_file_dir = str_replace(array("$name_page/bin/" , ".php" ) , "" , $excited_file_dir);
$name = str_replace(' ' , '[-|__]+' , $name);
if ($preg = preg_grep("/$name/" , $excited_file_dir)) {
    foreach ($preg as $value) {
        $data_group =  $value ;
        $pattern = '/[0-9]+(-)/';  #Delete Number First  (103-)
        $value = preg_replace($pattern,"",$value , 1);

        $value = str_replace("-" , " " , $value);

//        $pattern = '/[A-Za-z]*(__)/';  #Delete Subject (internet__)
//        $value = preg_replace($pattern,"",$value );
        $value = str_replace("__" , " &#8594; " , $value); # → unicode

        echo "<p class='clickable-group' data-group-id='$data_group'> $value </p><hr>";
    }
}

else {
    echo "<p> متاسفم چیزی پیدا نکردم :( </p><hr> ";
}