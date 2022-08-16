<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Bridge Technologies</title>
<!-- Style -->
<link href="<?php echo base_url()?>/public/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url()?>/public/css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="<?php echo base_url()?>/public/css/responsive.css" rel="stylesheet">
<!-- Choose Layout -->
<link href="<?php echo base_url()?>/public/css/layout-semiboxed.css" rel="stylesheet">
<!-- Choose Skin -->
<link href="<?php echo base_url()?>/public/css/skin-blue.css" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>/public/img/favicon1.ico">
<!-- IE -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>	   
    <![endif]-->
<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	 <![endif]-->
</head>
<?php
$page = basename($_SERVER['PHP_SELF']);
?>
<body class="off">
<!-- /.wrapbox start-->
<div class="wrapbox">
	<!-- TOP AREA
================================================== -->
	<section class="toparea">
	<div class="container">
		<div class="row">
			<div class="col-md-6 top-text pull-left animated fadeInLeft">
				<i class="icon-phone"></i> Phone: (254) 723 710025 <span class="separator"></span><i class="icon-envelope"></i> Email: <a href="#">info@Bridgetech.co.ke</a>
			</div>
			<div class="col-md-6 text-right animated fadeInRight">
				<div class="social-icons">
					<a class="icon icon-facebook" href="#"></a>
					<a class="icon icon-twitter" href="#"></a>
					<a class="icon icon-linkedin" href="#"></a>
					<a class="icon icon-skype" href="#"></a>
					<a class="icon icon-google-plus" href="#"></a>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /.toparea end-->
		<!-- NAV
================================================== -->
	<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand logo-nav" href="index.html"><img src="<?php echo base_url()?>/public/img/Bridgetechlogo2.png" style="height:65px; width:220px; margin-top:-14px;" alt="logo"></a>
		</div>
		<ul id="nav" class="nav navbar-nav pull-right">
			<li class="<?php if($page == 'index.php'){ echo ' active"';}?>">
			<a href="<?php echo base_url()?>">Home</a></li>
			<li class="<?php if($page == 'services'){ echo ' active"';}?>">
			<a href="<?php echo base_url()?>/pages/services">Services </a>
			</li>
			<li class="<?php if($page == 'portfolio'){ echo ' active"';}?>">
			<a href="<?php echo base_url()?>/pages/portfolio">Portfolio</a>
			</li>
			<li class="<?php if($page == 'ecommerce'){ echo ' active"';}?>">
			<a href="<?php echo base_url()?>/pages/ecommerce">E Commerce</a>
			</li>
			<li class="<?php if($page == 'aboutus'){ echo ' active"';}?>">
			<a href="<?php echo base_url()?>/pages/aboutus">About Us</a>
			</li>
			<li class="<?php if($page == 'contactus'){ echo ' active"';}?>">
			<a href="<?php echo base_url()?>/pages/contactus">Contact Us</a>
			</li>
		</ul>		
	</div>	
	</nav>
	<!-- /nav end-->
