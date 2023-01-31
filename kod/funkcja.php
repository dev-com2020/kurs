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

// f();
// echo "Wartość a = $a <br>";
// echo "Wartość liczba = $liczba <br>";


function dodajJeden(&$liczba){
    $liczba = $liczba + 1;
    }

// $liczba = 1;
// echo "Przed wywołaniem funkcji liczba = $liczba<br>";
// dodajJeden($liczba);
// echo "Po wywołaniu funkcji liczba = $liczba<br>";

function dodaj_2(&$liczba,$ile = 1){
    $liczba = $liczba + $ile;
    }

// $liczba = 1;
// dodaj_2($liczba);
// echo $liczba;
// dodaj_2($liczba,5);
// echo $liczba;

function ff(...$dane){
    $liczba_arg = func_num_args();
    echo "Liczba argumentów funkcji = $liczba_arg<br>";
}

ff();
ff(3);
ff("Tomek","Janek");
ff("Tomek","Janek",6);

?>