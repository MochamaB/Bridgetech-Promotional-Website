	<!-- BEGIN FOOTER
================================================== -->
	<section>
	<div class="footer">
		<div class="container animated fadeInUpNow notransition">
			<div class="row">
				<div class="col-md-3">
					<h1 class="footerbrand">Bridge Technologies</h1>
					<p>
						 An IT firm that takes your company's business online.
					</p>
					<p>
						 We offer Branding, Web design and Digital Marketting.
					</p>

				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
					<div class="footermap">
						<p>
							<strong>Address: </strong> Kindaruma Road, Kilimani
						</p>
						<p>
							<strong>Phone: </strong> 254 723 710025
						</p>
						<p>
							<strong>Email: </strong> info@bridgetech.co.ke
						</p>
						<p>
							<strong>Email: </strong> brianmochama@gmail.com
						</p>
						<ul class="social-icons list-soc">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-skype"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">C</span>lients' <span class="font100">Voice</span></h1>
					<div id="quotes">
						<div class="textItem">
							<div class="avatar">
								<img src="http://wowthemes.net/demo/biscaya/img/demo/avatar.jpg" alt="avatar">
							</div>
							 "Bridge Technologies helped my business gain internet visibility and also helped get my business online using their E commerce solutions.<span style="font-family:arial;">"</span><br/><b> Walter Miheso, Bushmark Restaraunt </b>
						</div>
						<div class="textItem">
							<div class="avatar">
								<img src="http://wowthemes.net/demo/biscaya/img/demo/avatar.jpg" alt="avatar">
							</div>
							 "They created a very good and impressive website that alerted many people on our organization and our projects to help the community.<span style="font-family:arial;">"</span><br/><b>Beth Wangari, Githu Muigai Foundation </b>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">Q</span>uick <span class="font100">Message</span></h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="contact.php" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
							<textarea class="col-md-12" name="comment" rows="4" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="pull-left">
						 &copy; Copyright 2021 Bridge Technologies
					</p>
				</div>
				<div class="col-md-8">
					<ul class="footermenu pull-right">
						<li><a href="<?php echo base_url()?>">Home</a></li>
						<li><a href="<?php echo base_url()?>/pages/services">Services</a></li>
						<li><a href="<?php echo base_url()?>/pages/portfolio">Portfolio</a></li>
						<li><a href="<?php echo base_url()?>/pages/aboutus">About Us</a></li>
						<li><a href="<?php echo base_url()?>/pages/contactus">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /footer section end-->
</div>
<!-- /.wrapbox ends-->
<!-- SCRIPTS, placed at the end of the document so the pages load faster
================================================== -->
<script src="<?php echo base_url()?>/public/js/jquery.js"></script>
<script src="<?php echo base_url()?>/public/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>/public/js/plugins.js"></script>
<script src="<?php echo base_url()?>/public/js/common.js"></script>

<script>
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	$(window).load(function(){			
		$('#carousel-projects').carouFredSel({
		responsive: true,
		items       : {
        width       : 200,
        height      : 295,
        visible     : {
            min         : 1,
            max         : 4
        }
    },
		width: '200px',
		height: '295px',
		auto: true,
		circular	: true,
		infinite	: false,
		prev : {
			button		: "#car_prev",
			key			: "left",
				},
		next : {
			button		: "#car_next",
			key			: "right",
					},
		swipe: {
			onMouse: true,
			onTouch: true
			},
		scroll: {
        easing: "",
        duration: 1200
    }
	});
		});

		/* ---------------------------------------------------------------------- */
	/*	Accordion 1
	/* ---------------------------------------------------------------------- */
	/*!
	*/
	$(document).ready(function()
	{
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({'width' : contentwidth });
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	return false;
	});
	/* ---------------------------------------------------------------------- */
	/*	Accordion 2
	/* ---------------------------------------------------------------------- */
	var clickElem = $('#accordion div h4');
	clickElem.on('click', function(){
		var $this = $(this),
			parentCheck = $this.parent('div');
		if( !parentCheck.hasClass('active')) {
			var accordItems = $('#accordion div');
			accordItems.removeClass('active');
			parentCheck.addClass('active');
		}
	});
	/* ---------------------------------------------------------------------- */
	/*	Accordion 2
	/* ---------------------------------------------------------------------- */
	var clickElem = $('#accordionone div h4');
	clickElem.on('click', function(){
		var $this = $(this),
			parentCheck = $this.parent('div');
		if( !parentCheck.hasClass('active')) {
			var accordItems = $('#accordionone div');
			accordItems.removeClass('active');
			parentCheck.addClass('active');
		}
	});
	/* ---------------------------------------------------------------------- */
	/*	Tabs1&2
	/* ---------------------------------------------------------------------- */
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
	/* ---------------------------------------------------------------------- */
	/*	Tabs3
	/* ---------------------------------------------------------------------- */
	$('#myTab a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
	})
</script>

<script>
	//CALL TESTIMONIAL ROTATOR
	$( function() {
		/*
		- how to call the plugin:
		$( selector ).cbpQTRotator( [options] );
		- options:
		{
			// default transition speed (ms)
			speed : 700,
			// default transition easing
			easing : 'ease',
			// rotator interval (ms)
			interval : 8000
		}
		- destroy:
		$( selector ).cbpQTRotator( 'destroy' );
		*/
		$( '#cbp-qtrotator' ).cbpQTRotator();
	} );
</script>
<script>
	//CALL PRETTY PHOTO
	$(document).ready(function(){
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
	});
</script>
<script>
	//MASONRY
	$(document).ready(function(){
	var $container = $('#content');
	  $container.imagesLoaded( function(){
		$container.isotope({
		filter: '*',	
		animationOptions: {
		 duration: 750,
		 easing: 'linear',
		 queue: false,	 
	   }
	});
	});
	$('#filter a').click(function (event) {
		$('a.selected').removeClass('selected');
		var $this = $(this);
		$this.addClass('selected');
		var selector = $this.attr('data-filter');
		$container.isotope({
			 filter: selector
		});
		return false;
	});
	});
</script>
<script>
//ROLL ON HOVER
	$(function() {
	$(".roll").css("opacity","0");
	$(".roll").hover(function () {
	$(this).stop().animate({
	opacity: .8
	}, "slow");
	},
	function () {
	$(this).stop().animate({
	opacity: 0
	}, "slow");
	});
	});
</script>
</body>
</html>