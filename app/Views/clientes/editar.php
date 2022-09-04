<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <div>
        <h1 class="h3 mb-4 text-gray-800"><?php echo $titulo; ?></h1>
        <p class="mb-4">El mejor sofware creado por Virtual Disruptive. Somos una de las mejores empresa de creación de sofware y de marketingdigital en Barcelona. Llegado a conseguir premios nacionale e internacionales</p>

    </div>



    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h4 class=" xxl-1 text-gray-800"><?php echo $titulo; ?></h4>
            </div>

            <?php \Config\services::validation()->listErrors(); ?>
            <form method="POST" action="<?php echo base_url(); ?>/clientes/actualizar" autocomplete="off">
                <input type="hidden" id="id" name="id" value="<?php echo $cliente['id']; ?>" />
                <div class="form-group">
                    <div class="row">

                        <div class="col-12 col-sm-6">
                            <label>nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $cliente['nombre']; ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>direccion</label>
                            <input class="form-control" id="direccion" name="direccion" type="text" value="<?php echo $cliente['direccion']; ?>" autofocus />
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>telefono</label>
                            <input class="form-control" id="telefono" name="telefono" type="tel" value="<?php echo $cliente['telefono']; ?>" autofocus />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>correo</label>
                            <input class="form-control" id="correo" name="correo" type="email" value="<?php echo $cliente['correo']; ?>" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">

                            <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>
                        </div>
                        <div class="col-12 col-sm-6">

                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /pagecontent -->