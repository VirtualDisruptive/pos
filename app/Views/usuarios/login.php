<?php
$user_session = session();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Virtual</title>
        <link href="<?php echo base_url(); ?>/vendor/fontawesome-free/css/styles.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <?php print_r($user_session->nombre);?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar sesion</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url();?>/usuarios/valida">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Uusario</label>
                                                <input class="form-control py-4" id="usuario" name="usuario" type="text" placeholder="Ingresa tu usuario" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Contraseña</label>
                                                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Ingresa tu contraseña" />
                                            </div>
                                            <div class="form-group">
                                               
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                            <?php if (isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo \Config\Services::validation()->listErrors(); ?>
                    </div>
                <?php } ?>
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"><span>Copyright &copy; Your Website hecha por virtual disruptive <?php echo date('Y') ?></span></div>

                            
                            <div>
                                
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
           
        </div>
        <script src="<?php echo base_url(); ?>https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>js/scripts.js"></script>
    </body>
</html>
