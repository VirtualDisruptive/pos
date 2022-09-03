<!-- Page Heading -->
<div class="container">
    <main>
        <div>
            <h4 class=" xxl-1 text-gray-800"><?php echo $titulo; ?></h4>

            <?php

            $request = \Config\Services::request(); ?>
            <form method="POST" action="<?php echo base_url(); ?>/unidades/insertar" autocomplete="off">
                <?php csrf_field() ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Nombre corto</label>
                            <input class="form-control" id="nombre_corto" name="nombre_corto" type="text" required />
                        </div>
                    </div>

                </div>

                <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>

                <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>

</div>