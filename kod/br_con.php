<?php

// for ($i = 0; ;$i++){
//     echo "pętla typu for $i<br>";
//     if($i == 9){
//         break;
//     }
// }

// $i = 0;
// for (; ;){
//     echo "pętla typu for $i<br>";
//     if($i++ >= 9){
//         break;
//     }
// }

// for($i = 0; $i < 3; $i++){
//     for($j = 0; $j < 3; $j++){
//         if ($i == 1)
//             break;
//         echo "$i $j";
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     echo ("<br>");
// }

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0)
        continue;
    echo "$i ";
}


?>