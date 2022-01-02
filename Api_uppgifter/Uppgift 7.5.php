<?php
declare (strict_types=1);
//skapa en php-fil som returnerar veckans bioprogram som ett JSON-dokument

$program1=new stdClass();
$program1-> bioprogram1=new stdClass();


$måndag=new stdClass();
$måndag-> Måndag="↓";
$måndag-> Film1="kl.18:00 - Sagan om Karl-Bertil Jonssons Julafton";
$måndag-> Film2="kl.20:00 - House of Gucci";

$tisdag=new stdClass();
$tisdag-> Tisdag="↓";
$tisdag-> Film1="kl.18:00 - Ghostbusters: Afterlife";
$tisdag-> Film2="kl.20:20 - West side story";

$onsdag=new stdClass();
$onsdag-> Onsdag="↓";
$onsdag-> Film1="kl.18:00 - Tunturin Tarina (Sagan om fjället)";
$onsdag-> Film2="kl.20:00 - House of Gucci";

$torsdag=new stdClass();
$torsdag-> Torsdag="↓";
$torsdag-> Film1="kl.18:00 - Sagan om Karl-Bertil Jonssons Julafton";
$torsdag-> Film2="kl.20:15 - West side story";

$sal1=[$måndag, $tisdag, $onsdag, $torsdag];
$program1-> bioprogram1-> sal1=$sal1;

$program2=new stdClass();
$program2-> bioprogram2=new stdClass();

$måndag1=new stdClass();
$måndag1-> Måndag="↓";
$måndag1-> Film1="kl.18:15 - Ghostbusters Afterlife";
$måndag1-> Film2="kl.20:30 - Tryffeljägarna från Piemonte";

$tisdag1=new stdClass();
$tisdag1-> Tisdag="↓";
$tisdag1-> Film1="kl.18:15 - Tryffeljägarna från Piemonte";
$tisdag1-> Film2="kl.20:20 - Den Svavelgula Himlen";

$onsdag1=new stdClass();
$onsdag1-> Onsdag="↓";
$onsdag1-> Film1="kl.18:15 - Ghostbusters Afterlife";
$onsdag1-> Film2="kl.20:30 - West side story";

$torsdag1=new stdClass();
$torsdag1-> Torsdag="↓";
$torsdag1-> Film1="kl.18:15 - Den Svavelgula Himlen";
$torsdag1-> Film2="kl.20:30 - House of Gucci";


$sal2=[$måndag1, $tisdag1, $onsdag1, $torsdag1];
$program2-> bioprogram2-> sal2=$sal2;

$program=[$program1, $program2];
header("Content-type:application/json; charset=UTF-8");
echo json_encode($program, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


