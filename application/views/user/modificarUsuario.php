    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MODIFICAR USUAR
                            </h2>
                        </div>
                        <?php 
                        $attribs = array(
                                    'id_usuarios'  => $row->id_usuarios,
                                    'nombres'      => $row->nombres,
                                    'paterno'      => $row->paterno,
                                    'materno'      => $row->materno,
                                    'email'        => $row->email,
                                    'usuario'      => $row->usuario,
                                    'id_sucursal'  => $row->id_sucursal,
                                    'id_rol'       => $row->id_rol);
                        ?>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?=base_url()?>usuarios/modificarUsuario">

                                <div class="form-group form-float">
                                    <p>
                                        <b>Sucursal</b>
                                    </p>
                                    <?= $sucursal;?>
                                </div>
                                
                                <div class="form-group form-float">
                                    <p>
                                        <b>Rol</b>
                                    </p>
                                   <?= $rol;?>
                                </div>

                                <div class="form-group form-float" style="display: none;">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id" value="<?= $attribs['id_usuarios'] ?>" required>
                                        <label class="form-label">Id</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nombre" value="<?= $attribs['nombres'] ?>" required>
                                        <label class="form-label">Nombre</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="paterno" value="<?= $attribs['paterno'] ?>"required>
                                        <label class="form-label">Apellido Paterno</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="materno" value="<?= $attribs['materno'] ?>" required>
                                        <label class="form-label">Apellido Materno</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" value="<?= $attribs['email'] ?>" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="usuario" value="<?= $attribs['usuario'] ?>" required>
                                        <label class="form-label">Usuario</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>

                                <button id="modificar" class="btn btn-primary btn-block waves-effect" type="submit">MODIFICAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>