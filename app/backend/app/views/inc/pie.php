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

<!-- DataTables -->
<script src="<?php echo URLROOT; ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo URLROOT; ?>/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo URLROOT; ?>/js/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo URLROOT; ?>/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo URLROOT; ?>/js/demo.js"></script>

<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

</body>

</html>