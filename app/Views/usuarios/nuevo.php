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
                <h4 class=" xxl-1 text-gray-800"><?php echo $titulo; ?></h4>

                <?php if (isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo \Config\Services::validation()->listErrors(); ?>
                    </div>
                <?php } ?>
                <form method="POST" action="<?php echo base_url(); ?>/usuarios/insertar" autocomplete="off">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Usuario</label>
                                <input class="form-control" id="usuario" name="usuario" type="text" value="<?php echo set_value('usuario') ?>" autofocus required />
                            </div>

                            <div class="col-12 col-sm-6">
                                <label>Nombre </label>
                                <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo set_value('nombre'); ?>" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Contraseña</label>
                                <input class="form-control" id="password" name="password" type="password" value="<?php echo set_value('password') ?>" required />
                            </div>

                            <div class="col-12 col-sm-6">
                                <label>Repite Contraseña </label>
                                <input class="form-control" id="repassword" name="repassword" type="password" value="<?php echo set_value('repassword'); ?>" required />
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>caja</label>
                            <select class="form-control" id="id_caja" name="id_caja">
                                <option value="">seleccionar caja</option>
                                <?php foreach ($cajas as $caja) { ?>
                                    <option value="<?php echo $caja['id'] ?>"><?php echo $caja['nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Rol</label>
                            <select class="form-control" id="id_rol" name="id_rol">
                                <option value="">seleccionar rol</option>
                                <?php foreach ($roles as $rol) { ?>
                                    <option value="<?php echo $rol['id'] ?>"><?php echo $rol['nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    </div>

                    <a href=" <?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>

                    <button type="submit" class="btn btn-success">Guardar</button>


                </form>
            </div>
        </main>

    </div>

</div>
<!-- /.container-fluid -->