<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";

// if(!mysqli_close($conn)){
//     echo 'Błąd podczas zamykania!';
// } else{
//     echo 'Połączenie zostało zakończone.';
// }

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_errno) {
//   die("Connection failed: " . $conn->connect_errno);
// }
// echo "Connected successfully<br>";

// if($conn->close()){
//     echo 'Połączenie zostało zakończone.';
// } else{    
//     echo 'Błąd podczas zamykania!';
// }

$dsn = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "";
try{
    $dbo = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    echo 'Błąd:' . $e->getMessage();
    exit;
}
echo 'Połączenie zostało nawiązane...';
$dbo = null;


?>