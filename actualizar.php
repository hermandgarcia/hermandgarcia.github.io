


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Modificar Usuario</title>
</head>

<body>
    <center>
    <?php
        include "conexion.php";
        $id = $_REQUEST['id'];
        $Sql = "SELECT * FROM usuario WHERE id = $id";
        $resultado = $conexion->query($Sql);
        $Fila = $resultado->fetch_assoc();
    ?>
    <section class="main">
            <form class="form" action="editar_usuario.php?id=<?php echo $Fila["id"]?>" method="post" id="form1" name="form1" onsubmit="return validar();">
             
            <table border="1">
            <tr> 
                <th > Modificar  Usuario.  </th>
            </tr>
                <div class="form_container">
                    
                    <tr><td>
                    <div class="form_group">
                    <label for="name" class="form_label">Cedula:</label>
                        <input type="number" name="cedula" id="cedula" class="form_input" placeholder="" value="<?php echo $Fila['cedula']?>">
                       
                        </td></tr></div>
                  
                    <td>
                   <div class="form_group">    
                   <input type="text" name="nombrecompleto" id="nombrecompleto" class="form_input" placeholder="">
                       
                   <label for="name" class="form_label">Nombre Completo:</label>
                     </div>
                </td>

                <!-- <div class="form_group">
                    <tr><td>
                        <input type="text" name="nombrecompleto" id="nombrecompleto" class="form_input" placeholder="" value="<?php echo $Fila['nombrecompleto']?>">
                        <label for="name" class="form_label">Nombre Completo:</label>
                        </td></tr></div> -->

                  
                    <tr><td>
                    <div class="form_group">
                              <input type="text" name="login" id="login" class="form_input" placeholder="" value="<?php echo $Fila['login']?>">
                        <label for="name" class="form_label">Login:</label>
                        </td></tr></div>
                   
                    <tr><td>
                    <div class="form_group">
                        <input type="password" name="clave" id="clave" class="form_input" placeholder="clavesss" value="<?php echo $Fila['clave']?>">
                        <label for="name" class="form_label">Clave:</label>
                        </td></tr></div>
                  
                    <tr><td>
                    <!-- <center> -->
                    <div class="form_group">
                    <label for="name" class="form_label">Nivel... :</label>
                      
                    <?php echo $Fila['nivel']?>
                    <br>  
                    <select id="nivel"  name="nivel">
                        
                        <option  value="" selected>Seleccione...</option>
                     
                        <option value="Usuario">Usuario...</option>
                        <option value="Administrador">Administrador...</option>
                    </select>
                      
                        <!-- <label for="name" class="form_label">Nivel... :</label> -->
                        </td></tr></div>
                    <br>
                    <tr><td><center>
                    <input type="submit" name="" class="form_submit" value="Guardar" onclick="validar()">
                    <input type="submit" href="listar.php" class="form_submit" value="Regresar">
                    </td></tr></div>
            </form>
        </section>
</body>
</html>