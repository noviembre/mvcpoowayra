<!-- Footer -->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small class="font-15">Copyright © Manu Made With No <i class="fa fa-heart cl-danger"></i> In Peru</small>
        </div>
    </div>
</footer>
<!-- Footer ends -->


<!-- Switcher -->
<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin theme-cl fa fa-cog" aria-hidden="true"></i></button>
<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Close &times;</button>
    <div class="title-logo">
        <img src="assets/img/logo.html" alt="" class="img-responsive">
        <h4>Choose Your Color</h4>
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

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

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
