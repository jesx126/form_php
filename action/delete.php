<?php 
include("../conexion/conexion.php");
$con = conection();
$id=$_GET['id'];
$sql = "DELETE FROM usuarios WHERE id=$id";
$query = mysqli_query($con, $sql);
if ($query) {
    Header("Location: ../index.php");
} else {
    echo "Error: " . mysqli_error($con);
} 
?>