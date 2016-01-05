<?php
/**
 * The template for displaying search results pages.
 *
 * @package Webace Technology
 * @subpackage GreenZone
 */

get_header(); ?>

<div class="container _content_wrapper">
		<div class="row">
			<div class="_after_form_menu">
				<p>
					<span><span class="glyphicon glyphicon-calendar"></span> Showing Events for <a href="#" class="_showing_events_for_all_dates">all dates <span class="caret"></span></a></span>
					<span><span class="glyphicon glyphicon-map-marker"></span> Happening Near <a href="#" class="_showing_events_for_all_dates">Detroit Sana Fransisco</a></span>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
				<div class="col-lg-9 col-md-9 cool-sm-12 col-xs-12 padding_0 _left_sidebar_">
					<?php if(have_posts()){
               ?>
					   <div class="search-heading">
						   <h1>Your Search Results :</h1>
					   </div>
					   <?php
					while(have_posts()){
						the_post();
						?>
							<div class="search-title">

							   <h2><a href="<?php echo get_permalink(); ?>" ><?php echo ucwords(get_the_title()); ?></a></h2>
							</div>
						   <div class="search-description">
							   <?php echo strip_tags(get_the_excerpt()); ?>
						   </div>
						<?php
					}
					?>
				   <?php
				   }
				   else {
				   ?>
					   <h1 class="not-found"> No Search Found. </h1>
				   <?php
				   }

				   ?>
					<div class="search-back" align="center">
						<h3><a href="<?php echo site_url('/'); ?>" >Go to Home</a></h3>
					</div>

				</div>
				
				<div class="col-lg-3 col-md-3 cool-sm-12 col-xs-12 padding_0">
					<div class="row _sell_tickets_friends">
						<div class="col-md-12 col-sm-12 padding_0">
						<?php
							$field_body_footer = get_option('greenzone');
						?>
							<img src="<?php echo $field_body_footer['greenzone-sell-tickets-image']; ?>" alt="people"/>
							<span class="_people_overlay"></span>
							<h3 class="_people_overlay_title"><?php echo $field_body_footer['greenzone-sell-tickets-title']; ?></h3>
							<a href="<?php echo $field_body_footer['greenzone-sell-tickets-button-u']; ?>" class="_sell_button_"><?php echo $field_body_footer['greenzone-sell-tickets-button-text']; ?></a>
						</div>
					</div>
					<div class="row _friends_on_ticketmaster">
						<div class="col-md-12 col-sm-12 padding_0">
							<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="people"/>
							Friends on Ticket Master
						</div>
					</div>
					<div class="row _every_one_friends">
						<div>
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#everyone" aria-controls="everyone" role="tab" data-toggle="tab">Everyone</a></li>
								<li role="presentation"><a href="#friends" aria-controls="friends" class="_friends_tab" role="tab" data-toggle="tab">Friends</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="everyone">
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-1.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-2.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-3.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-4.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="profile">
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-1.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-2.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-3.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
									<div class="row _friends_info_wrapper">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<img src="<?php echo get_template_directory_uri(); ?>/images/singer-4.png" alt="Image" />
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
											Iron Maidan
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<h3 clas="_friends_count">7211</h3>
											<span>RSVPS</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row _likes_on_facebook">
						<div class="col-md-12 col-sm-12 padding_0">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<img src="<?php echo $field_body_footer['greenzone-footer-header-logo']; ?>" alt="Company Logo">
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
								<h3 class="padding-left_0">Company Tickets <span class="glyphicon glyphicon-ok"></span></h3>
								<a href="#" class="_like_us_button"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /> Like Page</a> 1.3em Likes
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

<?php get_footer(); ?>
