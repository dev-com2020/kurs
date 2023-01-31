<?php
$uploaddir = 'pliki/';
$success = array();
$error = array();

foreach($_FILES['pliki']['error'] as $k => $v){
    if($v == 0){
    $new_name = $uploaddir . $_FILES['pliki']['name'][$k];
    $temp_name = $_FILES['pliki']['tmp_name'][$k];
    if(move_uploaded_file($temp_name,$new_name)){
        $success[] = $_FILES['pliki']['tmp_name'][$k];
    } else {
        $error[] = $_FILES['pliki']['tmp_name'][$k];
    }
}
}
if(count($success)){
    echo "Udało się załadować pliki: ";
    echo implode(",", $success);
}
if(count($error)){
    echo "Nie udało się załadować pliki: ";
    echo implode(",", $error);
}

?>