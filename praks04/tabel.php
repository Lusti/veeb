<?php
/**
 * Created by PhpStorm.
 * User: martti.lusti
 * Date: 2.03.2018
 * Time: 10:15
 */
class tabel {
    var  $tabeliSisu = array();
    var $pealkirjad = array();
    var $veergudearv;

public function __construct(array $pealkirjad) {
    $this->pealkirjad = $pealkirjad;
    $this->veergudearv = count($pealkirjad);
}
function lisarida($rida) {
    if(count($rida) != $this->veergudearv) {
        return false;
    }
    array_push($this->tabeliSisu,$rida);
    return true;
}
function prindiTabel() {
    echo '<table border="1">';
    echo '<tr>';
    foreach ($this->pealkirjad as $pealkiri) {
        echo '<th bgcolor="'.$this->taustaVarv.'">'.$pealkiri.'</th>';
    }
    echo "\tr";
    foreach ($this->tabeliSisu as $reaNumber=>$rida) {
        echo '<tr>';
        foreach ($rida as $reaElement) {
            echo '<td bgcolor="'.$this->taustaVarv.'">'.$reaElement.'</td>';
        }
        echo "\tr";
    }
    echo '</table>';
}
}