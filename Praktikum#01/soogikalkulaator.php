<?php
/**
 * Created by PhpStorm.
 * User: martti.lusti
 * Date: 30.01.2018
 * Time: 11:28
 */
# Vajalikud muutujad
$hind = 2.55;
$soodustus = 15;
$toetus = 1.80;

#funktsioon soodustuse arvutamiseks
/**
 * @param $taisHind
 * @param $soodusKaart
 * @param $kasOledOpilane
 */
function soogiHind($taisHind, $soodusKaart = false, $kasOledOpilane = false){
    // funktsiooni sisu
    $soodusHind = $taisHind;
    $soodustusProtsent = 15; // %
    $opilaseToetus = 1.80; // EUR
    if($soodusKaart){
        $soodusHind = $taisHind * ((100 - $soodustusProtsent) / 100);
    }
    if($kasOledOpilane){
        $soodusHind = $soodusHind - $opilaseToetus;
        // $soodusHind -= $opilaseToetus; // - operaatori lühendatud kuju
    }
    return $soodusHind;
}// funktsiooni lõpp

// testimiseks paneme erinevad väärtused paika
// kasutame selleks massiivi kujul (soodusKaart, kasOledOpilane)
//
$opilane = array(true, true); // olemas soodus - $opilane[0] ja oled õpilane - $opilane[1]
$opetaja = array(true, false); // olemas soodus aga õpilane ei ole
$kulaline = array(false, false); // pole soodustust ja pole õpilane
// kutsume funktsiooni tööle
// kui oled õpilane
$soogiHind = soogiHind(2.65, $opilane[0], $opilane[1]);
echo 'Prae hind õpilasele = '.round($soogiHind, 2).' €<br />';
// kui olemas klinedi kaart, aga pole õpilane
$soogiHind = soogiHind(2.65, $opetaja[0], $opetaja[1]);
echo 'Prae hind sooduskaardi omanikule = '.round($soogiHind, 2).' €<br />';
// kui ei ole kliendi kaarti
$soogiHind = soogiHind(2.65, $kulaline[0], $kulaline[1]);
echo 'Prae hind = '.round($soogiHind, 2).' €<br />';