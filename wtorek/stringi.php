<pre>
    <?php
    // $str = " ... _Przykładowy string_ ... ";
    // echo "Pierwotna zawartość:<br>";
    // echo "-$str-";

    // $str = ltrim($str);
    // echo "<br>Zawartość po ltrim:<br>";
    // echo "-$str-";

    // $str = rtrim($str);
    // echo "<br>Zawartość po rtrim:<br>";
    // echo "-$str-";

    // $str = trim($str,"_. ");
    // echo "<br>Zawartość po trim:<br>";
    // echo "-$str-<br>";

    // echo strtoupper($str);

    // $wartosc = 77;
    // printf("Użycie %%c = %c<br>", $wartosc);
    // printf("Użycie %%d = %d<br>", $wartosc);
    // echo("Wartość 10.456789<br>");
    // printf("%.1f",10.456789);
    
    // $str1 = "abcdabcd";
    // $str2 = "ab";
    // if(strpos($str1,$str2) === false){
    //     echo "Ciąg str2 nie został znaleziony w str1";
    // } else{
    //     echo "Ciąg str2 został znaleziony w str1";
    // }


$arr1 = array("%imie1%", "%imie2%");
$arr2 = array("Ala", "Ola");
$arr3 = array("%imie1%", "ma", "kota.");
$str = str_replace($arr1, $arr2, "%imie1% ma kota. %imie2% ma psa.");
echo "$str <br>";
$str = str_replace($arr1, "Magda", "%imie1% ma kota. %imie2% ma psa.");
echo "$str <br>";
$str = str_replace("%imie1%", "Ela", $arr3);
foreach($str as $word) echo "$word ";

    ?>
</pre>