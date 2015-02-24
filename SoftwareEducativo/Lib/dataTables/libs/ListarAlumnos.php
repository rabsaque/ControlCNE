<?php 
require_once('conexion.php');
$cn=  Conectarse();
$listado=  mysql_query("select * from  alumnos",$cn);
?>

 <script type="text/javascript" language="javascript" src="js/jslistadoalumnos.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
                <thead>
                    <tr>
                        <th>Id</th><!--Estado-->
						<th>Genero</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Progreso</th>
                       
                        
                       
                       
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
                               echo '<td >'.mb_convert_encoding($reg['id'], "UTF-8").'</td>';
							   echo '<td>'.mb_convert_encoding($reg['genero'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['nombre'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['apellido'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['edad'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['est_prog'], "UTF-8").'<img src="../../Imagenes/star.png"></img></td>';
							    echo '<td ><form method="post" action="Detalles_Alumno.php"><input type="text" name="numb" value="'.mb_convert_encoding($reg['id'], "UTF-8"),'" hidden></input> <input type="submit" name="button" id="button" value="Detalles" /> </form>
							   </form></td>';
                               echo '</tr>';
                     
                        }
                    ?>
                <tbody>
            </table>
