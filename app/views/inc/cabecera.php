
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Wayra Cusco World Travel Agency" content="Travel Agency on peru, book with us to travel around Peru">
    <meta name="author" content="">

    <title><?php echo SITENAME; ?></title>



    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URLROOT; ?>/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo URLROOT; ?>/css/animate.min.css" rel="stylesheet">
    <!--Fancybox-->
    <link href="<?php echo URLROOT; ?>/css/jquery.fancybox.css" rel="stylesheet">
    <!-- font-awesome-->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/fonts/font-awesome.min.css">
    <!--Owl Carousel-->
    <link href="<?php echo URLROOT; ?>/css/owl.carousel.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <!-- Main CSS -->
    <link href="<?php echo URLROOT; ?>/css/style.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/style2.min.css" rel="stylesheet">
    <!-- Color switcher -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/skin/switcher.min.css">

    <!--    <link rel="stylesheet" href="" id="colors">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

  <?php
//puede que la sesion no este funcionando??
 require APPROOT . '/config/dblanguage.php';
 require APPROOT . '/helpers/language.php';
  
  ?>

  <script>
      function langchange(lng)
      {
          window.location.href = '<?php echo $_SERVER['PHP_SELF']; ?>?lang=' + lng;
      }

  </script>
  <!--Preload-->
  <div class="preloader">
      <div class="preloader_image"></div>
  </div>



<?php require APPROOT . '/views/inc/navbar.php'; ?>