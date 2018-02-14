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