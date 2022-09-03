<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <div>
        <h1 class="h3 mb-4 text-gray-800"><?php echo $titulo; ?></h1>
        <p class="mb-4">El mejor sofware creado por Virtual Disruptive. Somos una de las mejores empresa de creación de sofware y de marketingdigital en Barcelona. Llegado a conseguir premios nacionale e internacionales</p>

    </div>

    <!-- Page Heading -->
    <div class="container">
        <main>
            <div>
                <form method="POST" action="<?php echo base_url(); ?>/categorias/actualizar" autocomplete="off">
                    <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Nombre</label>
                                <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>" autofocus require />
                            </div>

                        </div>

                    </div>

                    <a href="<?php echo base_url(); ?>/categorias" class="btn btn-primary">Regresar</a>

                    <button type="submit" class="btn btn-success">Guardar</button>


                </form>
            </div>
        </main>

    </div>
</div>
<!-- /pagecontent -->