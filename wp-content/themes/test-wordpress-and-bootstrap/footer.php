<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_Wordpress_and_Bootstrap
 */

?>



<?php wp_footer(); ?>'

<!-- SIGN UP ----------------------------->
<section id="signup" data-type="background" data-speed="4" class="section-padding">
	<div class="container">
		<div class="row align-center">
			<div class="col-sm-12">
				<h2>Are you ready to let me build you your site?</h2>
				<button style="width: 300px" class="btn btn-success btn-lg " data-toggle="modal" data-target="#myModal" role="button">Yes create my site!</button>
			</div>
		</div>
	</div>
</section>

<!-- FOOTER -------------------------->
<footer>
	<div class="container">
		<div class="row">
			<div class=" col-sm-3 footer-logo">
				<p><a  href="/"><img class="img-logo img-responsive" src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo-top.png" alt="Test Wordpress logo"></a></p>
			</div>

			<div  class="col-sm-6 ">

					<?php wp_nav_menu(array(
							'theme_location'    =>'footer',
							'container'         => 'nav',
							'menu_class'        => 'list-unstyled list-inline'
						)
					)?>
			</div>
			<div class="col-sm-3 ">
				<a  id="backToTop" href="#">Back to TOP</a>
			</div>
		</div>
			<div class="row">
				<div class="col-sm-12">
				<p  class="list-unstyled list-inline ">
					Created by George Tourtsinakis All rights reserved

				</p>
				</div>

			</div>


	</div><!--End footer container------->
</footer><!--End footer----------------->


<!-- MODAL ----------------------->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<!--For screens readers only--->
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					<i class="fa fa-envelope">Get quote NOW!</i>
				</h4>
			</div><!--modal-header-->

			<div class="modal-body">
				<p>Simply enter your email and idea for your site to get quote <em>for free!</em>.</p>
				<form class=" " role="form">
					<div class="form-group">
						<label class="sr-only" for="name">Your name</label>
						<input type="text" class="form-control" placeholder="Your name">
					</div><!--form group--->
					<div class="form-group">
						<label class="sr-only" for="email">Your email</label>
						<input type="text" class="form-control" placeholder="Your email">
					</div><!--form group--->
					<div class="form-group">
						<label class="sr-only" for="getIdea">Your idea</label>
						<textarea type="text" class="form-control" placeholder="Your idea" rows="6" ></textarea>
					</div>
					<div>
						<input type="submit" class="btn btn-danger" value="Get quote!">
					</div>
				</form>

				<hr>

				<p><small>By sending your info you will be able to receive a quote for your future site.</small></p>

			</div><!--modal-body--->
		</div><!--Modal content---->
	</div><!--modal dialog-------->
</div><!--End Modal--------------->


<!--BOOTSTRAP CORE JAVASCRIPT and our javascript-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--The template directory returns the theme parent directory like styleshhet_directory .Just for semantic purposes-->
<script src="<?php bloginfo('template_directory')?>/assets/js/jquery-2.2.4.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>

</body>
</html>
