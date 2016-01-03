<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Webace Technology
 * @subpackage GreenZone
 */
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>
<div class="_main_wrapper_">
	<header class="_head_wrapper_">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" /></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php 
			if ( has_nav_menu( 'primary-menu' ) ) {
				$navigation = array(
					'theme_location'  => 'primary-menu',
					'menu'            => '',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav navbar-right',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $navigation );
			}
				
			?>
			  <!-- <ul class="nav navbar-nav navbar-right">
				<li><a href="index.html">Home</a> <span class="_separator"></span></li>
				<li><a href="about_us.html">About Us</a><span class="_separator"></span></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
					<span class="_separator"></span>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
					</ul>
				</li>
				<li><a href="#" data-toggle="modal" data-target="#login">Login</a><span class="_separator"></span></li>
				<li><a href="#">News</a><span class="_separator"></span></li>
				<li><a href="contact.html">Contact Us</a></li>
			  </ul> -->
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<div class="_slider_wrqapper_">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider_image1.jpg" alt="slidser Images">
					<div class="carousel-caption">
						<h3>Green Zone Tickets</h3>
						<p>is the best market place for fans to buy and sell Sports, Concerts, and theater tickets online</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg" alt="slidser Images">
					<div class="carousel-caption">
						<h3>Green Zone Tickets</h3>
						<p>is the best market place for fans to buy and sell Sports, Concerts, and theater tickets online</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider-3.jpg" alt="slidser Images">
					<div class="carousel-caption">
						<h3>Green Zone Tickets</h3>
						<p>is the best market place for fans to buy and sell Sports, Concerts, and theater tickets online</p>
					</div>
				</div>
			 </div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<div class="_search_box_">
				<div class="_form_overlay"></div>
				<a href="#" class="_sewarch_form_respo">Click to Search</a>
				<form action="" method="post" name="search_site" class="form-inline">
					<div class="row _cross_form">
						<p>
							<span>X</span>
						</p>
					</div>
					<div class="form-group">
						<label class="sr-only" for="all_tickets"></label>
						<input type="text" class="form-control" id="search_item" name="search_item" placeholder="Event name, Artist, Venue, Sports name" />
					</div><div class="form-group _all_tickets_cckbox">
						<label class="sr-only" for="all_tickets"></label>
						<input type="text" class="form-control" id="all_tickets" name="all_tickets" placeholder="All Tickets" />
					</div><div class="form-group _location_wrapper_">
						<label class="sr-only" for="location"></label>
						<input type="text" class="form-control" id="location" name="location" placeholder="Location" />
					</div><div class="form-group _dates_">
						<div class="dropdown">
							<button class="btn btn-default form-control dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Dates
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" >
								<li class="_not_calender"><span class="_date_dropdown_" >This Weekend</span></li>
								<li role="separator" class="divider"></li>
								<li class="_not_calender"><span class="_date_dropdown_" >Next 3 Days</span></li>
								<li role="separator" class="divider"></li>
								<li class="_not_calender"><span class="_date_dropdown_" >Next 7 Days</span></li>
								<li role="separator" class="divider"></li>
								<li class="_not_calender"><span class="_date_dropdown_" >Next 30 Days</span></li>
								<li role="separator" class="divider"></li>
								<li class="_calender_wrapper"><input type="text" class="datepicker" value="Pick a Date"></li>
							</ul>
						</div>
					</div><button type="submit" class="btn btn-default">Search</button>
				</form>
			</div>
		</div>
	</div>