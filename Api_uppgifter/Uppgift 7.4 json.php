<?php
declare (strict_types=1); 
//Skapa en php-fil som returnerar veckans meny som en XML-fil, och en php-fil som returnerar veckans meny som en JSON-fil.
//Se till att header-informationen är korrekt!
//Skapa en php-fil som returnerar veckans meny som ett XML-dokument
$meny=new stdClass();
$meny-> veckans_meny=new stdClass();

$måndag=new stdClass();
$måndag-> Måndag="Chicken nuggets, ris centralkök";
$måndag-> Vegetariskt="Falafel, ris centralkök";

$tisdag=new stdClass();
$tisdag-> Tisdag="Kyckling, ris, currysås centralkök";
$tisdag-> Vegetariskt="Indisk currygryta, ris centralkök";

$onsdag=new stdClass();
$onsdag-> Onsdag="Fläskschnizel med pommes frites, pepparsås och Aioli, sallads tallrik";
$onsdag-> Vegetariskt="Vegetarisk schnitzel med pommes frites, pepparsås och aioli";

$torsdag=new stdClass();
$torsdag-> Torsdag="Asiatisk biff och nudelsoppa, bröd";
$torsdag-> Vegetariskt="Asiatisk tofu och nudelsoppa";
$torsdag-> Dessert=new stdClass();
$torsdag-> Dessert="Kokos och passionsfrukts glass";

$fredag=new stdClass();
$fredag-> Fredag="Fiskfärsbiff á la Wallenberg, skirat smör, pepparrot, gröna ärter och potatis på tallrik. Sallad på tallrik";
$fredag-> Vegetariskt="Grön örtotto, med kungsmussling och örtpanko. Sallad på tallrik";

$lunch=[$måndag, $tisdag, $onsdag, $torsdag, $fredag];
$meny-> veckans_meny-> lunch=$lunch;

header("Content-type:application/json; charset=UTF-8");
echo json_encode($meny, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


