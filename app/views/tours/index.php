<?php require APPROOT . '/views/inc/header.php'; ?>

    <!-- Page Title-->
<section id="page-title" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo URLROOT; ?>/img/bg_mp.jpg);">
        <div class="title-info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h1>Wayra Cusco World</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end title-info-->
</section>
    <!--end page-title-->





    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-9">

            <!--   ==== Left Panel Starts ==== -->
                    <div class="content-block">

                        <div class="single_post">

                            <!--starts Image Slide-->
                            <div class="post_thumb">
                                <div id="slide">
                                    <ul>
                                <?php foreach($data['galeria'] as $galeria) : ?>
                                        <li>
                                <img src="<?php echo URLROOT; ?>/app/backend<?php echo $galeria->gruta; ?>" alt="">
                                            <div class="slideCaption">
                                               <p><?php echo $galeria->gtitulo; ?></p>
                                            </div>
                                        </li>
                                <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <!--end post thumb-->

                            <div class="meta">
                                <span class="tour-duration"><a href="https://themecrazy.net/tour-maker/tour-details.html#">6 Days / 5 Nights</a></span>

                                <span class="date"><a href="https://themecrazy.net/tour-maker/tour-details.html#">14 March 2016</a></span>
                            </div><!--end meta-->

                            <h2><?php echo $data['tours']->titulo; ?>
                                <?php echo $data['tours']->duracion; ?>
                            </h2>



                            <div class="seccion">

                                <input id="tab1" type="radio" name="tabs" checked>
                                <label for="tab1">Descripcion</label>

                                <input id="tab2" type="radio" name="tabs">
                                <label for="tab2">Incluye</label>

                                <input id="tab3" type="radio" name="tabs">
                                <label for="tab3">Informacion</label>

                                <input id="tab4" type="radio" name="tabs">
                                <label for="tab4">Precio</label>
                                <input id="tab5" type="radio" name="tabs">
                                <label for="tab5">Itinerario</label>

                                <section id="content1">

                                    <h3>Detalles del Tour</h3>
                                    <h3>Duracion: </h3><?php echo $data['tours']->duracion; ?>
                                    <p><?php echo $data['detalles']->descripcion; ?></p>
                                    <div class="plan-itinerario">
                                        <i class="ion-clock icon-big"></i>

                                        <div>
                                            <?php echo $data['detalles']->itinerario; ?>
                                        </div>

                                    </div>

                                </section>

                                <section id="content2">
                                    <h3>Incluye:</h3>
                                    <div><?php echo $data['detalles']->incluye; ?></div>

                                    <h3>No Incluye:</h3>
                                    <div><?php echo $data['detalles']->noincluye; ?></div>

                                    <h3>Que llevar:</h3>
                                    <p>Asegurese de llevar ropa apropiada y los items adecuados:</p>
                                    <div><?php echo $data['detalles']->quellevar; ?></div>

                                    <i class="fa fa-sun-o"></i>
                                    <h3>Clima:</h3>
                                    <div><?php echo $data['detalles']->clima; ?></div>
                                </section>

                                <section id="content3">
                                    <i class=""></i>
                                    <h3>Informacion util antes de reservar:</h3>
                                    <div><?php echo $data['detalles']->nota; ?></div>
                                </section>

                                <section id="content4">
                                    <i class="ion-social-usd icon-big"></i>
                                    <h3>Precios:</h3>
                                    <div>los precios varian</div>

                                    <h3>Salidas :</h3>
                                    <div>Salidas diarias</div>

                                </section>

                                <section id="content5">
                                    <i class="ion-android-list icon-big"></i>
                                    <h3>Itinerario completo:</h3>
                                    <p class="long-copy">
                                        <?php echo $data['detalles']->descripcion; ?></p>

                                    <h3>Tips::</h3>
                                    <div>...</div>

                                </section>

                            </div><!-- SECCION ENDS -->


                            <div class="post_bottom">
                                <ul>
                                    <li class="like">
                                        <a href="https://themecrazy.net/tour-maker/tour-details.html#">
                                            <i class="fa fa-commenting-o"></i>
                                            <span>12</span>
                                        </a>
                                    </li>

                                    <li class="share">
                                        <a href="https://themecrazy.net/tour-maker/tour-details.html#">
                                            <i class="fa fa-share-alt"></i>
                                            <span>12</span>
                                        </a>
                                    </li>

                                    <li class="favorite">
                                        <a href="https://themecrazy.net/tour-maker/tour-details.html#">
                                            <i class="fa fa-heart"></i>
                                            <span>12</span>
                                        </a>
                                    </li>


                                </ul>
                            </div><!--end post bottom-->

                        </div>

                    </div>

            <!--   ==== Left Panel Ends ==== -->
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <h3>Tour Booking</h3>
                            <form action="https://themecrazy.net/tour-maker/tour-details.html#" method="post" id="booking-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        <input type="text" class="form-control" placeholder="Email Address" name="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" class="form-control date_pic" placeholder="08/16/2016" name="phone">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                        <input type="number" class="form-control" placeholder="1" min="1" name="name">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit" class="booking btn btn-primary" value="Book Now">
                                </div>

                            </form>
                        </div><!--end sidebar-item-->

                        <div class="sidebar-item">
                            <h3>Tag Cloudes</h3>
                            <ul class="tag-list">
                                <li><a href="https://themecrazy.net/tour-maker/tour-details.html#">Travel</a></li>
                                <li><a href="https://themecrazy.net/tour-maker/tour-details.html#">Tour</a></li>
                                <li><a href="https://themecrazy.net/tour-maker/tour-details.html#">Portfolio</a></li>
                                <li><a href="https://themecrazy.net/tour-maker/tour-details.html#">Photography</a></li>
                                <li><a href="https://themecrazy.net/tour-maker/tour-details.html#">Wedding</a></li>
                                <li><a href="https://themecrazy.net/tour-maker/tour-details.html#">Agency</a></li>
                                <li><a href="https://themecrazy.net/tour-maker/tour-details.html#">Single</a></li>
                            </ul>
                        </div><!--end sidebar-item-->

                    </div><!--end sidebar-->
                </div>

            </div>
        </div>
    </section>
    <!--end main-content-->

    <!--end main-content-->


<br>
<h1><?php echo $data['tours']->titulo; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
    Written by <?php echo $data['detalles']->descripcion; ?>

</div>






<?php require APPROOT . '/views/inc/footer.php'; ?>