<?php
if(!isset($_COOKIE['moje_cookie'])){
    setcookie("moje_cookie", "Tomek");
    $str = "Cookie o nazwie cookie1 nie jest ustawione";
}else{
    $str = "Cookie o nazwie cookie1 jest ustawione";
    $str .= "Jego wartość to: ". $_COOKIE["moje_cookie"];
}

echo $str;

?>