<?php
// $napis1 = "napis pierwszy";
// $napis2 = "napis drugi";
// $napis3 = $napis1 + $napis2;
// echo $napis3;
$liczba1 = 1.5;
$napis = "1Tomek";
$nowy_napis = (int) $napis;
echo $nowy_napis;
echo $liczba1;
// $liczba2 = (int) $liczba1;
$liczba2 = intval($liczba1);
echo "<br>";
echo 'Zmienna $liczba2 jest typu: ' .gettype($liczba2);
?>