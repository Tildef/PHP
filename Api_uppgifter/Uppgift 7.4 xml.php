<?php
declare (strict_types=1);

$meny=new DOMDocument('1.0', 'UTF-8');
$meny-> formatOutput=true;
$mat=$meny-> createElement('Veckans_menu');
$meny-> appendChild($mat);

$måndag=$meny-> createElement('måndag');
$måndag-> appendChild($meny-> createElement('Lunch', "Chicken nuggets, ris centralkök"));
$måndag-> appendChild($meny-> createElement('Vegetariskt', "Falafel, ris centralkök"));
$mat-> appendChild($måndag);

$tisdag=$meny-> createElement('tisdag');
$tisdag-> appendChild($meny-> createElement('Lunch', "Kyckling, ris, currysås centralkök"));
$tisdag-> appendChild($meny-> createElement('Vegetariskt', "Indisk currygryta, ris centralkök"));
$mat-> appendChild($tisdag);

$onsdag=$meny-> createElement('onsdag');
$onsdag-> appendChild($meny-> createElement('Lunch', "Fläskschnizel med pommes frites, pepparsås och Aioli, sallads tallrik"));
$onsdag-> appendChild($meny-> createElement('Vegetariskt', "Vegetarisk schnitzel med pommes frites, pepparsås och aioli"));
$mat-> appendChild($onsdag);

$torsdag=$meny-> createElement('torsdag');
$torsdag-> appendChild($meny-> createElement('Lunch', "Asiatisk biff och nudelsoppa, bröd"));
$torsdag-> appendChild($meny-> createElement('Vegetariskt', "Asiatisk tofu och nudelsoppa"));
$dessert=$meny-> createElement('Dessert', "Kokos och passionsfrukts glass");
$torsdag-> appendChild($dessert);
$mat-> appendChild($torsdag);

$fredag=$meny-> createElement('fredag');
$fredag-> appendChild($meny-> createElement('Lunch', "Fiskfärsbiff á la Wallenberg, skirat smör, pepparrot, gröna ärter och potatis på tallrik. Sallad på tallrik"));
$fredag-> appendChild($meny-> createElement('Vegetariskt', "Grön örtotto, med kungsmussling och örtpanko. Sallad på tallrik"));
$mat-> appendChild($fredag);

header("Content-type:application/xml; charset=UTF-8");
echo $meny-> saveXML();

