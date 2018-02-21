<?php
session_start();

if(!isset($_SESSION['counter'])) {
$_SESSION['counter'] = 0;
}

if(isset($_POST['button'])) {
++$_SESSION['counter'];
}
if(isset($_POST['reset'])) {
    $_SESSION['counter'] = 0;
    $_SESSION['serveriArv'] = rand(1, 50);
}
#$serveriArv = isset($_SESSION['serveriArv']) ? rand(1,50);
if (!isset($_SESSION['serveriArv'])) {
    $_SESSION['serveriArv'] = rand(1, 50);
} else {
    $serveriArv = $_SESSION['serveriArv'];
}
$proov = $_SESSION['counter'];
echo '
    <form method="POST">
        Sisesta number 1-50:<br>
        <input type="hidden"    name="counter"  value="'.$proov.'">
        <input type="hidden"    name="serveriarv" value="'.$serveriArv.'">
        <input type="number"    name="number"   min="1" max="50">
        <input type="submit"    name="button"   value="Vali!" />
    </form>
';

#$number = 10;
#$serveriArv = $number;
$pakutudnumber = $_POST["number"];
if  (empty($pakutudnumber)) {
    echo "";
}   elseif ($pakutudnumber >= $serveriArv - 5 and $pakutudnumber < $serveriArv) {
    echo "Sinu arv on natukene väiksem";
}   elseif ($pakutudnumber <= $serveriArv + 5 and $pakutudnumber > $serveriArv) {
    echo "Sinu arv on natukene Suurem";
}   elseif ($pakutudnumber< "$serveriArv") {
    echo "Liiga väike arv";
}   elseif ($pakutudnumber> "$serveriArv") {
    echo "Liiga suur arv";
}   elseif ($pakutudnumber = $serveriArv) {
    echo "Palju Õnne!";
}

echo "<br>Proov:" .$_SESSION['counter'];
?>
<form mehot="POST">
    <br>
    <input type="submit" name="reset" Value="Alusta Uuesti!">
</form>
