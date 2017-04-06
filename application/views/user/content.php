    <section class="content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $mensaje ?>
                            </h2>

                        </div>
                        <div class="body">
                            <p>
                                <?= $descripcion ?>
                            </p>
                        </div>

                        <?php
                            echo form_open_multipart('');
                            echo form_input_file('selecciona tu foto');
                            echo form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
