<?php
/**
 * Created by PhpStorm.
 * User: martti.lusti
 * Date: 2.03.2018
 * Time: 11:32
 */
require_once 'tabel.php';
class htmlTabel extends tabel {
    var $taustaVarv = '';

    public function __construct(array $pealkirjad, $taustaVarv)
    {
        parent::__construct($pealkirjad);
        $this->setTaustaVarv($taustaVarv);
    }
    public function setTaustaVarv($taustaVarv) {
        $this->taustaVarv = $taustaVarv;
    }
}