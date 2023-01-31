<!-- <?php
session_start();
$_SESSION['zmienna_sesji'] = "abcd";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Korzystanie z sesji</title>
</head>
<body>
Witamy na stronie. Została rozpoczęta sesja.<br>
Identyfikatorem sesji jest: <?php echo session_id() ?> <br>
Została ustawiona zmienna o nazwie: zmienna_sesji <br>
Wartością zmiennej zmienna_sesji jest:
<?php echo $_SESSION['zmienna_sesji'] ?><br>
<a href="index2.php">Następna strona</a>
</body> -->
<?php
session_start();
if(!isset($_SESSION['page1hits'])){
$_SESSION['page1hits'] = 1;
}
else{
$_SESSION['page1hits']++;
}
if(!isset($_SESSION['page2hits'])){
$_SESSION['page2hits'] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Śledzenie użytkownika</title>
</head>
<body>
<p>Liczba wizyt na pierwszej stronie:
<?php echo $_SESSION['page1hits']; ?>
</p>
<p>Liczba wizyt na drugiej stronie:
<?php echo $_SESSION['page2hits']; ?>
</p>
<a href="index2.php">Druga strona</a>
</body>
</html>