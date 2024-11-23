<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "product";

$conn = new mysqli($servername,$username,$pass,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$kwanza = $_POST['kwanza'];
	$mwisho = $_POST['mwisho'];
	$nida = $_POST['nida'];
	$namba = $_POST['namba'];

$sql = "INSERT INTO pro (kwanza,mwisho,nida,namba) values('$kwanza','$mwisho','$nida','$namba')";
if ($conn->query($sql) === TRUE) {
            echo "New record created successfully" style = "color:red;";
        } 
}





$conn-> close();

?>