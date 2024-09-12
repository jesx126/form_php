<?php
function conection(){
$servername = "localhost";
$database = "usuarios";
$username = "root";
$password = "";
$bd="usuarios";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
mysqli_select_db($conn,$bd);
return $conn;
};
?>