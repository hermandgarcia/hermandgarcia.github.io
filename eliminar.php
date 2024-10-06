<?php

    include "conexion.php";

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM usuario WHERE id = $id";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: listar.php");
    }else {
        echo "No se elimino el dato";
    }
