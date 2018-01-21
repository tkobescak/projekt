<html>
<body>
<?php

$arr_boje=array('plavo','žuto','zeleno');
echo $arr_boje[0] ."<br>"; // ispisat će 'plavo'
echo $arr_boje[1] ."<br>"; // ispisat će 'žuto'
echo $arr_boje[2] ."<br>"."<br>"; // ispisat će 'zeleno'
$arr_boje[0]='crveno'; // dodaje novi element u niz
echo "Promjena plavo u crveno, 0-ta BOJA JE: " . $arr_boje[0] ."<br>";
$arr_boje[2]='ljubičasto'; // mijenja staru vrijednost na indexu 2 - zeleno prelazi u ljubičasto
echo "Promjena zeleno u ljubičato, 2-ta BOJA JE: " . $arr_boje[2] ." <br>";
echo "<br>";
echo $arr_boje[0] ."<br>"; // ispisat će 'plavo'
echo $arr_boje[1] ."<br>"; // ispisat će 'žuto'
echo $arr_boje[2] ."<br>"."<br>"; // ispisat će 'zeleno'
echo $arr_boje[3] ."<br>"; // ispisat će 'plavo'
echo $arr_boje[4] ."<br>"; // ispisat će 'žuto'
echo $arr_boje[5] ."<br>"."<br>"; // ispisat će 'zeleno'
echo "<br>";
?>
</body>
</html>
