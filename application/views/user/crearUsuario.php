    <section class="content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREAR USUARIO
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?=base_url()?>usuarios/crearUsuario">

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

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nombre" required>
                                        <label class="form-label">Nombre</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="paterno" required>
                                        <label class="form-label">Apellido Paterno</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="materno" required>
                                        <label class="form-label">Apellido Materno</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="usuario" required>
                                        <label class="form-label">Usuario</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block waves-effect" type="submit">CREAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
