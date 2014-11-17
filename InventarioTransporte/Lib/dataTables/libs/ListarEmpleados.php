<?php 
require_once('conexion.php');
$cn=  Conectarse();
$listado=  mysql_query("select * from  infoempleado",$cn);
?>

 <script type="text/javascript" language="javascript" src="js/jslistadoempleados.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
                <thead>
                    <tr>
                        <th>Ci</th><!--Estado-->
                        <th>Codigo</th>
                         
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                       
                        
                        <th>Direccion</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                       
                     
                    </tr>
                </tfoot>
                  <tbody>
                    <?php

     
                   while($reg=  mysql_fetch_array($listado))
                   {
                               echo '<tr>';
                               echo '<td >'.mb_convert_encoding($reg['ci'], "UTF-8").'</td>';
							  
                               echo '<td>'.mb_convert_encoding($reg['codigo'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['nombre'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['apellido'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['telefono'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['direccion'], "UTF-8").'</td>';
							    echo '<td ><form method="post" action="Modificar_Empleado.php"><input type="text" name="numb" value="'.mb_convert_encoding($reg['ci'], "UTF-8"),'" hidden></input> <input type="submit" name="button" id="button" value="Mod" /> </form><form method="post" action="Borrar_Empleado.php"><input type="text" name="numb" value="'.mb_convert_encoding($reg['ci'], "UTF-8"),'" hidden><input type="submit" name="button" id="button" value="Borr" /></form>
							   </form><form method="post" action="Imprimir_Empleado.php"><input type="text" name="numb" value="'.mb_convert_encoding($reg['ci'], "UTF-8"),'" hidden><input type="submit" name="button" id="button" value="Impr" /></form></td>';
                               echo '</tr>';
                     
                        }
                    ?>
                <tbody>
            </table>
