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

#arvutamine
if ($hind > 0 and $soodustus > 0 and $toetus > 0) {
    $soodusHind = $hind * ((100 - $soodustus) / 100);
    $hindopilasele = $soodusHind - $toetus;
    echo 'Soogi hind opilasele = '.$hindopilasele;
} else {
    echo 'Andmed ei ole täielikud';
}
