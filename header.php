<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>Lamoda Free Responsive Template | Template Stock</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      

     <!--styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/etlinefont.css">

    <?php wp_head(); ?>




   <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    
	<body  data-spy="scroll" data-target="#main-menu">
 

  <!--Start Page loader -->
  <div id="pageloader">   
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->
   
      
   <!--Start Navigation-->
		<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="index.html">
									<!-- <img src="images/logo.png" alt="Company logo" /> -->
									<?php the_custom_logo(); ?>
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<div class="nav">
                                
									<!-- <li class="active"> <a href="#home">Home</a> </li>
									
									<li> <a href="#about">About</a> </li>
                                    
                                    <li> <a href="#history">History</a> </li>
                                    
                                    <li> <a href="#works">Our Work</a> </li>
                                    
                                     <li> <a href="#team">Team</a> </li>
                                   
								    <li> <a href="#services">Services</a> </li>
																		
									<li> <a href="#blog">Blog</a></li>
                                    
                                    <li> <a href="#testimonials">Testimonials</a></li>
                                     
									<li> <a href="#contact">Contact</a> </li>
										 -->

               <?php wp_nav_menu(array('theme-location'=>'primary')) ; ?>

								</div>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->