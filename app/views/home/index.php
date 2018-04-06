<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>


<body>
<div class="container-scroller">


    <!-- =========== Navbar Starts =========== -->
    <?php require APPROOT . '/views/inc/p_navbar.php'; ?>
    <!-- =========== Navbar Ends  =========== -->

    <div class="container-fluid page-body-wrapper">


        <!-- =========== Derecho Starts =========== -->
        <?php require APPROOT . '/views/inc/p_ladoderecho.php'; ?>
        <!-- =========== Derecho Ends  =========== -->


        <!-- =========== Izquierdo Starts =========== -->
        <?php require APPROOT . '/views/inc/p_ladoizquierdo.php'; ?>
        <!-- =========== Izquierdo Ends  =========== -->



        <!-- partial -->
        <div class="main-panel">


            <div class="content-wrapper">

                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">
                                            <div class="btn social-btn btn-twitter btn-rounded d-inline-block"><i class="mdi mdi-star"></i></div>
                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">Total Tours</p>
                                                <p class="mb-0 text-muted">
                                                    <h4><?php echo $data['total']->contando; ?></h4>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">
                                            <div class="btn social-btn btn-facebook btn-rounded d-inline-block"><i class="mdi mdi-pencil"></i></div>
                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">Tours Editados</p>
                                                <p class="mb-0 text-muted">
                                                   <h4>
                                                    <?php echo $data['editando']->editando; ?>
                                                </h4>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">
                                            <div class="btn social-btn btn-google btn-rounded d-inline-block"><i class="mdi mdi-google-plus"></i></div>
                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">Tours Publicados</p>
                                                <p class="mb-0 text-muted">
                                                   <h4>
                                                    <?php echo $data['publicados']->publicados; ?>
                                                </h4>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-sm-6 d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">
                                            <div class="btn social-btn btn-warning btn-rounded d-inline-block"><i class="mdi mdi-rss"></i></div>
                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">Tours Ingles</p>
                                                <p class="mb-0 text-muted">
                                                    <h4>0</h4>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Updates</h4>
                                <div class="image-grid row">
                                    <div class="col-md-6 pr-md-2">
                                        <img class="w-100 img-fluid rounded" src="<?php echo URLROOT; ?>/assets/images/dashboard/Img_1.jpg" alt="images">
                                    </div>
                                    <div class="col-md-6 pl-md-2">
                                        <div class="row">
                                            <div class="col-md-12 mb-3 mt-3 mt-md-0">
                                                <img class="w-100 img-fluid rounded" src="<?php echo URLROOT; ?>/assets/images/dashboard/Img_2.jpg" alt="images">
                                            </div>
                                            <div class="col-md-12">
                                                <img class="w-100 img-fluid rounded" src="<?php echo URLROOT; ?>/assets/images/dashboard/Img_3.jpg" alt="images">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus, nascetur ridiculus mus.</p>
                                <div class="d-flex align-items-center">
                                    <span class="d-none d-sm-inline-block"><strong>jack Menqu</strong> All of Rwanda is at high elevation</span>
                                    <span class="ml-auto text-muted">7:30 pm<i class="ml-2 mdi mdi-heart-outline"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lista de Tareas</h4>
                                <div class="add-items d-flex">
                                    <input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
                                    <button class="add btn btn-primary font-weight-bold todo-list-add-btn">
                                        Agregar
                                    </button>
                                </div>
                                <div class="list-wrapper">
                                    <ul class="d-flex flex-column-reverse todo-list">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Meeting with Alisa
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Create invoice
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Print Statements
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li class="completed">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox" checked>
                                                    Prepare for presentation
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Pick up kids from school
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">urbanui</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>





<?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>
</body>

</html>
