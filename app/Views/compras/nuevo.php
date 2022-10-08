<?php
$id_compra = uniqid();
?>

<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <div>
        <p class="mb-4">El mejor sofware creado por Virtual Disruptive. Somos una de las mejores empresa de creación de sofware y de marketingdigital en Barcelona. Llegado a conseguir premios nacionale e internacionales</p>

    </div>

    <!-- Page Heading -->
    <div class="container">
        <main>
            <div>
                <form method="POST" id="form_compra" name="form_compra" action="<?php echo base_url(); ?>/compras/guarda" autocomplete="off">
                    <div class="form-group">
                        <div class="row align-items-start">
                            <div class="col col-sm-4">
                                <input type="hidden" id="id_producto" name="id_producto" />

                                <input type="hidden" id="id_compra" name="id_compra" value="<?php echo $id_compra; ?>" />

                                <label class="form-text-label" for="exampleCheck1">Codigo</label>

                                <input class="form-control" id="codigo" name="codigo" type="text" autofocus placeholder="Escribe el codigo y enter" onkeyup="buscarProductos(event, this, this.value)" autofocus />

                                <label for="codigo" id="resultado_error" style="color:red"></label>
                            </div>

                            <div class=" col-6 col-sm-4">
                                <label class="form-text-label" for="exampletext1">Nombre del producto </label>
                                <input class="form-control" id="nombre" name="nombre" type="text" autofocus disabled />
                            </div>


                            <div class="col col-sm-4">
                                <label class="form-text-label" for="exampletext1">Cantidad</label>

                                <input class="form-control" id="cantidad" name="cantidad" type="text" autofocus />
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <label>Precio de compra</label>
                                <input class="form-control" id="precio_compra" name="precio_compra" type="text" disabled />
                            </div>

                            <div class="col-12 col-sm-4">
                                <label> Subtotal</label>
                                <input class="form-control" id="subtotal" name="subtotal" type="text" disabled />
                            </div>


                            <div class="col-12 col-sm-4">
                                <label><br>&nbsp;</label>
                                <button id="agregar_producto" name="agrega_producto" type="button" class="btn btn-primary" onclick="agregarProducto(id_producto.value, cantidad.value,'<?php echo $id_compra; ?>' )">Agregar producto</button>
                            </div>
                        </div>

                    </div>

                    <div>
                        <table id="tablaProductos" class="table table-hover table-striped  table-sm table-responsive table Productos">
                            <thead class="thead-dark">
                                <th>#</th>
                                <th>codigo</th>
                                <th>nombre</th>
                                <th>precio</th>
                                <th>cantidad</th>
                                <th>total</th>
                                <th>Boton</th>
                                <th width="1%"></th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 offset-md-6">
                            <label style="font-weight: bold; font-size:30px; text-align: center;">Total €</label>
                            <input type="text" id="total" name="total" size="7" readonly="true" value="0.00" style="font-weight:bold ; font-size:30px; text-align:center;" />
                            <button type="button" id="completa_compra" class="btn btn-success">Completar compra</button>
                        </div>
                    </div>

                </form>
            </div>
        </main>

    </div>

</div>
<!-- /.container-fluid -->

<script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#completa_compra").click(function() {
            let nFila = $("#tablaProductos tr").length;
            if (nFila < 2) {

            } else {
                $("#form_compra").submit();
            }
        })
    });

    function buscarProductos(e, tagcodigo, codigo) {
        var enterKey = 13;
        if (codigo != '') {
            if (e.which == enterKey) {
                $.ajax({
                    url: '<?php echo base_url(); ?>/productos/buscarPorCodigo/' + codigo,
                    dataType: 'json',
                    success: function(resultado) {
                        if (resultado == 0) {
                            $(tagcodigo).val('');
                        } else {


                            $("#resultado_error").html(resultado.error);

                            if (resultado.existe) {
                                $("#id_producto").val(resultado.datos.id);
                                $("#nombre").val(resultado.datos.nombre);
                                $("#cantidad").val(1);
                                $("#precio_compra").val(resultado.datos.precio_compra);
                                $("#subtotal").val(resultado.datos.precio_compra);
                                $("#cantidad").focus();
                            } else {
                                $("#id_producto").val('');
                                $("#nombre").val('');
                                $("#cantidad").val('');
                                $("#precio_compra").val('');
                                $("#subtotal").val('');
                            }
                        }
                    }
                })
            }
        }
    }


    function agregarProducto(id_producto, cantidad, id_compra) {
        if (id_producto != null && id_producto != 0 && cantidad > 0) {
            $.ajax({
                url: '<?php echo base_url(); ?>/TemporalCompra/insertar/' + id_producto + "/" + cantidad + "/" + id_compra,
                success: function(resultado) {
                    if (resultado == 0) {


                    } else {
                        var resultado = JSON.parse(resultado);
                        if (resultado.error == '') {
                            $("#tablaProductos tbody").empty();
                            $("#tablaProductos tbody").append(resultado.datos);
                            $("#total").val(resultado.total);
                            $("#id_producto").val('');
                            $("#codigo").val('');
                            $("#nombre").val('');
                            $("#cantidad").val('');
                            $("#precio_compra").val('');
                            $("#subtotal").val('');
                        }
                    }
                }

            })
        }
    }


    function eliminaProducto(id_producto, id_compra) {
        $.ajax({
            url: '<?php echo base_url(); ?>/TemporalCompra/eliminar/' + id_producto + "/" + id_compra,
            success: function(resultado) {
                if (resultado == 0) {
                    $(tagcodigo).val('');
                } else {

                    var resultado = JSON.parse(resultado);
                    $("#tablaProductos tbody").empty();
                    $("#tablaProductos tbody").append(resultado.datos);
                    $("#total").val(resultado.total);
                }
            }
        })
    }
</script>