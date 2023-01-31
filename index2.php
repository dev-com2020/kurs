<!-- <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Korzystanie z sesji</title>
</head>
<body>
Witamy na drugiej stronie sesji.<br>
Trwa sesja o identyfikatorze: <?php echo session_id() ?><br>
Wartością zmiennej zmienna_sesji jest:
<?php echo $_SESSION['zmienna_sesji'] ?><br>
<a href="index3.php">Następna strona</a>
</body>
</html> -->

<?php
session_start();
if(!isset($_SESSION['page2hits'])){
$_SESSION['page2hits'] = 1;
}
else{
$_SESSION['page2hits']++;
}
if(!isset($_SESSION['page1hits'])){
$_SESSION['page1hits'] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Śledzenie użytkownika</title>
</head>
<body>
<p>Liczba wizyt na drugiej stronie:
<?php echo $_SESSION['page2hits']; ?>
</p>
<p>Liczba wizyt na pierwszej stronie:
<?php echo $_SESSION['page1hits']; ?>
</p>
<a href="index1.php">Pierwsza strona</a>
</body>
</html>