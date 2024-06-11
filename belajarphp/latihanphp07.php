<?php
if(isset($_POST["tambah"]))
{
    $n1 = $_POST["nilai1"];
    $n2 = $_POST["nilai2"];
    echo $n1+$n2;
}
elseif(isset($_POST["kali"]))
{
    $n1 = $_POST["nilai1"];
    $n2 = $_POST["nilai2"];
    echo $n1*$n2;
}
elseif(isset($_POST["kurang"]))
{
    $n1 = $_POST["nilai1"];
    $n2 = $_POST["nilai2"];
    echo $n1-$n2;
}
elseif(isset($_POST["bagi"]))
{
    $n1 = $_POST["nilai1"];
    $n2 = $_POST["nilai2"];
    echo $n1/$n2;
}


?>