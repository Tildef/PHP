<?php

$idag = date('l j F Y');
echo "Idag är $idag <br>";

$omEnVecka = date("Y-m-d", strtotime("week"));
echo "Om en vecka är det $omEnVecka <br>";

$fosstaTossdanIMass = date("Y-m-d", strtotime("first Thursday of march 2022"));
echo "Smålänningarnas nationaldag: $fosstaTossdanIMass <br>";

$date = date_create();
var_dump(date_add($date, date_interval_create_from_date_string('1000 days')));
$datetime1 = new DateTime("2008-02-17");
$datetime2 = new DateTime("2021-09-06");
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');

//New dateTime = man tar fram ett datum
//$datetime1->diff($datetime2) = men gör en skillnad mellan date 1 och date 2
//%R = +, %a= antal dagar.