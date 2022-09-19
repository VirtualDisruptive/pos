<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <div>
        <h1 class="h3 mb-4 text-gray-800"><?php echo $titulo; ?></h1>
        <p class="mb-4">El mejor sofware creado por Virtual Disruptive. Somos una de las mejores empresa de creación de sofware y de marketingdigital en Barcelona. Llegado a conseguir premios nacionale e internacionales</p>

    </div>

    <?php if (isset($validation)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo \Config\Services::validation()->listErrors(); ?>
        </div>
    <?php } ?>
    <form method="POST" action="<?php echo base_url(); ?>/configuracion/actualizar" autocomplete="off">
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Nombre de la tienda</label>
                    <input class="form-control" id="tienda_nombre" name="tienda_nombre" type="text" value="<?php echo $nombre['valor']; ?>" autofocus required />
                </div>

                <div class="col-12 col-sm-6">
                    <label>RFC</label>
                    <input class="form-control" id="tienda_rfc" name="tienda_rfc" type="text" value="<?php echo $rfc['valor']; ?>" required />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Telefono de la tienda</label>
                    <input class="form-control" id="tienda_telefono" name="tienda_telefono" type="text" value="<?php echo $telefono['valor']; ?>" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label>Correo de la tienda</label>
                    <input class="form-control" id="tienda_correo" name="tienda_correo" type="text" value="<?php echo $email['valor']; ?>" required />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Direccion de la tienda</label>
                    <textarea class="form-control" name="tienda_direccion" id="tienda_direccion" required><?php echo $direccion['valor']; ?></textarea>

                </div>

                <div class="col-12 col-sm-6">
                    <label>Leyenda del ticket</label>
                    <textarea class="form-control" name="ticket_leyenda" id="ticket_leyenda" required><?php echo $leyenda['valor']; ?></textarea>

                </div>
            </div>

        </div>

        <a href=" <?php echo base_url(); ?>/configuracion" class="btn btn-primary">Regresar</a>

        <button type="submit" class="btn btn-success">Guardar</button>


    </form>







    <!-- Modal -->
    <div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">NO</button>
                    <a class="btn btn-danger btn-ok">Si</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



</div>
<!-- /.container-fluid -->