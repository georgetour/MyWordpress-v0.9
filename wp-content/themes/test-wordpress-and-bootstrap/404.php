<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Test_Wordpress_and_Bootstrap
 */

get_header(); ?>

	<section class="top-image feature-image-default" data-type="background" data-speed="2">
		<h1 class="top-header">Where that page went???</h1>
	</section><!--End top image--->

	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">
				<div class="error-404 not-found">
					<div class="page-content">
						<h2>Don't worry we will get you back !</h2>

						<!--==RESOURCES===-->
						<h3>Resources</h3>
						<p>Maybe you were looking for a specific resource?</p>
						<?php $loop = new WP_Query(array('post_type' => 'resources2',
							'orderby' => 'post_id','order' => 'ASC' )); ?>

						<div class="resource-row clearfix">

							<?php while($loop->have_posts()) : $loop->the_post()?>

								<?php
								$resource_image = get_field('resource_image');
								$resource_url   = get_field('resource_url');
								$button_text    = get_field('button_text');
								?>

								<div class="resource">
									<img class="resources-img img-responsive"  src="<?php echo $resource_image['url']?>" about="<?php echo $resource_image['alt']?>">

									<h3><a href="<?php echo $resource_url?>"><?php the_title()?></a></h3>
									<p><?php the_excerpt()?></p>

									<!--Button to add-->
									<?php if(!empty($button_text)):?>

									<a href="<?php echo $resource_url?>" class="btn btn-success">
										<?php echo $button_text?>
									</a>

									<?php endif; ?><!--End button-->
								</div>

							<?php endwhile; wp_reset_query()?>

						</div>

					</div>
				</div>
			</main>
			<!--=====Sidebar========-->
			<aside class="col-sm-4">
				<?php get_sidebar()?>

			</aside>
			<h4><a href="<?php echo esc_url(home_url())?>">Back to Home No Worries!</a></h4>




		</div><!--End primary-->

	</div><!--End container-->




<?php get_footer();?>
