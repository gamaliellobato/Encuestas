    <section class="content">
        <div class="container-fluid">


            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTA SUCURSALES
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                       <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                $id = 0;
                                    foreach ($consulta->result() as $fila) {
                                ?>
                                    <tr id='tr<?= $fila->id_sucursales ?>'>
                                        <td><?= $fila->id_sucursales ?></td>
                                        <td><?= $fila->nombre_suc ?></td>
                                        <td><?= $fila->direccion ?></td>
                                        <td><?= $fila->telefono ?></td>
                                        <td><a href="<?= base_url('sucursales/modificar')?>/<?=$fila->id_sucursales?>" class="btn btn-info">Modificar</a></td>
                                        <td><button name="<?= $fila->nombre_suc ?>" class="btn btn-danger" id='<?= $fila->id_sucursales ?>'>Eliminar</button></td>
                                    </tr>
                                <?php 
                                $id++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

<script type="text/javascript">
        $(document).ready(function(){
            $("button").on("click", function(e){
                //var name = $(this).attr('name');
                //console.log(name);
                var id = $(this).attr('id');
                //console.log(id);
                var request;

                if (request) {
                    request.abort();
                }

                request = $.ajax({
                    url: "<?php echo base_url('sucursales/borrarSucursal')?>",
                    type: "POST",
                    data: "id=" + id
                });

                request.done(function(response, textStatus, jqXHR){
                    console.log("response: " + response);
                    $("#tr" + response).html("");
                });

                request.fail(function(jqXHR, textStatus, thrown){
                    console.log("Error:" + textStatus);
                });

                request.always(function(){
                    console.log("Termino la ejecucion ajax");
                });

                e.preventDefault();
            });
        });
    </script> 