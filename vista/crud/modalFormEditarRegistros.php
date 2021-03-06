<?php
if (isset($_POST['editar'])) {
    $id = (isset($_REQUEST['id'])) ? trim($_REQUEST['id']) : null;
    $persona = Persona::buscarPorId($id);
?>
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Actualización de datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="col-12 col-md-12"> 
                    <form role="form" id="formularioEditar" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <input value="editar" name="accion" type="hidden">
                        <input value="<?php echo $persona->getId(); ?>" name="id" type="hidden">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombres" class="col-form-label">Nombres</label>
                                <input value="<?php echo $persona->getNombres(); ?>" name="nombres" type="text" class="form-control" placeholder="Nombres" autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edad" class="col-form-label">Apellidos</label>
                                <input value="<?php echo $persona->getApellidos(); ?>" name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="form-group">
                                <button name="actualizar" type="submit" class="btn btn-primary btn-block">Actualizar Registro</button>
                            </div>                        
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
  $('#editarModal').modal('show');
</script>
<?php } ?>
