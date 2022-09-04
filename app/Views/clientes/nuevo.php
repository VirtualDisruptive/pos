<!-- Page Heading -->
<div class="container-fluid">
    <main>
        <div>
            <h4 class=" xxl-1 text-gray-800"><?php echo $titulo; ?></h4>
            <?php if (isset($validation)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo \Config\Services::validation()->listErrors(); ?>
                </div>
            <?php } ?>
            <form method="POST" action="<?php echo base_url(); ?>/clientes/insertar" autocomplete="off">
                <div class="form-group">
                    <div class="row">

                        <div class="col-12 col-sm-6">
                            <label>nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo set_value('nombre') ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>direccion</label>
                            <input class="form-control" id="direccion" name="direccion" type="text" value="<?php echo set_value('direccion') ?>" autofocus />
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>telefono</label>
                            <input class="form-control" id="telefono" name="telefono" type="tel" autofocus />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>correo</label>
                            <input class="form-control" id="correo" name="correo" type="email" value="<?php echo set_value('correo') ?>" />
                        </div>
                    </div>


                </div>

                <a href="<?php echo base_url(); ?>/Productos" class="btn btn-primary">Regresar</a>

                <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>

</div>