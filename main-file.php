<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo $riel;
echo "\n".$kyat;
echo "\n".$krones;
echo "\n".$lek;

$riel_to_usd = 0.00026;
$kyat_to_usd =  0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;

echo "\n".$riel * $riel_to_usd;
echo "\n".$kyat * $kyat_to_usd;
echo "\n".$krones * $krones_to_usd;
echo "\n".$lek * $lek_to_usd;

$final_amount = ($riel * $riel_to_usd) + ($kyat * $kyat_to_usd) + ($krones * $krones_to_usd) + ($lek * $lek_to_usd) - 4;
echo "\n".$final_amount;
