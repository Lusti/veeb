<?php
/**
 * Created by PhpStorm.
 * User: martti.lusti
 * Date: 14.02.2018
 * Time: 11:55
 */

/** funktsioon soodustuse arvutamiseks
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

// funktsioon vormi väljastamiseks
// vorm hoiame vorm.html failis
// vormi sisu loeme antud failist ja
// väljastame
function loeVormFailist($failinimi)
{
    // siia salvestame sisu
    $sisu = '';
    // kontrollime vajaliku faili olemasolu
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        // saab failist lugeda
        $fp = fopen($failinimi, 'r'); // tekitame ühendus lugemiseks
        // loeme failist täissisu
        $sisu = fread($fp, filesize($failinimi));
        fclose($fp); // paneme ühendus failiga kinni
    } else {
        echo 'Probleem ' . $failinimi . ' failiga<br />';
        exit;
    }
    echo $sisu;

    }
