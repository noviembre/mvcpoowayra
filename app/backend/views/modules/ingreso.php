


<div class="login-box">

    <div class="login-box-body">
        <p class="login-box-msg">Ingrese sus datos de Acceso</p>
        <p class="login-box-msg">
            <a href="../../index.php"> <input  type="button" class="btn btn-default" value="Inicio"></a>


        </p>
        <form method="post"  onsubmit="return validarIngreso()">

            <h1 id="tituloFormIngreso">PANEL DE CONTROL</h1>
            <div class="form-group has-feedback">
                <input name="usuarioIngreso" class="form-control formIngreso" type="text" placeholder="ID de Usuario" id="usuarioIngreso">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input class="form-control formIngreso" type="password" placeholder="Ingrese su Contraseña" name="passwordIngreso" id="passwordIngreso">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-6">
                    <input class="form-control btn btn-default btn-block btn-flat" type="reset" value="Limpiar">

                </div>
                <div class="col-xs-6">
                    <input class="form-control btn btn-primary btn-block btn-flat" type="submit" value="Enviar">
                </div>
                <!-- /.col -->
            </div>

            <?php

            $ingreso = new Ingreso();
            $ingreso -> ingresoController();

            ?>
        </form>

        <div class="social-auth-links text-center">
            <p>- O -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
                <i class="fa fa-facebook"></i> Ingresar con
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat">
                <i class="fa fa-google-plus"></i> Ingresar con
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="#">Olvide mi password</a><br>
        <a href="#" class="text-center">Registrarse</a>

    </div>




    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

