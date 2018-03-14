<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- ========= SLIDE STARTS =========== -->
<div id="banner" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">


    <!-- ========= carrousel Starts ========== -->
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image:url(<?php echo URLROOT; ?>/img/banner/1_machupicchu.jpg);">
            <div class="caption-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                            <div class="caption-info-inner text-center">
                                <h1 class="animated fadeInDown"><?PHP  echo MACHUPICCHU_TEXT;?></h1>
                                <p class="animated fadeInUp"><?PHP  echo MACHUPICCHU_PREVIEW_TEXT;?></p>
                                <a href="tours/<?PHP  echo MACHUPICCHU_FULL_DAY_LINK;?>" class="animated fadeInUp btn btn-primary page-scroll">
                                    <?PHP  echo READ_MORE_TEXT;?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item" style="background-image:url(<?php echo URLROOT; ?>/img/banner/2_inka_trail.jpg);">
            <div class="caption-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                            <div class="caption-info-inner text-center">
                                <h1 class="animated zoomIn"><?PHP  echo INKA_TRAIL_TEXT;?></h1>
                                <p class="animated zoomIn"><?PHP  echo INKA_TRAIL_PREVIEW_TEXT;?></p>
                                <a href="tours/<?php echo INKA_TRAIL_2D1N_LINK; ?>" class="animated zoomIn btn btn-primary page-scroll">
                                    <?PHP  echo READ_MORE_TEXT;?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item" style="background-image:url(<?php echo URLROOT; ?>/img/banner/3_rainbown_mountain.jpg);">
            <div class="caption-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                            <div class="caption-info-inner text-center">
                                <h1 class="animated fadeInLeft"><?PHP  echo MOUNTAIN_COLOURS_TEXT;?></h1>
                                <p class="animated fadeInLeft"><?PHP  echo MOUNTAIN_COLOURS_PREVIEW_TEXT;?></p>
                                <a href="tours/<?PHP  echo MOUNTAIN_COLOURS_LINK;?>" class="animated fadeInLeft btn btn-primary page-scroll">
                                    <?PHP  echo READ_MORE_TEXT;?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- ========= carrousel Ends ==========-->


    <!-- Controls -->
    <a class="control left" href="#banner" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
    <a class="right control" href="#banner" data-slide="next"><i class="fa fa-arrow-right"></i></a>
</div>
<!-- ========= SLIDE ENDS =========== -->








