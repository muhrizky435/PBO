<?php

require_once "Hewan.php";
require_once "Singa.php";
require_once "Burung.php";
require_once "Ikan.php";

$singa = new Singa();
echo "<br>";
$singa->bersuara();
echo "<br>";
$singa->bergerak();
echo "<br>";
echo "<br>";

$burung = new Burung();
echo "<br>";
$burung->bersuara();
echo "<br>";
$burung->bergerak();
echo "<br>";
echo "<br>";

$ikan = new Ikan();
echo "<br>";
$ikan->bersuara();
echo "<br>";
$ikan->bergerak();