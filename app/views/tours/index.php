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
                                <h3>Detalles del Tour</h3>
                                <h3>Duracion: </h3><?php echo $data['tours']->duracion; ?>
                                <p><?php echo $data['detalles']->descripcion; ?></p>
                                <div class="plan-itinerario">
                                    <i class="ion-clock icon-big"></i>

                                    <div>
                                        <?php echo $data['detalles']->descripcion; ?>
                                    </div>

                                </div>

                            </section>

                            <section id="content2">

                                <h3>Incluye:</h3>
                                <div><?php echo $data['detalles']->incluye; ?></div>

                                <br>
                                <h3>No Incluye:</h3>
                                <div><?php echo $data['detalles']->noincluye; ?></div>
                                <br>

                                <h3>Que llevar:</h3>
                                <p>Asegurese de llevar ropa apropiada y los items adecuados:</p>
                                <div><?php echo $data['detalles']->quellevar; ?></div>
                                <br>

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
                                <br>
                                <h3>Salidas :</h3>
                                <div>Salidas diarias</div>

                            </section>

                            <section id="content5">
                                <i class="ion-android-list icon-big"></i>
                                <h3>Itinerario completo:</h3>
                                <p class="long-copy">
                                    <?php echo $data['detalles']->full_itinerario; ?></p>
                            </section>

                        </div><!-- SECCION ENDS -->


                        <div class="post_bottom">
                            <ul>
                                <li class="like">
                                    <a href="#">
                                        <i class="fa fa-commenting-o"></i>
                                        <span>12</span>
                                    </a>
                                </li>

                                <li class="share">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                        <span>12</span>
                                    </a>
                                </li>

                                <li class="favorite">
                                    <a href="#">
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
                            <h3 class="text-center"><?php echo BOOKING_OR_DOUBT_TEXT;?></h3>
                        <form action="" method="post" id="booking-form">

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-question"></i>
                                    </span>
                                    <select name="religio" id="" class="form-control">
                                        <option value=""><?php echo CHOOSE_TEXT;?> </option>
                                        <option value="reservar"><?php echo BOOKING_TEXT;?></option>
                                        <option value="consultar"><?php echo SUGGESTION_TEXT;?></option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input name="rnombre" type="text" class="form-control" placeholder="<?php echo NAME_TEXT;?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input name="remail" type="text" class="form-control" placeholder="<?php echo YOUR_EMAIL_TEXT;?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input name="rfecha" type="text" class="form-control date_pic" placeholder="08/16/2016" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                    <input name="rpersonas" type="number" class="form-control" placeholder="1" min="1" title="<?php echo HOW_MANY_TEXT;?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                    <input name="rmensaje" type="text" class="form-control" placeholder="<?php echo YOUR_MESSAGE_TEXT;?>">
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" name="submit" class="booking btn btn-primary" value="<?php echo SUBMIT_TEXT;?>">
                            </div>

                        </form>
                    </div><!--end sidebar-item-->

                    <div class="sidebar-item">
                        <h3>Tag Cloudes</h3>
                        <ul class="tag-list">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Wedding</a></li>
                            <li><a href="#">Agency</a></li>
                            <li><a href="#">Single</a></li>
                        </ul>
                    </div><!--end sidebar-item-->

                </div><!--end sidebar-->
            </div>

        </div>
    </div>
</section>
<!--end main-content-->




<?php require APPROOT . '/views/inc/footer.php'; ?>