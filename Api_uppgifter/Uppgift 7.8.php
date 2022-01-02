<?php
declare (strict_types=1);
//Skapa en php-fil som skickar följande information om månaderna i XML-format: Nummer, svenskt namn, svensk förkortning, engelskt namn, engelsk förkortning och antal dagar.

$månad=new DOMDocument('1.0', 'UTF-8');
$månad-> formatOutput=true;
$info=$månad-> createElement('Månaderna');
$månad-> appendChild($info);

$januari=$månad-> createElement('januari');
$januari-> appendChild($månad-> createElement('Nummer', "1"));
$januari-> appendChild($månad-> createElement('Namn', "Svenskt: januari/jan, Engelskt: january/jan"));
$januari-> appendChild($månad-> createElement('Dagar', "31"));
$info-> appendChild($januari);

$februari=$månad-> createElement('februari');
$februari-> appendChild($månad-> createElement('Nummer', "2"));
$februari-> appendChild($månad-> createElement('Namn', "Svenskt: februari/feb, Engelskt: february/feb"));
$februari-> appendChild($månad-> createElement('Dagar', "28"));
$info-> appendChild($februari);

$mars=$månad-> createElement('mars');
$mars-> appendChild($månad-> createElement('Nummer', "3"));
$mars-> appendChild($månad-> createElement('Namn', "Svenskt: mars/mar, Engelskt: march/mar"));
$mars-> appendChild($månad-> createElement('Dagar', "31"));
$info-> appendChild($mars);

$april=$månad-> createElement('april');
$april-> appendChild($månad-> createElement('Nummer', "4"));
$april-> appendChild($månad-> createElement('Namn', "Svenskt: april/apr, Engelskt: april/aprl"));
$april-> appendChild($månad-> createElement('Dagar', "30"));
$info-> appendChild($april);

$maj=$månad-> createElement('maj');
$maj-> appendChild($månad-> createElement('Nummer', "5"));
$maj-> appendChild($månad-> createElement('Namn', "Svenskt: maj/maj, Engelskt: may/may"));
$maj-> appendChild($månad-> createElement('Dagar', "31"));
$info-> appendChild($maj);

$juni=$månad-> createElement('juni');
$juni-> appendChild($månad-> createElement('Nummer', "6"));
$juni-> appendChild($månad-> createElement('Namn', "Svenskt: juni/jun, Engelskt: june/jun"));
$juni-> appendChild($månad-> createElement('Dagar', "30"));
$info-> appendChild($juni);

$juli=$månad-> createElement('juli');
$juli-> appendChild($månad-> createElement('Nummer', "7"));
$juli-> appendChild($månad-> createElement('Namn', "Svenskt: juli/jul, Engelskt: july/jul"));
$juli-> appendChild($månad-> createElement('Dagar', "31"));
$info-> appendChild($juli);

$augusti=$månad-> createElement('augusti');
$augusti-> appendChild($månad-> createElement('Nummer', "8"));
$augusti-> appendChild($månad-> createElement('Namn', "Svenskt: augusti/aug, Engelskt: august/aug"));
$augusti-> appendChild($månad-> createElement('Dagar', "31"));
$info-> appendChild($augusti);

$september=$månad-> createElement('september');
$september-> appendChild($månad-> createElement('Nummer', "9"));
$september-> appendChild($månad-> createElement('Namn', "Svenskt: september/sep, Engelskt: september/sep"));
$september-> appendChild($månad-> createElement('Dagar', "30"));
$info-> appendChild($september);

$oktober=$månad-> createElement('oktober');
$oktober-> appendChild($månad-> createElement('Nummer', "10"));
$oktober-> appendChild($månad-> createElement('Namn', "Svenskt: oktober/okt, Engelskt: october/oct"));
$oktober-> appendChild($månad-> createElement('Dagar', "31"));
$info-> appendChild($oktober);

$november=$månad-> createElement('november');
$november-> appendChild($månad-> createElement('Nummer', "11"));
$november-> appendChild($månad-> createElement('Namn', "Svenskt: november/nov, Engelskt: november/nov"));
$november-> appendChild($månad-> createElement('Dagar', "30"));
$info-> appendChild($november);

$december=$månad-> createElement('december');
$december-> appendChild($månad-> createElement('Nummer', "12"));
$december-> appendChild($månad-> createElement('Namn', "Svenskt: december/dec, Engelskt: december/dec"));
$december-> appendChild($månad-> createElement('Dagar', "31"));
$info-> appendChild($december);

$vinter=[$december, $januari, $februari];
$vår=[$mars, $april, $maj];
$sommar=[$juni, $juli, $augusti];
$höst=[$september, $oktober, $november];

header("Content-type:application/xml; charset=UTF-8");
echo $månad-> saveXML();

