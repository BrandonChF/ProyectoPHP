<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container-fluid" id="contendorprincipal">
    <h1><?php echo $this->mensaje;?></h1>
    
    <?php echo $this->mensajeResultado ?>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-secondary
        align-middle">
            <thead class="table-light">
                <caption><?php echo $this->mensaje;?></caption>
                <tr>
                    <th>Id</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                   <!--  <th>Celular</th>      <td>'.$datos->telefonocelular.'</td> -->
                   <!--  <th>Fecha Nac</th>  <td>'.$datos->fechanacimiento.'</td>-->
                 <!--    <th>Sexo</th>   <td>'.$datos->sexo.'</td>-->
                   <!--  <th>Dirección</th>  <td>'.$datos->direccion.'</td>-->
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <!-- <th>Apellido materno</th>  <td>'.$datos->apellidomaterno.'</td>-->
                    <th>Nacionalidad</th>
                    <th>Id carrera</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php 
                        foreach ($this->datos as $row) {

                            $datos = new classEstudiantes();
                            $datos = $row;
                            # code..
                            echo ' <tr class="table-secondary" >
                                    <td scope="row">'.$datos->id.'</td>
                                    <td>'.$datos->cedula.'</td>
                                    <td>'.$datos->correoelectronico.'</td>
                                    <td>'.$datos->telefono.'</td>
                                    <td>'.$datos->nombre.'</td>
                                    <td>'.$datos->apellidopaterno.'</td>
                                    <td>'.$datos->nacionalidad.'</td>
                                    <td>'.$datos->idCarreras.'</td>
                                    <td>'.$datos->usuario.'</td>
                                    <td>
                                        <a name="eliminar" id="eliminar" class="btn btn-danger" href="'.constant('URL').'estudiantes/eliminarEstudiante/'.$datos->id.'" role="button">Eliminar</a>
                                        ||
                                        <a name="editar" id="editar" class="btn btn-primary" href="'.constant('URL').'estudiantes/verEstudiante/'.$datos->id.'" role="button">Editar</a>
                                    </td>
                                </tr>';
                        }
                    ?>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>    
</div>
<?php
    require 'view/footer.php';
?>