<?php
/**
  * Created by PhpStorm.
  * user: martti.lusti
  * date: 30.01.2018
  * time: 10:24
*/
# Valjastamine
echo "Aine - Veebiprogrammeerimine <br>"; # ; on kasu lõpp
print 'Valikaine<br>';
# Muutujate defineerimine
$eesNimi = 'Martti'; # eesnimi, string
$pereNimi = 'Lusti'; # perenimi, string
$bussiNumber = 4; # bussi number, integer
$soiduKestvus = 0.5; # sõidu kestvus, 0.5 tundi, float
# Konstandite defineerimine
define('NUMBER_PI', 3.14);
//Kasutades eel defineeritud muutujad ja konstandid
//Väljasta ilus tekst
echo 'Olen '.$eesNimi.' '.$pereNimi.'<br>';
echo 'Sõidan koolist kesklinna bussiga nr '.$bussiNumber.'<br>';
echo 'Jõuan kesklinna '.$soiduKestvus. ' tunniga<br>';
echo 'Midagi konstantset? PI = '.NUMBER_PI.'<br>';
# Tingimuslaused
$ilmvaljas = 'Sajab lund';
if ($ilmvaljas == 'Sajab lund') {
    echo "Tuleb minna sauna";
}   else {
    echo "Tuleb minna jooma";
}