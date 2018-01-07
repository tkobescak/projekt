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
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
<!-- unutarnji stil css -->
<!--	<style> 
	a:hover {
			color:yellow;
		} -->
	</style>
	</head>
	
<body>
<ul>
<form name="dojmovnik" action="skripta.php" method="POST">
<li>* Djelatnik ID:</li><li><input type="text" name="id_zap" required/></li> <!-- dodal sam required, mora se nešto upisati -->
									     <!--id_zap bi trebal biti od nekog generatora, tak da automatski povećava npr. broj -->
<li>* Ime:</li><li><input type="text" name="ime_zap" required /></li>
<li>* Prezime:</li><li><input type="text" name="prezime_zap" required /></li>
<li>* OIB:</li><li><input type="text" name="oib_zap" required /></li>
<li>JMBG:</li><li><input type="text" name="jmbg_zap" /></li>
<li>Adresa:</li><li><input type="text" name="adresa_zap" /></li>
<li>Telefon 1:</li><li><input type="text" name="tel_zap" /></li>
<li>Telefon 2:</li><li><input type="text" name="tel1_zap" /></li>
<li>Telefon 3:</li><li><input type="text" name="tel2_zap" /></li>
<li>Mobitel:</li><li><input type="text" name="mob_zap" /></li>
<li><br /></li>
<li><input type="submit"/></li>
</form>
</ul>
</body>
</html>

<?php

/*
// generator djelatnici
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}
$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "Generira brojeve od : $value\n<br />";
}
*/

    echo "\r\n<br />";

// ispis svih post varijabli koje se prenose u formu
foreach ($_POST as $varname => $varvalue) echo "$varname---$varvalue<br />\n";

    echo "\r\n<br />";

if (strlen($_POST['id_zap']) >0) {
$db_baza = pg_connect("host=localhost dbname=baza user=baza password=1q23a4")
or die('Nemože se spojiti na bazu: ' . pg_last_error());

$vrijednost = "SELECT id_zap, name FROM djelatnici;";
//$vrijednost = 10;
function povecaj(&$broj,$vrijednost){
$broj+=$vrijednost;
}

$neki_broj=12;
povecaj($neki_broj,10);
echo $neki_broj;

/*
ovo nije bilo dobro i još nije dobro

1. ne stavljaš u navodnike kak si ti napisal '$_POST[id_zap]' nego $_POST['id_zap']
2. npr OIB nije upisan, on je prazan, i baza ga ne zna upisati jer je definiran kao numeric,
   a npr. adresa_zap je tekst.
   
   zato moraš ispitati je li OIB upisan, i ako nije onda ga staviti u nul, ovako: 
   $oib = $_POST['oib_zap'];
   if (strlen($oib) == 0) $oib = 'NULL';

   a za tekst varijablu:
   $adr = $_POST['adresa_zap'];
   if (strlen($adr) == 0) $adr = 'NULL'; else $adr = "'$adr'";

   strlen funkcija je najbolja jer vraća integer (0 ili više), ostale funkcije koje
   rade s npr isset(nešto) !== NULL nekad ne rade dobro (makar u manualima tvrde
   da rade, meni ne rade /ponekad/ - dakle nisu sigurne. morti ti skužiš bolje.

3. bolje je queriju popisati elemente tablice, npr:
  insert into djelatnici (id_zap,ime_zap,prezime_zap......)  values (.....)
*/

//if ($db_baza->query($query) === TRUE) {
//    $last_id = $query->id_zap;

    $query = "INSERT INTO djelatnici (id_zap, ime_zap, prezime_zap, oib_zap, jmbg_zap, adresa_zap, tel_zap, tel1_zap, tel2_zap, mob_zap) 
    VALUES (
    ".$_POST['id_zap'].",
     '$_POST[ime_zap]',
     '$_POST[prezime_zap]',
    ".$_POST['oib_zap'].",
    ".$_POST['jmbg_zap'].",  
     '$_POST[adresa_zap]',  
    ".$_POST['tel_zap'].",
    ".$_POST['tel1_zap'].",
    ".$_POST['tel2_zap'].",
    ".$_POST['mob_zap']."
    )";

    $jmbg = $_POST['jmbg_zap'];
        if (strlen($jmbg) == 0) $jmbg = 'NULL';
    $adr = $_POST['adresa_zap'];
        if (strlen($adr) == 0) $adr = 'NULL'; 
        else $adr = "'$adr'";
    $tel = $_POST['$tel_zap'];
        if (strlen($tel) == 0) $tel = 'NULL';
    $tel1 = $_POST['$tel1_zap'];
        if (strlen($tel1) == 0) $tel1 = 'NULL';
    $tel2 = $_POST['$tel2_zap'];
        if (strlen($tel2) == 0) $tel2 = 'NULL';
    $mob_zap = $_POST['$mob_zap'];
        if (strlen($mob_zap) == 0) $mob_zap = 'NULL';

    echo "query = $query <br>\n";
    $result = pg_query($query);     
           
    echo "\r\n<br />";
    
    echo "<h3>Connection Information</h3>\n";
    echo 'Ime baze: ' . pg_dbname($db_baza) . "<br />\n";
    echo 'Hostname: ' . pg_host($db_baza) . "<br />\n";
    echo 'Port: ' . pg_port($db_baza) . "<br />\n";
    echo 'TTY name: ' . pg_tty($db_baza) . "<br />\n";
    echo 'Options: ' . pg_options($db_baza) . "<br />\n";
    echo "\r\n<br />";

    $db_baza = pg_close("host=localhost dbname=baza user=baza password=1q23a4");
}

?>

