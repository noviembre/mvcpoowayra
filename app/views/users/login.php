<!-- ===== PROHIBIDO Importar en la parte superior ======-->
<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>


<!-- ===== Espacio para importar alguna libreria INFERIOR ======-->
</head>
<!-- Deja el la etiqueta de cerrado head ahi esta ok -->

<body >
<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-lg-6 col-md-6 gredient-bg">
            <div class="clearfix">
                <div class="logo-title-container text-center">

                    <img class="img-responsive" src="<?php echo URLROOT; ?>/img/logo-white.png" alt="Logo Wayra Cusco world" width="250">

                </div> <!-- .logo-title-container -->
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 login-sidebar animated fadeInRightBig">

            <div class="login-container animated fadeInRightBig">

                <h2 class="text-center text-upper">Ingresar
                </h2>
                <h3>
                    <?php flash('register_success'); ?>
                </h3>


                <form action="<?php echo URLROOT; ?>/users/login" method="post" class="form-horizontal">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" id="inputEmail3" placeholder="Email"><span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group help">
                        <input name="password"  type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" id="inputPassword3" placeholder="Password">
                        <i class="fa fa-lock"></i>
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        <a href="#" class="pass-view fa fa-eye"></a>
                    </div>



                    <div class="form-group">
                        <div class="flexbox align-items-center">
                            <button type="submit" class="btn gredient-bg">Ingresar</button>

                        </div>
                    </div>

                </form>


            </div>
            <!-- .login-container -->

        </div> <!-- .login-sidebar -->
    </div>
    <!-- .row -->
</div>



<!-- Switcher -->
<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin theme-cl fa fa-cog" aria-hidden="true"></i></button>
<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Cerrar &times;</button>
    <div class="title-logo">
        <img src="assets/img/logo.html" alt="" class="img-responsive">
        <h4>Elige un color</h4>
    </div>
    <ul id="styleOptions" title="switch styling">
        <li>
            <a href="javascript: void(0)" class="cl-box cl-red" data-theme="skins/red"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-green" data-theme="skins/green"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-orange" data-theme="skins/orange"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-default" data-theme="skins/blue"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-blue" data-theme="skins/default"></a>
        </li>
    </ul>
</div>
<!-- /Switcher -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded cl-white gredient-bg" href="#page-top">
    <i class="ti-angle-double-up"></i>
</a>

<!-- Bootstrap core JavaScript-->

<script src="<?php echo URLROOT; ?>/assets/plugins/jquery/jquery-1.12.4.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo URLROOT; ?>/assets/plugins/jquery-easing/jquery.easing.min.js"></script>

<!-- Slick Slider Js -->
<script src="<?php echo URLROOT; ?>/assets/plugins/slick-slider/slick.js"></script>

<!-- Slim Scroll -->
<script src="<?php echo URLROOT; ?>/assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>

<!-- Angular Tooltip -->
<script src="<?php echo URLROOT; ?>/assets/plugins/angular-tooltip/angular.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/angular-tooltip/angular-tooltips.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/angular-tooltip/index.js"></script>

<!-- Validator JavaScript -->
<script src="<?php echo URLROOT; ?>/assets/plugins/validator/validator.js"></script>

<!-- Select2 -->
<script src="<?php echo URLROOT; ?>/assets/plugins/select2/select2.full.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo URLROOT; ?>/assets/dist/js/glovia.js"></script>
<script src="<?php echo URLROOT; ?>/assets/dist/js/jQuery.style.switcher.js"></script>


<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#styleOptions').styleSwitcher();
    });
</script>

<script>
    $('.dropdown-toggle').dropdown()
</script>



</div>
<!-- Wrapper -->
</body>
</html>