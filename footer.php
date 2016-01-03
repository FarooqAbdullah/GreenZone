<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Webace Technology
 * @subpackage GreenZone
 */
?>

<footer class="_footer">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<h3 class="contact_us">Contact Us</h3>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<div class="row">
						<h3>Customer Support</h3>
						<p>Help Topics: Visit our help topics to search for answer to your qustions or browse popular topics.</p>
					</div>
					<div class="row">
						<h3>Find Answers to Frequently asked Questions online</h3>
						<p><a href="#" class="_faq btn btn-default">Faq</a></p>
					</div>
					<div class="row">
						<h3>Chat: Need Help now</h3>
						<p>You can chat with us anytime - 24 hours a day, 7 bdays a week. We are here When You need us.</p>
					</div>
					<div class="row">
						<p><a href="#" class="_chat btn btn-default">Chat</a></p>
					</div>
					<div class="row">
						<h3>Phone</h3>
					</div>
					<div class="row">
						<p>Give us a call and we'll talk through any questions you may have.</p>
						<p>US and Canada 1-866-788-2482 Toll Free</p>
						<p>Weekdays 5:00am - 9:00pm Pacific Time</p>
						<p>Weekends 5:00am - 8:00pm Pacific Time</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<div class="row">
						<h3>Meida & Press</h3>
						<p>For Media & Pressw inquiries Please Visit <a href="#" class="_company_preess_box">Company Press Box</a></p>
					</div>
					<div class="row">
						<h3>Corporate Office</h3>
						<p>Stub Hub</p>
						<p>199 Fremont Street, Floor 4</p>
						<p>Sans Fransisico CA.94105</p>
					</div>
					<div class="row">
						<h3>Register</h3>
						<h3>About</h3>
						<h3>Contact</h3>
						<h3>T & C</h3>
						<h3>Private Policy</h3>
					</div>
					<div class="row">
						<p><a href="#" class="_chat btn btn-default">Login</a> <a href="#" class="_faq btn btn-default">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row _join_us_wrapper">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p class="_join_us_on">Join us on</p>
					<p class="_join_us_on">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-connect.png" alt="Social Image" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/gmail-connect.png" alt="Social Image" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-connect.png" alt="Social Image" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-connect.png" alt="Social Image" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest-connect.png" alt="Social Image" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-connect.png" alt="Social Image" /></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-connect.png" alt="Social Image" /></a>
					</p>
				</div>
			</div>
	</footer>
	<div class="_modal">
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
					<button type="button" class="close _cancel" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<button class="btn btn-default _pop_up_buttons _facebook_login">Log in With Facebook</button>
						<button class="btn btn-default _pop_up_buttons _google_login">Log in With Google</button>
						<span class="_dash_line"></span>
						<span class="_or"> or</span>
						<span class="_dash_line"></span>
						<form class="_login_form" method="post" action="#">
							<input type="email" placeholder="Email Address" required class="form-control _credential_login" name="_email_login" />
							<input type="password" placeholder="Password" required class="form-control _credential_login" name="_password_login" />
							<div class="checkbox">
								<label>
									<input type="checkbox" name="_remember"> Remember me
								</label>
								<a href="#" class="_forgot_password pull-right">Forgot Password?</a>
							</div>
							<input type="submit" class="btn btn-default _login_submit" value="Log in">
						</form>
						<div class="_have_an_account">
							<span>Don't have an account?</span>
							<a href="#" data-toggle="modal" data-target="#register" class="_sign_up">Sign up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
								<img src="<?php echo get_template_directory_uri(); ?>/images/pop_up_logo.png" alt="LOGO">
								<button type="button" class="close pull-right _cancel" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
						</div>
						<div class="row _container">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
								<h2 class="_main_heading">Join Green Zone Tickets</h2>
								<form action="#" method="post" class="_register_form form-inline">
									<div class="form-group">
										<input type="text" required class="form-control" id="first_name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input type="text" required class="form-control" id="last_name" placeholder="Last Name">
									</div>
									<input type="email" class="form-control _full" placeholder="Enter Email" name="register_email" />
									<input type="password" class="form-control _full" placeholder="Create Password" name="register_password" />
									<select class="form-control _full" name="register_option">
										<option value="" >one</option>
										<option value="" >two</option>
										<option value="" >three</option>
									</select>
									<div class="_want_to_post">
										<button class="btn btn-default" id="_want_to_post_services"> <span>></span> Want to post my services</button>
										<button class="btn btn-default" id="_want_to_book_services"> <span>></span> Want to book my services</button>
									</div>
									<div class="checkbox _full_checkbox">
										<label>
											<input type="checkbox" name="_sign_me_up" /> 
											<span>Sign me up <span class="_company_name">Green Zone</span> email to get timely event updates.</span>
										</label>
									</div>
									<div class="checkbox _full_checkbox">
										<label>
											<input type="checkbox" name="_program_terms" /> 
											<span>I want to start earning rewards and accept the <a href="" ><span class="_program_terms">program terms.</span></a></span>
										</label>
									</div>
									<input type="submit" class="btn btn-default _login_submit" value="Sign Up">
									<div class="_terms_condition_accept">
										By singing up you accept our <a href-=""><span class="_program_terms">user agreement</span></a> and <a href-=""><span class="_program_terms">Privacy Policy</span></a>
									</div>
								</form>
							</div>
						</div>
						<div class="_alredy_member">
							Already a member? <a href="#" data-toggle="modal" data-target="#login" class="btn btn-default _sign_in_">Sign in</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
