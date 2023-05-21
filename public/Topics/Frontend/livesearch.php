<?php

include "../../../Constants.php";

$name = preg_replace('/[\/\\\\?*^()<>&{}\[\]!@#$%]/',"",$_POST['data']);
$excited_file_dir = glob("bin/*.*");
#Delete File bin And .php
$excited_file_dir = str_replace("bin/" , "" , $excited_file_dir);
$excited_file_dir = str_replace(".php" , "" , $excited_file_dir);

if ($preg = preg_grep("/$name/" , $excited_file_dir)) {
    foreach ($preg as $value) {
        $href = "bin/$value.php";
        $data_group =  $value ;
        $pattern = '/[0-9]{1,5}(-)/';  #Delete Number First  (103-)
        $value = preg_replace($pattern,"",$value , 1);

        $value = str_replace("-" , " " , $value);

        $pattern = '/[A-Za-z]*(__)/';  #Delete Subject (internet__)
        $value = preg_replace($pattern,"",$value );

        echo "<p class='clickable-group' data-group-id='$data_group'> $value </p><hr>";
    }
}

else {
    echo "متاسفم چیزی پیدا نکردم :( ";
}