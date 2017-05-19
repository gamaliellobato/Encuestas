    <section class="content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Modificar Sucursal</b>
                            </h2>
                        </div>
                        <?php 
                        $attribs = array(
                                    'id_sucursales'  => $row->id_sucursales,
                                    'nombre_suc'      => $row->nombre_suc,
                                    'direccion'      => $row->direccion,
                                    'telefono'      => $row->telefono);
                        ?>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?=base_url()?>sucursales/modificarSucursal">
                                
                                <div class="form-group form-float" style="display: none;">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id" value="<?= $attribs['id_sucursales'] ?>" required>
                                        <label class="form-label">Id</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nombre" value="<?= $attribs['nombre_suc'] ?>" required>
                                        <label class="form-label">Nombre</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?= $attribs['direccion'] ?>" name="direccion" required>
                                        <label class="form-label">Dirección</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?= $attribs['telefono'] ?>" name="telefono" required>
                                        <label class="form-label">Teléfono</label>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block waves-effect" type="submit">MODIFICAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
