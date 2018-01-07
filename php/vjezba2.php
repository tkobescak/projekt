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
PHP v2
Izračun dva broja pomoću funkcije
Napravite zadatak koji će promjenom argumenata varijabli $x i $y promijeniti string i rezultat korištenjem forme za unos podataka. 
Ako napišemo u formu da su vrijednosti a=1 i b=16 tada pozivamo funkciju add(1,16) ispis će biti 1 + 16 = 17,  
a ako napišemo add(4,16) ispis će biti 4 + 16 = 20
-->
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
       function add($a = 0, $b = 0)
       {
              return ($a + $b);
       }
       $vrijednost_a = $_POST['vrijednost_a'];
       $vrijednost_b = $_POST['vrijednost_b'];
?>
<html>
       <title>PHP - Zbroji dva broja</title>
       <body>
              <form action="vjezba2.php" method="post">
                     <input type="text" name="vrijednost_a" value="0" /><br />
                     <input type="text" name="vrijednost_b" value="0" /><br /><br />
                     <input type="submit" value="Izračunaj"/><br /><br />
              </form>
              Zbroj dva broja je : <?php echo add($vrijednost_a + $vrijednost_b); ?>
       </body>
</html>
