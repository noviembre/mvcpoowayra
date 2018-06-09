<?php
/**
 * Created by PhpStorm.
 * User: GoMiNam
 * Date: 3/13/2018
 * Time: 6:09 AM
 */

require APPROOT . '/views/inc/cabecera.php'; ?>

<!-- Top Starts-->
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
<!-- Top ends -->

<!-- Main Content -->
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="content-block">

                        <h1 class="text-warning text-center"><?php echo NEW_FAQS_TEXT;?></h1>
                        <!-- details starts -->
                        <div class="post_desc">
                            <h2 class="text-warning"><?php echo FAQS_WEATHER_TITLE_TEXT;?></h2>
                            <blockquote><?php echo FAQS_WEATHER_DESCRIPTION_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo FAQS_VACCINES_TITLE_TEXT;?></h2>
                            <blockquote><?php echo FAQS_VACCINES_DESCRIPTION_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo FAQS_FIT_TITLE_TEXT;?></h2>
                            <blockquote><?php echo FAQS_FIT_DESCRIPTION_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo FAQS_DEPOSIT_TITLE_TEXT;?></h2>
                            <blockquote><?php echo FAQS_DEPOSIT_DESCRIPTION_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo FAQS_WAYNAPICCHU_LIMIT_TEXT;?></h2>
                            <blockquote><?php echo FAQS_WAYNAPICCHU_DESCRIPTION_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo FAQS_INCA_TRAIL_2D1N_TITLE_TEXT;?></h2>
                            <blockquote><?php echo FAQS_INCA_TRAIL_2D1N_DESCRIPTION_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo FAQS_SOROCHE_TITLE_TEXT ;?></h2>
                            <blockquote><?php echo FAQS_SOROCHE_DESCRITION_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo  FAQS_SOROCHE_ONE_TEXT;?></h2>
                            <blockquote><?php echo FAQS_SOROCHE_ONE_DESC_TEXT;?></blockquote>

                            <h2 class="text-warning"><?php echo FAQS_SOROCHE_TWO_TEXT ;?></h2>
                            <blockquote><?php echo FAQS_SOROCHE_TWO_DESCRIPTION;?></blockquote>

                            <h2 class="text-warning"><?php echo  FAQS_SOROCHE_THREE_TEXT;?></h2>
                            <blockquote><?php echo FAQS_SOROCHE_TWO_THREE_TEXT;?></blockquote>




                        </div><!-- details ends -->



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
            </div>



        </div>
</section>
<!--end main-content-->
<?php
require APPROOT . '/views/inc/pie.php'; ?>