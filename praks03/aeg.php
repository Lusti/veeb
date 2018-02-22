<?php
/*
░░░░░░░░▀▀▀██████▄▄▄
░░░░░░▄▄▄▄▄░░█████████▄ 
░░░░░▀▀▀▀█████▌░▀▐▄░▀▐█ 
░░░▀▀█████▄▄░▀██████▄██ 
░░░▀▄▄▄▄▄░░▀▀█▄▀█════█▀
░░░░░░░░▀▀▀▄░░▀▀███░▀░░░░░░▄▄
░░░░░▄███▀▀██▄████████▄░▄▀▀▀██▌
░░░██▀▄▄▄██▀▄███▀░▀▀████░░░░░▀█▄
▄▀▀▀▄██▄▀▀▌████▒▒▒▒▒▒███░░░░▌▄▄▀
▌░░░░▐▀████▐███▒▒▒▒▒▐██▌
▀▄░░▄▀░░░▀▀████▒▒▒▒▄██▀
░░▀▀░░░░░░▀▀█████████▀
░░░░░░░░▄▄██▀██████▀█
░░░░░░▄██▀░░░░░▀▀▀░░█
░░░░░▄█░░░░░░░░░░░░░▐▌
░▄▄▄▄█▌░░░░░░░░░░░░░░▀█▄▄▄▄▀▀▄
▌░░░░░▐░░░░░░░░░░░░░░░░▀▀▄▄▄▀
*/
require_once 'funktsioonid.php';
loeVormFailist('aegvorm.html');

$eesnimi = $_POST["eesnimi"];
$perenimi = $_POST["perenimi"];
$aeg = $_POST["aasta"]."-".$_POST["kuu"]."-".$_POST["paev"];
#echo $aeg.' ,   '.$eesnimi.'    ,   '.$perenimi;
echo "Sisestatud nimi:".$eesnimi." ".$perenimi."<br>";
echo "Sisestatud kuupäev:".$aeg;
# Andmebaasi saatmiseks
$servername = "localhost";
$username = "lustimarttiiktkh";
$password = "Tyra12345";
$dbname = "lustimar_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO andmed (eesnimi, perenimi, aeg)
VALUES ('$eesnimi', '$perenimi', '$aeg')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "<br><br>INSERT INTO andmed (eesnimi, perenimi, aeg) VALUES ('$eesnimi', '$perenimi', '$aeg')";