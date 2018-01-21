<!DOCTYPE HTML>
<html>
		<head>
		<title>zadaca php</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Tomislav Kobescak">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
<body>
<style>
input {
    background-color: #c0c0c0;
    border: 1px solid #eff0f1;   
}
p { font-family: 'Verdana', sans-serif;
    color: #232323;
    font-weight: bold; 
    font-size: 12px; 
    }
</style>
<?php
echo '<form id="myForm" action="zadaca_2.php" method="post" >
Ocjena I. kolokvija:&nbsp <input type="number" name="ocjene_1" ><br>
Ocjena II. kolokvija: <input type="number" name="ocjene_2" ><br>
<input type="submit" value=" Pošalji ">
</form>';
$ocjene_1 = array (1,2,3,4,5);
$ocjene_2 = array (1,2,3,4,5);
$a=$_POST['ocjene_1'];
$b=$_POST['ocjene_2'];
$c=($a + $b) / 2 ;
$d=round($c);
$e=($a<1 && $a>5 || $b<1 && $b>5);
echo "<br />";
if ($a==1 || $b==1) { echo "<p>Morate izaći na ispit, niste prošli kolokvij.</p>"; } 
elseif (($a>= 2 && $a<= 5) && ($b>= 2 && $b<= 5)) { echo "<p>Srednja ocjena je: " . $c . "</p>" . "<p>Konačna ocjena je: " . $d . "</p>" . "<br />"; } 
else echo $e." <p>Neispravno upisan broj!</p> ";
?>
</body>
</html>
