<?php
require_once "mobil-0053.php";
require_once "mobil-sport0053.php";

// Objek dari class mobil
$avanza = new mobil0053("Avanza","Toyota",2020);
echo $avanza->infomobil0053();

// Objek dari class mobilsport
$supra = new mobilsports("Supra","Toyota",2021);
echo $supra->infomobil0053();
echo $supra->jalankanturbo();
?>