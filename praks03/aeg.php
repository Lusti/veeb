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

echo '
<form method="post">
                Eesnimi: 
                <input type="text" name="eesnimi"   value="" required="required">
                <br><br>Perenimi:
                <input type="text" name="perenimi"  value="" required="required">
                <br><br>
                Kuu:
                <select name=kuu value="" required="required">
                    <option value="00" hidden></option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                Päev:
                <input type="number" name="paev" min="01" max="31" required="required">
                Aasta:
                <input type="number" name="aasta" min="1918" max="2013" required="required">
                <input type=submit value=Submit>
</form>
';
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