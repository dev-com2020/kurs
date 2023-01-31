<?php
$zmienna = $_GET['pole1'];
echo "Odczytano wartość: $zmienna<br>";
if(isset($_GET['radio1']) && 
    ($_GET['radio1']== 'opcja1' || $_GET['radio1'] == 'opcja2' || $_GET['radio1'] == 'opcja3'))
    {
    echo "Zaznaczona opcja: ";
    echo $_GET['radio1'];
}else{
    echo "nie zaznaczyłeś żadnej opcji";
}

?>