<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <div>
        <h1 class="h3 mb-4 text-gray-800"><?php echo $titulo; ?></h1>
        <p class="mb-4">El mejor sofware creado por Virtual Disruptive. Somos una de las mejores empresa de creación de sofware y de marketingdigital en Barcelona. Llegado a conseguir premios nacionale e internacionales</p>

    </div>

    <div>
        <a href="<?php echo base_url() ?>/unidades/nuevo" class="btn btn-info">Agregar</a>

        <a href="<?php echo base_url() ?>/unidades/eliminados" class="btn btn-warning">eliminados</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Office</th>
                            <th scope="col">Age</th>
                            <th scope="col">Start date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $dato) { ?>
                            <tr>
                                <td><?php echo $dato['id'] ?></td>
                                <td><?php echo $dato['nombre'] ?></td>
                                <td><?php echo $dato['nombre_corto'] ?></td>

                                <td><a href="<?php echo base_url() . '/unidades/editar/' . $dato['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>

                                <td><a href="#" data-href="<?php echo base_url() . '/unidades/eliminar/' . $dato['id']; ?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="elimar registro" class=" btn btn-danger"><i class="fas fa-trash"></i></a></td>

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