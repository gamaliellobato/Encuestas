    <section class="content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Crear Sucursal</b>
                            </h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?=base_url()?>usuario/crearUsuario">

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nombre" required>
                                        <label class="form-label">Nombre</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="paterno" required>
                                        <label class="form-label">Dirección</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="materno" required>
                                        <label class="form-label">Teléfono</label>
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
