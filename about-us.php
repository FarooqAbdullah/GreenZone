<?php /* Template Name: About Us */ ?>
<?php get_header();the_post(); ?>

<!--==============================content================================-->

<div class="container _content_wrapper">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="_content_title">Green Zone Tickets</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p class="_content_description">
					<?php echo str_replace('<p>','',get_the_content()); ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="_content_title">Our Team</h2>
			</div>
		</div>
		<div class="row _our_team_wrapper">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
			<?php
				// Grab the metadata from the database
				$teamMembers = get_post_meta( get_the_ID(), 'greenzone-team-member', true );
				//print_r($teamMembers);
				$i=0;
				foreach($teamMembers as $teamMember) { ?>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-sm-12 col-lg-12 col-md-12 col-md-12 padding_0">
								<div class="thumbnail">
									<img src="<?php echo $teamMember['_team_member_image']; ?>" alt="Team Image">
									<div class="caption">
										<h3 class="_member_name"><?php echo $teamMember['_team_member_name']; ?></h3>
										<p class="_member_designation"><?php echo $teamMember['_team_member_designation']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php	
				}
			?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>