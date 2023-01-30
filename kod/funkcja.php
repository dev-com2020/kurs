<?php
function funkcja(){
    echo "Instrukcje...<br>";
}

// function razyDwa($x){
//     $wynik = $x * 2;
//     echo "pomnożone: $x * 2 = $wynik<br>";
// }
function razyDwa($x):int{
   return $x * 2.5;
}


function jakaWartosc($liczba):string{
    if($liczba < 0){
        return "ujemna";
    } else if ($liczba > 0){
        return "dodatnia";
    } else {
        return "zero";
    }
    }

// echo jakaWartosc(2);
// echo "<br>";
// echo jakaWartosc(-2);
// echo "<br>";
// echo jakaWartosc(0);

function dodaj($x,$y){
    $wynik = $x + $y;
    echo "dodane: $x + $y = $wynik<br>";
}


// $wynik = razyDwa(5);
// echo "$wynik";

// for ($i = 0; $i < 11; $i++):
//     razyDwa($i);
//     dodaj($i,$i);
// endfor;

$a = 1;
function f(){
    // global $a;
    global $liczba;
    $liczba = 100;
    $a = 10000;
    echo "Wartość a = $a <br>";
    echo "Wartość liczba = $liczba <br>";
}

f();
echo "Wartość a = $a <br>";
echo "Wartość liczba = $liczba <br>";

?>