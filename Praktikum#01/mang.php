<?php
/**
 * Created by PhpStorm.
 * User: martti.lusti
 * Date: 14.02.2018
 * Time: 12:31
 */
require_once 'funktsioonid.php';
$number = 10;
$pakutudnumber = $_GET["number"];
loeVormFailist('mang.html');
if  (empty($pakutudnumber)) {
    echo "";
}   elseif ($pakutudnumber >= $number - 5 and $pakutudnumber < $number) {
        echo "Sinu arv on natukene väiksem";
}   elseif ($pakutudnumber <= $number + 5 and $pakutudnumber > $number) {
        echo "Sinu arv on natukene Suurem";
}   elseif ($pakutudnumber< "$number") {
        echo "Liiga väike arv";
}   elseif ($pakutudnumber> "$number") {
        echo "Liiga suur arv";
}   elseif ($pakutudnumber = $number) {
        echo "Palju Õnne!";
}
$counter = 0;
while(isset($_GET['submit'])) {
        $counter++;
        break;
}
echo "Proov:" .$counter;