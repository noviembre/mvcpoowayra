<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Company</a>.</strong> All rights reserved.
</footer>
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper ends -->


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo URLROOT; ?>/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo URLROOT; ?>/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo URLROOT; ?>/js/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo URLROOT; ?>/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo URLROOT; ?>/js/demo.js"></script>

<script src="<?php echo URLROOT; ?>/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo URLROOT; ?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js">

</script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>

</body>

</html>