<!--
<!DOCTYPE HTML>
<html>
		<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Tomislav Kobescak">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!-- uvoz fonta iz fonts.google.com
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- vanjski css
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
<body>
</body>
</html> 
-->
<?php
<form action="/php/25112017.php" method="get">
varijabla a: <input type="number" name="a"><br>
varijabla b: <input type="number" name="b"><br>
<input type="submit">
</form>
$a = $_POST['a'];
$b = $_POST['b'];
$c = (3*$a - $b) / 2; // zadatak u nastavku
$a = '10';
$b = '20';
$c = (3*$a - $b) / 2; // zadatak u nastavku
$tekst1 = "a = " .$a;
$tekst2 = "b = " .$b;
$tekst3 = "c = (3a - b)/2 = " .$c;
echo $tekst1. "<br />" . $tekst2. "<hr >" .$tekst3; 
?>

