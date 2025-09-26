<?php
$tuntipalkka = $_POST["tuntipalkka"] ?? 0;
$tuntimaara = $_POST["tuntimaara"] ?? 0;
$viikonloppulisat = $_POST["viikonloppulisat"] ?? 0;
$viikonloppujen_maara = $_POST["viikonloppujen_maara"] ?? 0;
$yhteispalkka = $tuntipalkka * $tuntimaara + $viikonloppulisat * $viikonloppujen_maara;
echo "Yhteispalkka: " . $yhteispalkka;
?>