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
            <div>
                <h1 class="h3 mb-4 text-gray-800"><?php echo $titulo; ?></h1>
                <p class="mx-auto" style="width: 1230px">El mejor sofware creado por Virtual Disruptive.</p>

            </div>


            <div>

                <a href="<?php echo base_url() ?>/productos" class="btn btn-warning">productos </a>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>precio</th>
                                    <th>Existencias</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datos as $dato) { ?>
                                    <tr>
                                        <td><?php echo $dato['nombre'] ?></td>
                                        <td><?php echo $dato['direccion'] ?></td>
                                        <td><?php echo $dato['telefono'] ?></td>
                                        <td><?php echo $dato['correo'] ?></td>


                                        <td><a href="#" data-href="<?php echo base_url() . '/clientes/reingresar/' . $dato['id']; ?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="reingresar registro" class=" btn btn-danger"><i class="fas fa-arrow-alt-circle-up"></i></a></td>

                                    </tr>


                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Reingresar registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>¿Desea reingresar este registro?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">NO</button>
                            <a class="btn btn-danger btn-ok">Si</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

</div>