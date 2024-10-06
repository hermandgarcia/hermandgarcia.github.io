<?php

    include "conexion.php";

    $cedula =$_POST["cedula"];
    $nombrecompleto =$_POST["nombrecompleto"];
    $login =$_POST["login"];
    $clave =$_POST["clave"];
    $nivel =$_POST["nivel"];

    $sql = "INSERT INTO `usuario` ( cedula , nombrecompleto , login, clave, nivel ) VALUES ('$cedula','$nombrecompleto','$login','$clave','$nivel')";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: listar.php');
    }else {
        echo "No se insertaron los datos";
    }

 

