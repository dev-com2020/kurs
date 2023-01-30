<?php
function funkcja(){
    echo "Instrukcje...<br>";
}

function razyDwa($x){
    $wynik = $x * 2;
    echo "pomnożone: $x * 2 = $wynik<br>";
}

function dodaj($x,$y){
    $wynik = $x + $y;
    echo "dodane: $x + $y = $wynik<br>";
}


for ($i = 0; $i < 11; $i++):
    razyDwa($i);
    dodaj($i,$i);
endfor;
?>