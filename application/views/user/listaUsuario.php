    <section class="content">
        <div class="container-fluid">


            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTA USUARIOS
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
                                        <th>Nombres</th>
                                        <th>Paterno</th>
                                        <th>Materno</th>
                                        <th>Email</th>
                                        <th>Sucursal</th>
                                        <th>Rol</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombres</th>
                                        <th>Paterno</th>
                                        <th>Materno</th>
                                        <th>Email</th>
                                        <th>Sucursal</th>
                                        <th>Rol</th>
                                        <th>Accion</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                    foreach ($consulta->result() as $fila) {
                                ?>
                                    <tr>
                                        <td><?= $fila->id_usuarios ?></td>
                                        <td><?= $fila->nombres ?></td>
                                        <td><?= $fila->paterno ?></td>
                                        <td><?= $fila->materno ?></td>
                                        <td><?= $fila->email ?></td> 
                                        <td><?= $fila->nombre_suc ?></td>
                                        <td><?= $fila->nombre_rol ?></td>
                                        <td></td>
                                    </tr>
                                <?php 
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
