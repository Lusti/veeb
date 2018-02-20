<?php
session_start();

if(!isset($_SESSION['counter'])) {
$_SESSION['counter'] = 0;
}

if(isset($_GET['button'])) {
++$_SESSION['counter'];
}
if(isset($_GET['reset'])) {
    $_SESSION['counter'] = 0;
}
?>

<form method="GET">
    Sisesta number 1-50:<br>
    <input type="hidden"    name="counter"  value="<?php echo $_SESSION['counter']; ?>" />
    <input type="number"    name="number"   min="1" max="50">
    <input type="submit"    name="button"   value="Vali!" />
</form>
<?php
$number = 10;
$pakutudnumber = $_GET["number"];
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

echo "<br>Proov:" .$_SESSION['counter'];
?>
<form mehot="GET">
    <br>
    <input type="submit" name="reset" Value="Alusta Uuesti!">
</form>
