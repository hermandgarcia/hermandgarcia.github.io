<?php
error_reporting(1);
include "conexion.php";

$id = $_REQUEST['id'];
$cedula = $_POST['cedula'];
$nombrecompleto = $_POST['nombrecompleto'];
$login = $_POST['login'];
$clave = $_POST['clave'];
$nivel = $_POST['nivel'];

$sql = "UPDATE usuario SET 
cedula = '$cedula', 
nombrecompleto = '$nombrecompleto',
login = '$login',
clave = '$clave',
nivel = '$nivel' WHERE id = $id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: listar.php");
}else {
    echo "No se insertaron los datos";
}