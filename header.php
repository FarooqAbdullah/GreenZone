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
<?php $field_value = get_option('greenzone'); ?>
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
			  <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $field_value['greenzone-main-logo']; ?>" alt="Logo" /></a>
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
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	
	<div class="_slider_wrqapper_">
		<?php if(is_front_page() || is_home() || is_search()) { ?>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<?php 
				$count_posts = wp_count_posts('slider_zone');
				for($slide_count=0; $slide_count<(int) $count_posts->publish; $slide_count++) {
					?>
					<li data-target="#carousel-example-generic" data-slide-to="<?php echo $slide_count; ?>" <?php if($slide_count == 0){ echo 'class="active"'; } ?>></li>
					<?php
				}
			?>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			<?php 
			
			$slider_post_array = array('post_type'=> 'slider_zone', 'posts_per_page' => -1,'orderby'=> 'DESC',);
			$slider_query = new WP_Query( $slider_post_array ); // exclude category 9
			$loop_count = 0;
			while($slider_query->have_posts()) : $slider_query->the_post(); 
			$image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
			$active = ($loop_count == 0) ? ' active' : '';
			?>
				
				<div class="item<?php echo $active; ?>">
					<img src="<?php echo $image[0]; ?>" alt="slidser Images">
					<div class="carousel-caption">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div>
				</div>
				
				<?php $loop_count++; ?>
				
			<?php endwhile; wp_reset_query(); ?>
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
				<form role="search" action="" method="get" name="search_site" class="search-form form-inline" action="'.site_url('/').'" >
					<div class="row _cross_form">
						<p>
							<span>X</span>
						</p>
					</div>
					<div class="form-group">
						<label class="sr-only" for="all_tickets"></label>
						<input type="search" class="form-control search-field" id="search_item" name="s" placeholder="Event name, Artist, Venue, Sports name" />
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
					</div><button type="submit" class="search-submit btn btn-default">Search</button>
				</form>
			</div>
		</div>
	<?php 
	} 
	else {
		$banner_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
		if($banner_image !== false) {
			?>
			<div class="_banner_image">
				<img src="<?php echo $banner_image[0]; ?>"  alt="Banner Image"/>
				<h2 class="_page_title"><?php the_title(); ?></h2>
				<div class="_form_overlay"></div>
			</div>
			<?php
		}
	}
	?>
	</div>