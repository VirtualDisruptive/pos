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
            <form method="POST" action="<?php echo base_url(); ?>/productos/actualizar" autocomplete="off">
                <?php csrf_field(); ?>
                <input type="hidden" id="id" name="id" value="<?php echo $producto['id']; ?>" />
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>codigo</label>
                        <input class="form-control" id="codigo" name="codigo" type="text" value="<?php echo $producto['codigo']; ?>" required />
                    </div>

                    <div class="col-12 col-sm-6">
                        <label>Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $producto['nombre']; ?>" autofocus required />
                    </div>
                </div>


                <div class="row">

                    <div class="col-12 col-sm-6">
                        <label>unidad</label>
                        <select class="form-control" id="id_unidad" name="id_unidad">
                            <option value="">seleccionar unidad</option>
                            <?php foreach ($unidades as $unidad) { ?>
                                <option value="<?php echo $unidad['id'] ?>" <?php if ($unidad['id'] == $producto['id_unidad']) {
                                                                                echo 'selected';
                                                                            }
                                                                            ?>><?php echo $unidad['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label>Categorias</label>
                        <select class="form-control" id="id_categoria" name="id_categoria">
                            <option value="">seleccionar categoria</option>
                            <?php foreach ($categorias as $categoria) { ?>
                                <option value="<?php echo $categoria['id'] ?>" <?php if ($categoria['id'] == $producto['id_categoria']) {
                                                                                    echo 'selected';
                                                                                } ?>><?php echo $categoria['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Precio Venta</label>
                        <input class="form-control" id="precio_venta" name="precio_venta" type="text" value="<?php echo $producto['precio_venta']; ?>" required />
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Precio Compra</label>
                        <input class="form-control" id="precio_comora" name="precio_compra" type="text" value="<?php echo $producto['precio_compra']; ?>" required />
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>Stock minimo</label>
                        <input class="form-control" id="stock_minimo" name="stock_minimo" type="text" value="<?php echo $producto['stock_minimo']; ?>" required />
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>Inventariable</label>
                        <select name="inventariable" id="inventariable" class="form-control">
                            <option value="1" <?php if ($producto['inventariable'] == 1) {
                                                    echo 'selected';
                                                } ?>>Si</option>
                            <option value="0" <?php if ($producto['inventariable'] == 0) {
                                                    echo 'selected';
                                                } ?>>No</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">

                        <a href="<?php echo base_url(); ?>/productos" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="col-12 col-sm-6">

                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /pagecontent -->