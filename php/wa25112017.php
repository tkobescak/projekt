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
<!-- uvoz fonta iz fonts.google.com -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- vanjski css -->
		<link rel="stylesheet" type="text/css" href="css/zadaca.css"> 
<!-- unutarnji stil css -->
<!--	<style> 
	h1 { Font: 12px, font-family: Verdana, color:#232323;}
	</style>
-->
<body>
<!--
Zadatak
Napravite formu u kojoj ćete napraviti unos ocjene I.
i II. kolokvija te izračunati prosjek i konačnu ocjenu iz
predmeta.
Formu i izlaz formatirajte pomoću CSS dokumenta na
slijedeći način.
Font: 12px, Verdana, #232323
Input polje: pozadina #c0c0c0; okvir 1px 2828cc
-->
	<style>
	p { font-family: 'Verdana', sans-serif;
    color: #232323;
    font-weight: bold; 
    font-size: 12px; 
    } 
    form { font-family: 'Verdana', sans-serif;
    color: 2828cc;
    padding: 1px;
    background: #c0c0c0;
    font-weight: bold; 
    font-size: 12px; 
    } 
    input { font-family: 'Verdana', sans-serif;
    color: 2828cc;
    padding: 1px;
    background: #c0c0c0;
    font-weight: bold; 
    font-size: 12px; 
    } 
    </style>
<?php
print '
<form action="wa25112017.php" method="POST">
Varijabla a: <input type="number" name="a"><br>
Varijabla b: <input type="number" name="b"><br>
<input type="submit" value"Pošalji">
</form> ';
$a=$_POST['a'];
$b=$_POST['b'];
$c=(3*$a - $b) / 2 ;
echo "<br>";
echo "a=" .$_POST['a'] ;
echo "<br>";
echo "b=" .$_POST['b'] ;
echo "<br>";
echo "<hr>";
echo "c=(3*$a - $b) / 2 = " .$c ;
echo "<br>";
echo "<hr>";
$d=date("H:i "); 
echo "<br />";
print "<p>Vježba 'Doba dana '</p>" ;
echo "<br />";
if ($d>=8 && $d<=11) { echo "<p>Ako je doba dana od 6 do 11h, Dobro jutro</p>"; } 
elseif ($d>= 11 && $d<= 18) { echo "<p>Dobar dan, ako je doba dana od 11 do 18h."; }
elseif($d>=18 && $d<=22){ echo "<p>Dobro većer, ako je doba dana od 18 do 22h</p>"; }
else { echo "<p>Vrijeme ti je za spavanje, Ako je doba dana od 22 do 08h</p>"; }
echo "<br>";
print "<p>Sada je " . $d . "sati</p>";
if (($d > 8) && ($d < 16)) { echo "<p>Radimo da 8 do 16h, Dobrodošli!</p>"; } 
else { echo "<p>Zatvoreno!</p>"; }
echo "<br />";
echo "<hr>";
$ocjene = array (4,5); 
$prosjek = ($ocjene[0] + $ocjene[1]) /2; 
print '<p><h1>Ocjena I. kolokvija: ' . $ocjene[0] . '</p></h1>'; 
print '<p><h1>Ocjena II. kolokvija: ' . $ocjene[1] . '</p></h1>'; 
print '<hr>'; 
print 'Srednja ocjena iz predmeta: ' . $prosjek . '</p>'; 
print 'Konačna ocjena iz predmeta: ' . round($prosjek) . '</p>'
?>
</body>
</html> 
