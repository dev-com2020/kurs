<?php
if(!isset($_COOKIE['nazwa']) && !isset($_GET['nazwa'])) {
    echo "....";
}else if(isset($_GET['nazwa'])){
    setcookie("nazwa",$_GET['nazwa'],time() + 60 * 60 * 24 * 365);
}else{
    include("main.php");
}


?>