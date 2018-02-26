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
$eesnimi = $_POST["eesnimi"];
$perenimi = $_POST["perenimi"];
$aeg = $_POST["aasta"]."-".$_POST["kuu"]."-".$_POST["paev"];
$conn = new mysqli($servername, $username, $password, $dbname);
function uhendus()
{
    global $servername, $username, $password, $dbname, $conn;
    #Loo ühendus
    $conn = new mysqli($servername, $username, $password, $dbname);
    #Kontrolli ühendust
    if ($conn->connect_error) {
        die("<br>Ühendus puudub" . $conn->connect_error);
    }
    return $conn;
}
function send() {
    global $eesnimi,$perenimi, $aeg, $servername, $username, $password, $dbname, $conn;
    #Andmete saatmine
        $con=mysqli_connect($servername,$username,$password,$dbname);
        $val = mysqli_query($con,"select * from andmed WHERE eesnimi='$eesnimi' AND perenimi='$perenimi'");
        if (!$val) {
            die('Error: ' . mysqli_error($con));
        }
        if(mysqli_num_rows($val) > 0) {
            echo "See isik on juba andmed sisestanud!<br><br>";
        } else {
            $sql = "INSERT INTO andmed (eesnimi, perenimi, aeg) VALUES ('$eesnimi', '$perenimi', '$aeg')";
            #Kontrollin kas andmed on saadetud
            if ($conn->query($sql) === TRUE) {
                echo "Andmed edastatud!<br><br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

}
function selectALL() {
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