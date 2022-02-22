<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p><?php getshortdescription("titles"); ?></p>
					<div class="read">
						<a href="about.php" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Popular Posts</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>Here at TecHill we respect your privacy and promise to never spam your email.</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="<?php getlinks("links","facebook");?>" target="_blank">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","twitter");?>" target="_blank">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li>
							    <a class="facebook" href="<?php getlinks("links","dribble");?>" class="dribble3 mx-2" target="_blank">
								<i class="fab fa-dribbble"></i>
								<span>Dribble</span>
							   </a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","pinterest");?>" target="_blank">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">

						<a href="index2.php">Privacy Policy</a>
						|<a href="#">Terms and condition</a>
						<p> TecHill <?php $current=date("Y"); print_r($current);?> | Brought To You by
						<a href="https://youtu.be/hrc810fKUZc" target="_blank">Mash Developers</a><br>
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>