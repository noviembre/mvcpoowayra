<!-- ===== PROHIBIDO Importar en la parte superior ======-->
<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>


<!-- ===== Espacio para importar alguna libreria INFERIOR ======-->
</head>
<!-- Deja el la etiqueta de cerrado head ahi esta ok -->

<body>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth login-full-bg">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-dark text-left p-5">
                        <h2>Login</h2>
                        <h4 class="font-weight-light">Panel de Control</h4>


                        <form action="<?php echo URLROOT; ?>/users/login" method="post" class="pt-5">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" maxlength="15" id="correo" required>
                                <i class="mdi mdi-account"></i>
                                <span class="invalid-feedback text-warning"><?php echo $data['email_err']; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" id="contrasena" placeholder="******" maxlength="20" required>
                                <i class="mdi mdi-eye"></i>
                                <span class="invalid-feedback text-warning">
                                    <?php echo $data['password_err']; ?>
                                </span>
                            </div>
                            <div class="mt-5">
                                <input type="submit" value="Ingresar" class="btn btn-block btn-warning btn-lg font-weight-medium">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


<?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>
<!-- Custom js for this page-->
<script src="<?php echo URLROOT; ?>/assets/js/bt-maxLength.js"></script>
<!-- End custom js for this page-->
</body>

</html>