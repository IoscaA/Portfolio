

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $Website_Name?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>/img/favicon.png" rel="apple-touch-icon">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet">
  <!-- Modal css -->
  <link href="<?php echo base_url(); ?>/css/Workinprogress.css" rel="stylesheet">

</head>

<body>

  <!--loader -->
  <div class="loader-wrapper">
       <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar" style="overflow: hidden; position: relative;">
    <div id="effect" style="width: 100%;height: 100%; position: absolute; overflow: hidden;">  </div>

    <div class="container py-2 py-md-5">
        <div class="container py-2 py-md-5">
          <div class="row align-items-start">
            <div class="col-md-2">
              <ul class="custom-menu">

                <li <?php if ($page == "" || $page == "home") echo 'class="active"';?>><a href="<?php echo base_url()?>/home" class="menu">Home</a></li>
                <li <?php if ($page == "about") echo 'class="active"';?>><a href="<?php echo base_url()?>/chisono" class="menu">Chi sono</a></li>
                <li <?php if ($page == "contact") echo 'class="active"';?>><a href="<?php echo base_url()?>/contatti" class="menu">Contatti</a></li>
                <li <?php if ($page == "contact") echo 'class="active"';?>><a href="<?php echo base_url()?>/oxygen" class="menu">Project Oxygen</a></li>
            </div>
            <div class="col-md-6 d-none d-md-block  mr-auto">
              <div class="tweet d-flex">
                <span class="icofont-twitter text-white mt-2 mr-3"></span>
                <div>
                    <h3>Il mio ultimo tweet</h3>
                  <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus inciduntut
                      officiis explicabo inventore. <br> <a href="#">t.co/v82jsk</a></em></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
              <h3>Cosa sto facendo?</h3>
              <hr class="divider">
              <p>Attualmente sto dedicando molto tempo allo studio di ambienti con il software Blender, <br> ma anche al continuo miglioramento delle mie skill in ambito web dev.</p>
            </div>
          </div>
        </div>
    </div>
  </div>



  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
    <!--  <a class="navbar-brand" href="index.php"><?php echo $Website_Name; ?></a> -->
      <a class="navbar-brand" href="<?php echo base_url();?>/home"><img src="<?php echo base_url();?>/img/logo.png" alt="logo"></a>
      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>



<!--Vanta js
  <script src = "js/three.r92.min.js "> </script>
  <script src = "js/vanta.net.min.js "></script>
  <script src="js/app.js"></script>  -->
