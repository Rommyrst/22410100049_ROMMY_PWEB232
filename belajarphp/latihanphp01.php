<?php 
/* 
PROGRAM PERTAMA
*/

echo "BELAJAR PHP";
echo "<br>";

//echo "test";

$a = 10;
$b = 20;
$c = $a+$b;

echo "<br>";
echo "Hitung $a + $b = $c";
echo "<br>";
echo "Hitung" .$a. " + " .$b. " = " .$c;
echo "<br>";

$x= 40;

if($x > 50)
{
    echo " lebih besar dari 50 ";
}
else
{
    echo" kurang dari 50 ";
}

echo "<br>";
$x = 3;
switch ($x)
{
    case 1 : echo "Senin"; break;
    case 2 : echo "Selasa"; break;
    case 3 : echo "Rabu"; break;
    case 4 : echo "Kamis"; break;
    case 5 : echo "Jumat"; break;
    case 6 : echo "Sabtu"; break;
    case 7 : echo "Minggu"; break;
    default : echo "nilai lebih";

}

?>