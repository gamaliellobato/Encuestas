<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Like<b>Quest</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?=base_url()?>login">
                    <div class="msg">Inicia Sesión</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Recordar</label>
                        </div> -->
                        <div class="col-xs-4 col-xs-offset-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">INICIAR</button>
                        </div>
                    </div>

                   
                    <div class="row m-t-15 m-b--20">
                        <!-- <div class="col-xs-6">
                            <a href="sign-up.html">Resgitrate Ahora!!</a>
                        </div> -->
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Recuperar Password</a>
                        </div>
                    </div>
                </form>

               
            </div>
        </div>
    </div>