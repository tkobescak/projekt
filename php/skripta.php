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
	</head>
<body>

<?php

    echo "\r\n<br />";

// $username = $_POST["username"];
// $password = $_POST["password"];

// ispis svih post varijabli koje se prenose u formu
foreach ($_POST as $varname => $varvalue) echo "$varname---$varvalue<br />\n";

    echo "\r\n<br />";

if (strlen($_POST['id_zap']) >0) {
$db_baza = pg_connect("host=localhost dbname=baza user=wa password=12345")
or die('Nemože se spojiti na bazu: ' . pg_last_error());

    $id_dojmovnik = $_POST['id_dojmovnik'];
        if (strlen($id_dojmovnik) == 0) $id_dojmovnik = 'NULL';
    $ime = $_POST['ime'];
        if (strlen($ime) == 0) $ime = 'NULL'; 
        else $ime = "'$ime'";
    $lozinka = $_POST['lozinka'];
        if (strlen($lozinka) == 0) $lozinka = 'NULL';
    $grad = $_POST['$grad'];
        if (strlen($grad) == 0) $grad = 'NULL';
    $drzava = $_POST['$drzava'];
        if (strlen($drzava) == 0) $drzava = 'NULL';
    $mail = $_POST['$mail'];
        if (strlen($mail) == 0) $mail = 'NULL';
    $vozilo = $_POST['$vozilo'];
        if (strlen($vozilo) == 0) $vozilo = 'NULL';
    $napomena = $_POST['$napomena'];
        if (strlen($napomena) == 0) $napomena = 'NULL';
    $obavijest = $_POST['$obavijest'];
        if (strlen($obavijest) == 0) $obavijest = 'NULL';
        
    $query = "INSERT INTO dojmovnik (id_dojmovnik, ime, lozinka, grad, drzava, mail, vozilo, napomena, obavijest) 
    VALUES (
    ".$_POST['id_dojmovnik'].",
     '$_POST[username]',
     '$_POST[password]',
     '$_POST[city]',
     '$_POST[country]', 
     '$_POST[email]', 
     '$_POST[radio]',
     '$_POST[checkbox]',
     '$_POST[note]',
    )";

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

    $db_baza = pg_close("host=localhost dbname=baza user=wa password=12345");
}

?>

