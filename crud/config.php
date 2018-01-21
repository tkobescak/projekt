
<?php
/* definirani podaci za spajanje.
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'korisnik');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'projekt');
 
/* Spajanje na MySQL bazu */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Provjera je li veza u redu
if($link === false){
    die("Greška: Nemože se spojiti na bazu. " . mysqli_connect_error());
}
?>
