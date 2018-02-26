<?php
/**
 * Created by PhpStorm.
 * User: martt
 * Date: 02/26/18
 * Time: 22:40
 */
$servername = "localhost";
$username = "lustimarttiiktkh";
$password = "Tyra12345";
$dbname = "lustimar_test";
$conn = new mysqli($servername, $username, $password, $dbname);
$eesnimi = $_POST["eesnimi"];
$perenimi = $_POST["perenimi"];
$aeg = $_POST["aasta"]."-".$_POST["kuu"]."-".$_POST["paev"];
echo $eesnimi;
function uhendus()
{
    global $conn;
#Loo ühendus
    $conn;
#Kontrolli ühendust
    if ($conn->connect_error) {
        die("<br>Ühendus puudub" . $conn->connect_error);
    }
}
function send() {
    global $conn;
    global $eesnimi, $perenimi, $aeg;
    #Andmete saatmine
        $sql = "INSERT INTO andmed (eesnimi, perenimi, aeg) VALUES ('$eesnimi', '$perenimi', '$aeg')";
    #Kontrollin kas andmed on saadetud
    if ($conn->query($sql) === TRUE) {
        echo "<br><br>Andmed edastatud!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
function selectALL()
{
    global $conn;
    $sql = "SELECT * FROM andmed";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        # Väljastatud read
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . "  Nimi: " . $row["eesnimi"] . " " . $row["perenimi"] . " Aeg: " . $row["aeg"] . "<br>";
        }
    } else {
        echo "0 results";
        $conn->close();
    }
}