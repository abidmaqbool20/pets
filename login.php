<?php include("includes/header.php"); ?>
<?php include("includes/nav-2.php"); ?>
	
<section class="tz-register">
			<div class="log-in-pop">
				<div class="log-in-pop-left">
				
					<p>Don't have an account? Create your account. It's take less then a minutes  </p> <div class="input-field s4">
								<a href="register.php" class="waves-effect waves-light log-in-btn"> Register </a> <br> <h4>  OR </h4> </div>
					<h4>  Login with social media</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
						</li>
						<li><a href="#"><i class="fa fa-google"></i> Google+</a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
						</li>
					</ul>
				</div>
				<div class="log-in-pop-right">
					<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.html" alt="" />
					</a>
					<h4>Login</h4>
					<p>Don't have an account? Create your account. It's take less then a minutes</p>
					<form class="s12">
						<div>
							<div class="input-field s12">
								<input type="text" data-ng-model="name1" class="validate">
								<label>User name</label>
							</div>
						</div>
						<div>
							<div class="input-field s12">
								<input type="password" class="validate">
								<label>Password</label>
							</div>
						</div>
						<div>
							<div class="input-field s4">
								<input type="submit" value="SignIn" class="waves-effect waves-light log-in-btn"> </div>
						</div>
						<div>
							<div class="input-field s12"> <a href="forgot-pass.html">Forgot password</a> | <a href="register.html">Create a new account</a> </div>
						</div>
					</form>
				</div>
			</div>
	</section>

	<!--MOBILE APP-->
<!-- 	<section class="web-app com-padd">
		<div class="container">
			<div class="row">
				<div class="col-md-6 web-app-img"> <img src="images/mobile.png" alt="" /> </div>
				<div class="col-md-6 web-app-con">
					<h2>Looking for the Best Service Provider? <span>Get the App!</span></h2>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i> Find nearby listings</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Easy service enquiry</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Listing reviews and ratings</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Manage your listing, enquiry and reviews</li>
					</ul> <span>We'll send you a link, open it on your phone to download the app</span>
					<form>
						<ul>
							<li>
								<input type="text" placeholder="+01" /> </li>
							<li>
								<input type="number" placeholder="Enter mobile number" /> </li>
							<li>
								<input type="submit" value="Get App Link" /> </li>
						</ul>
					</form>
					<a href="#"><img src="images/android.png" alt="" /> </a>
					<a href="#"><img src="images/apple.png" alt="" /> </a>
				</div>
			</div>
		</div>
	</section> -->
<?= include("includes/footer.php"); ?>