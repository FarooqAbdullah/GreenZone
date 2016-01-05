<?php /* Template Name: Checkout */ ?>
<?php get_header();the_post(); ?>

<!--==============================content================================-->

<div class="container _content_wrapper">
		<div class="row">
			<div class="_ticket_for_checkout col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="media">
						<div class="media-left">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
								<div class="date_day">
									<a href="#">
										<h3>Sun</h3>
										<span>Dec 27</span>
										</a>
								</div>	
							</div>
						</div>
						<div class="media-body">
							<div class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
								<h4 class="media-heading">New York Jets at New York Giant Tickets</h4>
								<span>1:00 pm at Metlife Stadium,</span>
								<span>East Ruthorford, NJ</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row _ticket_info_checkout">
			<div class="padding_0 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 _left">
					<div class="row">
						<h3 class="_tickets_info_heading_checkout">
							Tickets Detail
						</h3>
						<span class="_ticket_detail">
							upper slides 343
						</span>
						<span class="_ticket_detail">
							2 Tikets | Row9
						</span>
						<span class="_ticket_detail">
							Seat 17, 18
						</span>
						
						<div class="_view_from_section">
							View From Section
							<img src="<?php echo get_template_directory_uri(); ?>/images/view_from_section.png" class="_view_image">
						</div>
					</div>	
					<div class="row">
						<h3 class="_tickets_info_heading_checkout">
							Deleivery
						</h3>
						<span class="_ticket_detail">
							Available to dowload with in few minutes  instant download.
						</span>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 _right">
					<div class="row">
						<h3 class="_tickets_info_heading_checkout">
							Payment
						</h3>
						<div class="row">
							<span class="_discounts">
								Discounts
							</span>
							<span class="_manage_codes">
								Manage Fancodes & gift codes
							</span>
							<span class="_ticket_detail">
								Order Total
							</span>
							<span class="_ticket_price_checkout">
								$548.51 <span>USD</span>
								<span class="_ticket_detail pull-right">
									<a href="#">Pricing Detail</a>
								</span>
							</span>
							<span class="_ticket_detail">
								Include all taxes
							</span>
							<div class="_checkout_button">
								<a href="#" class="btn btn-default">Add Payment</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7 _fan_protect_wrapper">
								<!-- <h3 class="_fan_protect_heading">
									Fan Protect <sup>TM<sup> <img src="images/fan_protect.png" alt="img">
								</h3> -->
								<span class="_ticket_detail">
									We back every order so you can buy & sell tickets with 100% confidence.
								</span>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-5 col-xs-5">
								<!-- <img src="images/verify.png" alt="img"> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>