<!-- ========== 2 PACKAGES STARTS ========== -->
<section id="packages" class="inverse">
    <div class="container">


        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h1><?php echo TOURISTIC_PACKAGES_TEXT; ?></h1>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="package-list wow fadeInUp">
                    <a href="tours/<?php echo CUSCO_PKG_8D7N_LINK; ?>">
                        <div class="package-thumb">
                            <img src="<?php echo URLROOT; ?>/img/packages/pkg4.jpg" alt="" />
                            <div class="duration">
                                8 <?php echo DAYS_TEXT; ?><br/>7 <?php echo NIGHTS_TEXT; ?>
                            </div>
                        </div>
                        <div class="package-info">
                            <h3>Lorem Ipsum</h3>

                            <span class="pull-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<span class="review-count"> - 90 review</span>
                                </span>
                            <span class="pull-right price">$1800</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="package-list wow fadeInUp">
                    <a href="tours/<?php echo CUSCO_PKG_7D6N_LINK; ?>">
                        <div class="package-thumb">
                            <img src="<?php echo URLROOT; ?>/img/packages/pkg1.jpg" alt="" />
                            <div class="duration">
                                7 <?php echo DAYS_TEXT; ?><br/>6 <?php echo NIGHTS_TEXT; ?>
                            </div>
                        </div>
                        <div class="package-info">
                            <h3><?php echo T7D_6N_PACKAGE_TEXT; ?></h3>
                            <span class="pull-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="review-count"> - 100 review</span>
                                </span>
                            <span class="pull-right price">$1400</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="package-list wow fadeInUp">
                    <a href="tours/<?php echo CUSCO_PKG_6D5N_LINK; ?>">
                        <div class="package-thumb">
                            <img src="<?php echo URLROOT; ?>/img/packages/pkg5.jpg" alt="" />
                            <div class="duration">
                                6 <?php echo DAYS_TEXT; ?><br/>5 <?php echo NIGHTS_TEXT; ?>
                            </div>
                        </div>
                        <div class="package-info">
                            <h3><?php echo T6D_5N_PACKAGE_TEXT; ?></h3>

                            <span class="pull-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<span class="review-count"> - 190 review</span>
                                </span>
                            <span class="pull-right price">$1500</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="package-list wow fadeInUp">
                    <a href="tours/<?php echo CUSCO_PKG_5D4N_LINK; ?>">
                        <div class="package-thumb">
                            <img src="<?php echo URLROOT; ?>/img/packages/pkg2.jpg" alt="" />
                            <div class="duration">
                                5 <?php echo DAYS_TEXT; ?><br/>4 <?php echo NIGHTS_TEXT; ?>
                            </div>
                        </div>
                        <div class="package-info">
                            <h3><?php echo T5D_4N_PACKAGE_TEXT; ?></h3>

                            <span class="pull-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<span class="review-count"> - 120 review</span>
                                </span>
                            <span class="pull-right price">$1300</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="package-list wow fadeInUp">
                    <a href="tours/<?php echo CUSCO_PKG_4D3N_LINK; ?>">
                        <div class="package-thumb">
                            <img src="<?php echo URLROOT; ?>/img/packages/pkg3.jpg" alt="" />
                            <div class="duration">
                                4 <?php echo DAYS_TEXT; ?><br/>3 <?php echo NIGHTS_TEXT; ?>
                            </div>
                        </div>
                        <div class="package-info">
                            <h3><?php echo T4D_3N_PACKAGE_TEXT; ?></h3>

                            <span class="pull-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="review-count"> - 90 review</span>
                                </span>
                            <span class="pull-right price">$1200</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="package-list wow fadeInUp">
                    <a href="tours/<?php echo CUSCO_PKG_3D2N_LINK; ?>">
                        <div class="package-thumb">
                            <img src="<?php echo URLROOT; ?>/img/packages/pkg4.jpg" alt="" />
                            <div class="duration">
                                3 <?php echo DAYS_TEXT; ?><br/>2 <?php echo NIGHTS_TEXT; ?>
                            </div>
                        </div>
                        <div class="package-info">
                            <h3>&ensp;&ensp;&ensp;&ensp;<?php echo T3D_2N_PACKAGE_TEXT; ?></h3>


                            <span class="pull-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<span class="review-count"> - 160 review</span>
                                </span>
                            <span class="pull-right price">$1500</span>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ========== 2 PACKAGES ENDS ========== -->








