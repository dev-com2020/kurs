<?php
// $biblioteka = array(
// 'regał1' => array
// (
// array("Autor" => "Marcin Lis",
// "Tytuł" => "Java. Praktyczny kurs",
// "Numer" => "123"),
// array("Autor" => "Marcin Lis",
// "Tytuł" => "Tworzenie stron WWW. Praktyczny kurs",
// "Numer" => "234"),
// array("Autor" => "Marcin Lis",
// "Tytuł" => "JavaScript. Praktyczny kurs",
// "Numer" => "345")
// ),
// 'regał2' => array
// (
// array("Autor" => "Orson Scott Card",
// "Tytuł" => "Gra Endera",
// "Numer" => "321"),
// array("Autor" => "Orson Scott Card",
// "Tytuł" => "Cień Endera",
// "Numer" => "432"),
// array("Autor" => "Orson Scott Card",
// "Tytuł" => "Mistrz Pieśni",
// "Numer" => "543")
// ),
// 'regał3' => array
// (
// array("Autor" => "Alex Kava",
// "Tytuł" => "Zło konieczne",
// "Numer" => "213"),
// array("Autor" => "Kathy Reichs",
// "Tytuł" => "Pogrzebane tajemnice",
// "Numer" => "324"),
// array("Autor" => "Harlan Coben",
// "Tytuł" => "Nie mów nikomu",
// "Numer" => "435")
// )
// );
// foreach($biblioteka as $regal_nazwa => $regal){
// echo "Regał: $regal_nazwa<br>";
// foreach($regal as $ksiazka){
// $autor = $ksiazka['Autor'];
// $tytuł = $ksiazka['Tytuł'];
// $numer = $ksiazka['Numer'];
// echo "$autor | $tytuł | $numer";
// echo "<br>";
// }
// echo "<br>";
// }


// $tablica = array(
//     array(1, 2, 3, 4),
//     array(5, 6),
//     array(7),
//     array(8, 9, 10)
// );

// foreach ($tablica as $tab) {
//     foreach($tab as $val){
//         echo "$val ";
//     }
//     echo "<br>";
// }

$tab1 = array(5, 7, 3, 1, 8, 2, 0, 4, 9, 6);
$tab3 = array_reverse($tab1);
$tab2 = array('jeden', 'dwa', 'trzy', 'cztery', 'pięć');
$str = 'jeden, dwa, trzy';
$arr = explode(',', $str,-2);
echo $arr[0];
foreach ($tab3 as $val) {
    echo "$val<br> ";
}
// echo implode('-', $tab1);

// foreach($tab1 as $val){
//     echo "$val<br> ";
// }
// sort($tab1);
// foreach($tab1 as $val){
//     echo "$val ";
// }

// function sortuj($el1,$el2){
//     if($el1 % 2 == 0){
//         if($el2 % 2 == 0){
//             return $el1 - $el2;
//         }else{
//             return -1;
//         }
//     }
// }

// foreach($tab1 as $val){
//     echo "$val<br> ";
// }
// rsort($tab1);
// foreach($tab1 as $val){
//     echo "$val ";
// }

?>