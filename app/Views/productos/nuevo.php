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
            <form method="POST" action="<?php echo base_url(); ?>/productos/insertar" autocomplete="off">
                <div class="form-group">
                    <div class="row">

                        <div class="col-12 col-sm-6">
                            <label>codigo</label>
                            <input class="form-control" id="codigo" name="codigo" type="text" value="<?php echo set_value('nombre') ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo set_value('nombre') ?>" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>unidad</label>
                            <select class="form-control" id="id_unidad" name="id_unidad">
                                <option value="">seleccionar unidad</option>
                                <?php foreach ($unidades as $unidad) { ?>
                                    <option value="<?php echo $unidad['id'] ?>"><?php echo $unidad['nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Categorias</label>
                            <select class="form-control" id="id_categoria" name="id_categoria">
                                <option value="">seleccionar categoria</option>
                                <?php foreach ($categorias as $categoria) { ?>
                                    <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Precio Venta</label>
                            <input class="form-control" id="precio_venta" name="precio_venta" type="text" value="<?php echo set_value('nombre') ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Precio Compra</label>
                            <input class="form-control" id="precio_comora" name="precio_compra" type="text" autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Stock minimo</label>
                            <input class="form-control" id="stock_minimo" name="stock_minimo" type="text" value="<?php echo set_value('nombre') ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Inventariable</label>
                            <select name="inventariable" id="inventariable" class="form-control">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                </div>

                <a href="<?php echo base_url(); ?>/Productos" class="btn btn-primary">Regresar</a>

                <button type="submit" class="btn btn-success">Guardar</button>


            </form>
        </div>
    </main>

</div>