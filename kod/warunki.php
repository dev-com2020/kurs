<?php
$liczba = 20;
$napis = 5;
$liczba2 = $liczba < 0 ? -1 : 1;


if ($liczba < 0){
    echo "zmienna ma wartość $liczba i jest mniejsza od zera.";
}
else if ($liczba > 0){
    echo "zmienna ma wartość $liczba i jest większa od zera.";
    if ($napis === ""){
        echo "<br>Zmienna $napis jest pusta i jest w typie string";
    }
    else{
        echo "<br>Zmienna nie jest pusta";
    }
}
else{
    echo "zmienna ma wartość $liczba.";
}

echo "<br>Tutaj inny kod...\n";

if(($liczba > 5) && ($liczba < 20)){
    echo "\ninstrukcja się wykonuje...";
}

if(($liczba == 5) || ($liczba == 20)){
    echo "\ninstrukcja się wykonuje drugi raz...";
}
if(($liczba <= 100 && $liczba >= 10) && ($licznik != 25 || $licznik == 15)){
    // instrukcje
}

if($a < $b):
    echo "Jakiś kod...";
elseif($a > $b):
    echo "Jakiś kod...";
else:
    echo "Jakiś kod...";
endif;



?>