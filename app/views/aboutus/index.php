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



<!-- ========== ABOUT STARTS ========== -->
<section id="packages" class="inverse">
    <div class="container">


        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h1><?php echo WHO_WE_ARE_TEXT; ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <p class="text-justify"><?php echo ABOUT_WHOARE_PARRAGRAPH_TEXT_1; ?><br />
                    <?php echo ABOUT_WHOARE_PARRAGRAPH_TEXT_2; ?><br />
                    <?php echo ABOUT_WHOARE_PARRAGRAPH_TEXT_3; ?><br />
                    <?php echo ABOUT_WHOARE_PARRAGRAPH_TEXT_4; ?></p>
                <br>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <h3><?php echo MISSION_TEXT; ?></h3>
                <p class="text-justify">
                    <?php echo ABOUT_MISSION_PARRAGRAPH_TEXT_1; ?>
                </p>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <h3><?php echo VISION_TEXT; ?></h3>
                <p class="text-justify">
                    <?php echo ABOUT_VISION_PARRAGRAPH_TEXT_1; ?>
                </p>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- ========== ABOUT ENDS ========== -->


<?php require APPROOT . '/views/inc/pie.php'; ?>
