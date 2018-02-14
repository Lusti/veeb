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
function soogiHind($taisHind, $soodusKaart, $kasOledOpilane){
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

// kutsume funktsiooni tööle
// kui oled õpilane
$soogiHind = soogiHind(2.65, true, true);
echo 'Prae hind õpilasele = '.round($soogiHind, 2).' €<br />';
// kui olemas klinedi kaart, aga pole õpilane
$soogiHind = soogiHind(2.65, true, false);
echo 'Prae hind sooduskaardi omanikule = '.round($soogiHind, 2).' €<br />';
// kui ei ole kliendi kaarti
$soogiHind = soogiHind(2.65, false, false);
echo 'Prae hind = '.round($soogiHind, 2).' €<br />';