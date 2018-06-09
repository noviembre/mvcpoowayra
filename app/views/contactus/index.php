<?php
/**
 * User: GoMiNam
 * Date: 3/13/2018
 * Time: 4:29 AM
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





<!-- CONTACT FORM STARTS-->
<section id="contact-us" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo URLROOT; ?>/img/banner/1_machupicchu.jpg);">
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
                                <p><a href="mailto:wayracuscoworld@hotmail.com">wayracuscoworld@hotmail.com</a><br/> <a href="mailto:wayracuscoworld@hotmail.com">reservas@wayracuscoworld.com</a></p>
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
                    <form action="<?php echo URLROOT; ?>/pages/index" method="post" onsubmit="return validarMensaje()">
                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder='<?php echo NAME_TEXT; ?>' required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder='<?php echo LAST_NAME_TEXT; ?>' required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="correo" id="correo" class="form-control" placeholder='<?php echo YOUR_EMAIL_TEXT; ?>' required>
                        </div>


                        <div class="form-group">
                            <textarea name="mensaje" class="form-control" id="mensaje" rows="6" cols="20" placeholder="<?php echo ANY_SUGGESTION_TEXT; ?>" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="<?php echo SUBMIT_TEXT; ?>">

                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- CONTACT FORM ENDS -->






<?php require APPROOT . '/views/inc/pie.php'; ?>
