<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Registrar DEdario</title>
</head>
<body>
    <center>
        <div>
            <center>
                <h1>Usuarios Agregados</h1>
                    </center>
        <div>
                    <!-- <table> -->
            <table border="1">
  <thead>
   <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Login</th>
                        <th scope="col">Clave</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "conexion.php";
                    $Sql = "SELECT * FROM usuario";
                    $resultado = $conexion->query($Sql);
                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['id']?></th>
                            <td><?php echo $Fila['cedula']?></td>
                            <td><?php echo $Fila['nombrecompleto']?></td>
                            <td><?php echo $Fila['login']?></td>
                            <td><?php echo $Fila['clave']?></td>
                            <td><?php echo $Fila['nivel']?></td>
                            <td>
                                <a href="actualizar.php?id=<?php echo $Fila["id"]?>">Editar</a>
                            </td>
                            <td>
                                <a href="eliminar.php?id=<?php echo $Fila["id"]?>">Eliminar</a>
                            </td>
                        </tr>
                        
                </tbody>
              
                <?php } ?>
           
            </table>
            </br></br>
            <a href="formulario.php" class="form_submit">Registrar Usuario Nuevo</a>
           
            </br></br></br>
            <a href="index.php"  type='button'class="form_submit">Menu Principal</a>

           
        </div>

    </div>
</body>
</html>