<?php
/**
 * Created by PhpStorm.
 * User: martti.lusti
 * Date: 2.03.2018
 * Time: 10:57
 */
//require_once 'tabel.php';
//$minuTabel = new tabel(array('a','b','c'));
//$minuTabel->lisarida(array(1,2,3));
//$minuTabel->lisarida(array(4,5,6));
//echo '<pre>';
//print_r($minuTabel);
//echo '<pre>';
//$minuTabel->prindiTabel();
require_once 'htmlTable.php';
$htmlTabel = new htmlTabel(array('a','b','c'), '#ff0000');
$htmlTabel->lisarida(array(1,2,3));
$htmlTabel->lisarida(array(4,5,6));
echo '<pre>';
print_r($htmlTabel);
echo '</pre>';
$htmlTabel->prindiTabel();