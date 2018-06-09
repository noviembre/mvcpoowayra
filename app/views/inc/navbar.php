<!-- =========== Navigation Starts =========== -->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="<?php echo URLROOT; ?>/">
                        <img style="width: 198px; height: auto" src="<?php echo URLROOT; ?>/img/logo-white.png" alt="Logo" /></a>
                </div>




                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar">

                    <ul class="nav navbar-nav navbar-right" style="padding-left: 20px">
                        <li class="dropdown">
                            <a href="#" class="page-scroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Language</a>
                            <ul class="dropdown-menu page-scroll" onchange="langchange(this.value)">
                                <li><a class="page-scroll" href="index.php?lang=en">English</a></li>
                                <li><a class="page-scroll" href="index.php?lang=es">Spanish</a></li>
                                <li><a class="page-scroll" href="index.php?lang=br">Portuguese</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a class="page-scroll" href="<?php echo URLROOT; ?>">
                                <?php echo HOME_TEXT; ?></a>
                        </li>

                        <li>
                            <a class="page-scroll" href="<?php echo URLROOT; ?>/<?php echo TREKKING_LINK; ?>">
                                <?php echo TREKKING_TEXT; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo URLROOT; ?>/<?php echo PACKAGES_LINK; ?>"><?php echo PACKAGE_TEXT; ?></a>
                        </li>

                        <li>
                            <a class="page-scroll" href="<?php echo URLROOT; ?>/<?php echo FAQS_LINK; ?>"><?php echo FAQS_TEXT; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo URLROOT; ?>/<?php echo ABOUT_US_LINK; ?>"><?php echo ABOUT_TEXT; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo URLROOT; ?>/<?php echo CONTACT_LINK; ?>"><?php echo CONTACT_TEXT; ?> </a>
                        </li>


                    </ul>

                </div>



            </div>
        </div>

    </div>
    <!-- /.container -->
</nav>

<!-- =========== Navigation ends =========== -->