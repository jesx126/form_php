<?php
include("../conexion/conexion.php");
$con = conection(); 
$id = null;
$nombre = $_POST['nombre'];
$ap_p = $_POST['apellido_P'];
$ap_m = $_POST['apellido_M'];
$dom = $_POST['domicilio'];


$sql = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, domicilio) VALUES ('$nombre', '$ap_p', '$ap_m', '$dom')";

$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../index.php");
} else {
    echo "Error: " . mysqli_error($con);
}
?>
