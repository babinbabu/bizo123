<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="<?php bloginfo('template_url'); ?>/">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- Stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $id=get_the_ID(); ?>
<div class="header">
  <div class="container">
    <div class="col-md-2 col-sm-6 logo"> <a href="<?php echo get_permalink(5);?>"><img src="images/logo.png" alt="Bizotik" /></a> </div>
    <div class="col-md-4 col-md-offset-6 col-sm-6 hidden-xs">
      <div class="contact-head">
        <h3>Get in Touch <span> <?php echo get_field("telephone", 13); ?></span></h3>
        <h4><a href="mailto:<?php echo get_field("email_id", 13); ?>"><?php echo get_field("email_id", 13); ?></a></h4>
      </div>
    </div>
  </div>
</div>
<!-- Menu -->
<div role="navigation" class="navbar main-nav">
  <div class="container">
    <div class="navbar-header">
      <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if($id==5) echo "class='active'"; ?>><a href="<?php echo get_permalink(5);?>">Home</a></li>
        <li <?php if($id==9) echo "class='active'"; ?>><a href="<?php echo get_permalink(9);?>">About us</a></li>
        <li <?php if($id==7) echo "class='active'"; ?>><a href="<?php echo get_permalink(7);?>">Products</a></li>
        <li <?php if($id==11) echo "class='active'"; ?>><a href="<?php echo get_permalink(11);?>">Projects</a></li>
        <li <?php if($id==13) echo "class='active'"; ?>><a href="<?php echo get_permalink(13);?>">Contact Us</a></li>
        <li <?php if($id==15) echo "class='active'"; ?>><a href="<?php echo get_permalink(15);?>">Request a Quote</a></li>
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</div>