<!-- ========== POPULAR TOURS STARTS  ========== -->
<section id="hot-deals">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h1><?php echo POPULAR_TOURS_TEXT; ?></h1>
                </div>
            </div>
        </div>
    </div>

    <ul class="tour-list">
        <li>
            <div class="tour-thumb">
                <img src="<?php echo URLROOT; ?>/img/popular/city_tour.jpeg" alt="" />
                <div class="overlay">
                    <div class="ovelay-inner text-center">
                        <h2><?php echo CITY_TOUR_TEXT; ?></h2>
                        <p><em><?php echo HALFDAY_TEXT; ?> </em></p>
                        <a href="tours/<?php echo CITY_TOUR_LINK; ?>" class="btn btn-primary"><?php echo READ_MORE_TEXT ; ?></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="tour-thumb">
                <img src="<?php echo URLROOT; ?>/img/popular/machupicchu.jpg" alt="" />
                <div class="overlay">
                    <div class="ovelay-inner text-center">
                        <h2><?php echo MACHUPICCHU_BY_CAR_TEXT; ?></h2>
                        <p><em>2 <?php echo DAYS_TEXT.' 1 '.NIGHT_TEXT; ?></em></p>
                        <a href="tours/<?php echo MACHUPICCHU_BY_CAR_LINK; ?>" class="btn btn-primary"><?php echo READ_MORE_TEXT ; ?></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="tour-thumb">
                <img src="<?php echo URLROOT; ?>/img/popular/inka_trail.jpg" alt="" />
                <div class="overlay">
                    <div class="ovelay-inner text-center">
                        <h2><?php echo INKA_TRAIL_TEXT; ?></h2>
                        <p><em>2 <?php echo DAYS_TEXT.' 1 '.NIGHT_TEXT; ?></em></p>
                        <a href="tours/<?php echo INKA_TRAIL_2D1N_LINK; ?>" class="btn btn-primary"><?php echo READ_MORE_TEXT ; ?></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="tour-thumb">
                <img src="<?php echo URLROOT; ?>/img/popular/inca_jungle.jpg" alt="" />
                <div class="overlay">
                    <div class="ovelay-inner text-center">
                        <h2><?php echo JUNGLE_TREK_TEXT; ?></h2>
                        <p><em>4 <?php echo DAYS_TEXT.' 3 '.NIGHTS_TEXT; ?></em></p>
                        <a href="tours/<?php echo JUNGLE_TREK_4D3N_LINK; ?>" class="btn btn-primary"><?php echo READ_MORE_TEXT ; ?></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="tour-thumb">
                <img src="<?php echo URLROOT; ?>/img/popular/sacred_valley.jpg" alt="" />
                <div class="overlay">
                    <div class="ovelay-inner text-center">
                        <h2><?php echo SACRED_VALLEY_TEXT; ?></h2>
                        <p><em><?php echo FULLDAY_TEXT; ?></em></p>
                        <a href="tours/<?php echo SACRED_VALLEY_LINK; ?>" class="btn btn-primary"><?php echo READ_MORE_TEXT ; ?></a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="tour-thumb">
                <img src="<?php echo URLROOT; ?>/img/popular/colores.jpg" alt="" />
                <div class="overlay">
                    <div class="ovelay-inner text-center">
                        <h2><?php echo MOUNTAIN_COLOURS_TEXT; ?></h2>
                        <p><em><?php echo FULLDAY_TEXT; ?></em></p>
                        <a href="tours/<?php echo MOUNTAIN_COLOURS_LINK; ?>" class="btn btn-primary"><?php echo READ_MORE_TEXT ; ?></a>
                    </div>
                </div>
            </div>
        </li>

    </ul>
    <!--end tour-list-->


</section>
<!-- ========== POPULAR TOURS ENDS ========== -->



<!-- ========== TREKKING SECTION STARTS ========== -->

<!-- ========== TREKKING SECTION ENDS ========== -->





<!-- CONTACT FORM STARTS-->
<section id="contact-us" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo URLROOT; ?>views/img/banner/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h1><?php echo WEREHAPPY_TO_HEAR_FROM_YOU_TEXT; ?></h1>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="contact-left">
                    <ul>

                        <li>
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-info">
                                <p><?php echo PHONE_TEXT; ?>:+051 928 946561<br/>
                                    <?php echo PHONE_TEXT; ?>:+051 944 262401</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-info">
                                <p><a href="mailto:wayracuscoworld@hotmail.com">wayracuscoworld@hotmail.com</a><br/> <a href="mailto:wayracuscoworld@hotmail.com">info@wayracuscoworld.com</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="contact-info">
                                <p>Monday-Friday: 9am - 5pm <br/> Saturday: 10am - 2pm<br/> Sunday - Closed </p>
                            </div>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="contact-info">
                                <p>+051 928 946561<br/> +051 944 262401 </p>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="contact-right">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control" placeholder='<?php echo NAME_TEXT; ?>'>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lname" class="form-control" placeholder='<?php echo LAST_NAME_TEXT; ?>'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder='<?php echo YOUR_EMAIL_TEXT; ?>'>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder='<?php echo SUBJECT_TEXT; ?>'>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="6" cols="20" placeholder="<?php echo ANY_SUGGESTION_TEXT; ?>"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="<?php echo SUBMIT_TEXT; ?>">

                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- CONTACT FORM ENDS -->






<?php require APPROOT . '/views/inc/footer.php'; ?>

