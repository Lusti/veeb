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
// kasutajad on tabel (massiiv), kus
// 1. real on õpilase andmed
// 2. real on õpetaja andmed
// 3. real on külalise andmed
$kasutajad = array(
    array(
        'roll' => 'õpilasele',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
        'roll' => 'õpetajale',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'külalisele',
        'soodus' => false,
        'opilaskaart' => false
    )
);
// vaatame $kasutajad masiivi läbi
// for( tjm defineerimine; tjm kehtivuse kontroll; tjm suurendamine/vähendamine)
foreach ($kasutajad as $kasutaja){
    $soogiHind = soogiHind(2.65, $kasutaja['soodus'], $kasutaja['opilaskaart']);
    echo 'Prae hind '.$kasutaja['roll'].' = '.round($soogiHind, 2).' €<br />';
}