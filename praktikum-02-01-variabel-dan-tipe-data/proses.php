<?php

if ($txtnim = isset ($_POST["txtnim"]) ? $_POST["txtnim"] : "" 
AND $txtname = isset ($_POST["txtname"]) ? $_POST["txtname"] : "" 
AND $txtstudi = isset ($_POST["txtstudi"]) ? $_POST["txtstudi"] : ""){
    
    echo "<p>Hai, perkenalkan nama saya adalah : ".$txtname. " dengan NIM : ".$txtnim." saya adalah mahasiswa dari program studi :".$txtstudi;
}
else
{
   echo("Isi Semua Data,'<a href=input.html>Klik Di Sini</a>' untuk kembali" );
}
?>