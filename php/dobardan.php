<!DOCTYPE HTML>
<html>
	<head>
		<title>DOBAR DAN</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Tomislav Kobešćak">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="css/style.css"> -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
	</head>
<body>
	<form action="dobardan.php" method="post" style="color:black; font-size:1.25em;">
				<label for="varA">Vrijednost sata:</label>
				<input type="number" id="varA" name="varA" required>
				</br>
				<label for="varB">Unesite Vase ime:</label>
				<input type="text" id="varB" name="varB" required>
				</br>
				<input type="submit" value="Pošalji" />
	</form>
	<!-- </br> -->
	<?php
	
		//echo "Dobar dan";
		//echo "<p style text-color: white;>Arnold once said: \"I'll be back\"</p>"; echo '<br>';
		
		$a = $_POST['varA'];
		$b = $_POST['varB'];
		//$c = (3*$a - $b)/2;
		
		//print "<p>\"a =\" .$a</p>"; echo '<br>';
		//print "b = ".$b; echo '<br>';
		//echo '<hr align="left" width="10%">';
		//print "c = (3a-b)/2 = ".$c;
		
		
		
		if($a>=8 && $a<=11){
			echo "Dobro jutro $b!";
		}
		elseif($a>=11 && $a<=18){
			echo "Dobro dan $b!";
		}
		elseif($a>=18 && $a<=22){
			echo "Dobro vecer $b!";
		}
		else{
			echo "Vrijem ti je za kreveta $b!";
		}
	?>
</body>
</html>
