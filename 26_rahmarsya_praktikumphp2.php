<?php
$a = 10;  

$b = 5;
$c = " ";

$hasilp = "Hasil 10+5:";
echo $hasilp, $c,  $a + $b;


$hasilmin = "Hasil 10-5:";
echo "<br>", $hasilmin, $c, $a - $b;

$hasilkal = "Hasil 10x5:";
echo "<br>", $hasilkal, $c, $a * $b;

$hasilbag = "Hasil 10 / 5:";
echo "<br>", $hasilbag, $c, $a / $b;

$hasiltr = "10 Lebih Besar 5:";
echo "<br>", $hasiltr, $c, var_export($a > $b);

$hasilsam = "10 Sama Dengan 5:";
echo "<br>", $hasilsam, $c, var_export($a == $b), "<br>";

$d = (true and false);
echo 'Logika AND = ';
echo var_export($d)."<br/>";

$e = (true or false);
echo 'Logika OR = ';
echo var_export($e)."<br/>";
?>