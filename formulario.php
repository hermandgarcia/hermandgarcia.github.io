<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Nuevo usuario</title>
</head>
<body>
<center>
    <section class="main">
        <form class="form" action="cargar.php" method="post" id="form1" name="form1" onsubmit="return validar();">
        <table border="1">
            <tr> 
                <th > Nuevo Usuario.  </th>
            </tr>
            <div class="form_container">
               
              
                  <tr><td>
                  <div class="form_group">
                  <input type="number" name="cedula" id="cedula" class="form_input" placeholder="cédula">
                    <label for="name" class="form_label">Cedula:</label>
                </td>
                  </tr></div>
                              
                   <td>
                   <div class="form_group">    
                   <input type="text" name="nombrecompleto" id="nombrecompleto" class="form_input" placeholder="">
                       
                   <label for="name" class="form_label">Nombreee Completo:</label>
                     </div>

                </td>
                    </div>
                    
                   <tr>
                    <td>
                    <div class="form_group">
                    <input type="text" name="login" id="login" class="form_input" placeholder="">
                    <label for="name" class="form_label">Login :</label>   
                </td>
                   </tr>
                </div>
                   
                    <tr>
                    <td>
                    <div class="form_group">
                  <input type="password" name="clave" class="form_input" placeholder="">
                    <label for="name" class="form_label">Clave:</label>  
                </td>
                    </tr>
                    <tr>
                    <td>
                </div>
                        <!-- <div class="form_group"> -->
                            
                        <center>
                        <label for="name"style = "font-size:16px; color:#000000;" > Nivel:</label> 
                      
                        <select id="nivel" name="nivel" >
      
                        <option value="" selected >Seleccione...</option>
                        <option value="Usuario">usuario</option>
                        <option value="Administrador">administrador</option>
                        </select>
                        <!-- <label for="name"style = "font-size:16px; color:#000000;" > Nivel:</label> -->
                        </div>
                        </td></tr>
                        <tr>
                        <td>   
                        <center> 
                        <input type="submit" name="" class="form_submit" value="Ingresar" onclick="validar()">
                <input type="reset" class="form_submit" value="Cancelar" />
                </td>
                </tr>
                </table>
                <br>
                <tr>
                <a href="index.php" class="form_submit">Menu Principal</a>
              
                </tr>
            </div>
           
        </form>
    </section>
  
</body>

</html>