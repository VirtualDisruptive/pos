<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <div>
        <h1 class="h3 mb-4 text-gray-800"><?php echo $titulo; ?></h1>
        <p class="mb-4">El mejor sofware creado por Virtual Disruptive. Somos una de las mejores empresa de creación de sofware y de marketingdigital en Barcelona. Llegado a conseguir premios nacionale e internacionales</p>

    </div>

    <div>
        <a href="<?php echo base_url() ?>/categorias/nuevo" class="btn btn-info">Agregar</a>

        <a href="<?php echo base_url() ?>/categorias/eliminados" class="btn btn-warning">eliminados</a>
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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Age</th>
                            <th>Start date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $dato) { ?>
                            <tr>
                                <td><?php echo $dato['id'] ?></td>
                                <td><?php echo $dato['nombre'] ?></td>
                                <td><a href="<?php echo base_url() . '/categorias/editar/' . $dato['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>

                                <td><a href="<?php echo base_url() . '/categorias/eliminar/' . $dato['id']; ?>" class=" btn btn-danger"><i class="fas fa-trash"></i></a></td>

                            </tr>


                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
<!-- /pagecontent -->