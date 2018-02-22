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
$aeg = $_POST["paev"].".".$_POST["kuu"].".".$_POST["aasta"];
#echo $aeg.' ,   '.$eesnimi.'    ,   '.$perenimi;
echo "Sisestatud nimi:".$eesnimi." ".$perenimi."<br>";
echo "Sisestatud kuupäev:".$aeg;
# Andmebaasi saatmiseks
$servername = "localhost";
$username = "Saladus";
$password = "Saladus";
$dbname = "Pole tehtud";

// Create connection
#$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
#if ($conn->connect_error) {
#    die("Connection failed: " . $conn->connect_error);
#}
#
#$sql = "INSERT INTO nimed (eesnimi, perenimi, aeg)
#VALUES ('$eesnimi', '$perenimi', '$aeg')";
#
#if ($conn->query($sql) === TRUE) {
#    echo "New record created successfully";
#} else {
#    echo "Error: " . $sql . "<br>" . $conn->error;
#}
#
#$conn->close();
echo "<br><br>INSERT INTO nimed (eesnimi, perenimi, aeg) VALUES ('$eesnimi', '$perenimi', '$aeg')";