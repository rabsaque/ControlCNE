<?php require_once('conexion.php');
$cn=  Conectarse();
$listado=  mysql_query("select * from  ingresosherramientas",$cn);
?>

 <script type="text/javascript" language="javascript" src="js/jslistadoherramientas.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
                <thead>
                    <tr>
                        <th>Proveedor</th><!--Estado-->
                        <th>Fecha de compra</th>
                         
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                       
                        
                        <th>Status</th>
                       
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
                               echo '<td >'.mb_convert_encoding($reg['proveedor'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['fec_com'], "UTF-8").'</td>';
                               
                               echo '<td>'.mb_convert_encoding($reg['tip'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['marc'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['mod'], "UTF-8").'</td>';
                               
                              echo '<td>'.mb_convert_encoding($reg['status'], "UTF-8").'</td>';
                               

                               echo '</tr>';
                     
                        }
                    ?>
                <tbody>
            </table>
