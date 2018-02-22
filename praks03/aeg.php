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

#Loo ühendus
$conn = new mysqli($servername, $username, $password, $dbname);
#Kontrolli ühendust
if ($conn->connect_error) {
    die("<br>Connection failed: " . $conn->connect_error);
}

#Andmete saatmine

$sql = "INSERT INTO andmed (eesnimi, perenimi, aeg)
VALUES ('$eesnimi', '$perenimi', '$aeg')";

#Kontrollin kas andmed on saadetud
if ($conn->query($sql) === TRUE) {
    echo "<br><br>Andmed edastatud!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

#echo "<br><br>INSERT INTO andmed (eesnimi, perenimi, aeg) VALUES ('$eesnimi', '$perenimi', '$aeg')";