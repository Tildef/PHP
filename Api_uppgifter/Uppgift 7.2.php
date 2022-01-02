<?php
declare (strict_types=1);
//Skapa en php-fil som skickar ditt namn och födelsetid som ett XML-dokument

$jag=new DOMDocument('1.0');
$jag-> formatOutput=true;

$info=$jag-> createElement('mig');
$jag-> appendChild($info);

$info->appendChild($jag-> createElement('namn', "Tilde Fagerstrom"));
$info->appendChild($jag-> createElement('fodelsedag', "17-02-2004"));

header("Content-type:application/xml; charset=UTF-8");
echo $jag-> saveXML();

