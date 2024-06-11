<?php
$x = array(10,20,30,40,50);

echo $x[2];
echo "<br>";
echo $x[3];
echo "<br> isi array : <br>";

foreach($x as $isi)
{
    echo $isi."<br>";
}
echo "<br> isi array : <br>";
$y = array ("tr01" => 2000, "tr02"=> 3000, "tr03"=>4000);

echo $y['tr02'];

?>
