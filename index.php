<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de terceros</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <br>
        <h1 class="text-center">Listado de terceros</h1>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registro">Agregar</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarcedula">Editar</button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#borrar">Borrar</button>
        <table class="table">
        <thead>
            <tr>
            <th scope="col" class="text-center">Departamento</th>
            <th scope="col" class="text-center">Municipio</th>
            <th scope="col" class="text-center">Identificación</th>
            <th scope="col" class="text-center">Nombres</th>
            <th scope="col" class="text-center">Tipo Tecero</th>
            </tr>
        </thead>
        <tbody>
        <?php include_once("php/getTerceros.php");?>
            <?php foreach ($terceros as $tercero){?>
             <tr>
                <td style="display:none;"><?php echo $tercero['id']?></td> <!--Index 0-->
                 <td align="center" ><?php echo $tercero['nombdepa']?></td> <!--Index 1-->
                 <td align="center" text-transform: uppercase><?php echo $tercero['nombmuni']?></td> <!--Index 2-->
                 <td style="display:none;"><?php echo ($tercero['tipoidentificacion'])?></td> <!--Index 3-->
                 <td style="display:none;"><?php echo ($tercero['numeroidentificacion'])?></td><!--Index 4-->
                 <td align="center"><?php echo ($tercero['tipoidentificacion'] ." ".$tercero['numeroidentificacion'])?></td><!--Index 5-->
                 <td style="display:none;"><?php echo ($tercero['nombre1'])?></td><!--Index 6-->
                 <td style="display:none;"><?php echo ($tercero['nombre2'])?></td><!--Index 7-->
                 <td style="display:none;"><?php echo ($tercero['apellido1'])?></td><!--Index 8-->
                 <td style="display:none;"><?php echo ($tercero['apellido2'])?></td><!--Index 9-->
                 <td align="center"><?php echo ($tercero['nombre1'] ." ".$tercero['nombre2']." ".
                 $tercero['apellido1']." ".$tercero['apellido2'])?></td><!--Index 10-->
                 <td align="center"><?php echo $tercero['nombtipo']?></td><!--Index 11-->
             </tr>
             <?php }?>
        </tbody>
        </table>
    </div>

    <!-- Modal Registrar-->
    <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulario Agregar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="php/registrar.php" method="POST">
                <div class="form-group´">
                    <label for="">Primer nombre</label>
                    <input type="text" class="form-control" name="primerNombre" required>

                    <label for="">Segundo nombre</label>
                    <input type="text" class="form-control" name="segundoNombre">

                    <label for="">Primer apellido</label>
                    <input type="text" class="form-control" name="primerApellido" required>

                    <label for="">Segundo apellido</label>
                    <input type="text" class="form-control" name="segundoApellido">

                    <label for="">Tipo de documento</label>
                    <select class="form-select" aria-label="Default select example" id="tipodocumento" name="tipodocumento" required>
                    <option selected>Seleccione el tipo de documento</option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="NIP">NIP</option>
                    <option value="NIT">NIT</option>
                    <option value="TI">TI</option>
                    <option value="PAP">PAP</option>
                    </select>

                    <label for="">Número de documento</label required>
                    <input type="number" class="form-control" name="numerodocumento">


                    <label for="">Departamento</label>
                    <select class="form-select" aria-label="Default select example" id="departamento1" name="departamento1" required>
                    </select>
            
                    <label for="">Municipio</label>
                    <select class="form-select" aria-label="Default select example" class="form-select" aria-label="Default select example" 
                    id="municipio1" name="municipio1" required></select>

                    <label for="">Tipo tercero</label>
                    <select class="form-select" aria-label="Default select example" id="tipoTercero1" name="tipoTercero1" required>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
    
    </div>

    <!-- Modal Editar Pedir Cedula-->
    <div class="modal fade" id="editarcedula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulario Agregar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="registrar.php" method="POST">
                <div class="form-group´">
                    <label for="">Ingrese el número de documento</label required>
                    <input type="number" class="form-control" name="numerodocumentoedit" id="numerodocumentoedit">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary editbtn" data-dismiss="modal" data-toggle="modal" data-target="#editar" >Continuar</button>
                    
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal Editar-->
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulario Agregar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="../php/registrar.php" method="POST">
                <div class="form-group´">
                    <label for="">Primer nombre</label>
                    <input type="text" class="form-control" name="primerNombre" id="primerNombre"required>

                    <label for="">Segundo nombre</label>
                    <input type="text" class="form-control" name="segundoNombre">

                    <label for="">Primer apellido</label>
                    <input type="text" class="form-control" name="primerApellido" required>

                    <label for="">Segundo apellido</label>
                    <input type="text" class="form-control" name="segundoApellido">

                    <label for="">Tipo de documento</label>
                    <select class="form-select" aria-label="Default select example" id="tipodocumento" name="tipodocumento" required>
                    <option selected>Seleccione el tipo de documento</option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="NIP">NIP</option>
                    <option value="NIT">NIT</option>
                    <option value="TI">TI</option>
                    <option value="PAP">PAP</option>
                    </select>

                    <label for="">Número de documento</label required>
                    <input type="number" class="form-control" name="numerodocumento">


                    <label for="">Departamento</label>
                    <select class="form-select" aria-label="Default select example" id="departamento2" name="departamento2" required>
                    </select>
            
                    <label for="">Municipio</label>
                    <select class="form-select" aria-label="Default select example" class="form-select" aria-label="Default select example" 
                    id="municipio2" name="municipio2" required></select>

                    <label for="">Tipo tercero</label>
                    <select class="form-select" aria-label="Default select example" id="tipoTercero2" name="tipoTercero2" required>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
    
    </div>

    <!-- Modal Borrar Pedir Cedula-->
    <div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulario Eliminar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="php/borrar.php" method="POST">
                <div class="form-group´">
                    <label for="">Ingrese el número de documento</label required>
                    <input type="number" class="form-control" name="numerodocumentoborrar" id="numerodocumentoborrar">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Continuar</button>
                    
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/listas_modal_agregar.js"></script>
    <script src="js/editar.js"></script>

</body>
</html>