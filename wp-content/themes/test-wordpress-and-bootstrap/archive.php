<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Test_Wordpress_and_Bootstrap
 */

get_header(); ?>



		<?php
		if ( have_posts() ) : ?>
			<!--Top Image-------------->
			<section class="top-image feature-image-default-alt" data-type="background" data-speed="2">
				<h1 class="top-header page-title"><?php the_archive_title()?>
					<?php the_archive_description( '<small class="archive-description">', '</small>' );?>


				</h1>
			</section><!--End top image--->

			<div class="container"><!--Main container-->
				<div id="primary" class="row">
					<main id="content" class="col-sm-8">
				<?php

					/* Start the Loop */
					while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

					else :

					get_template_part( 'template-parts/content', 'none' );

					endif; ?>
					</main>
					<aside class="col-sm-4">
						<?php get_sidebar();?>
					</aside>
				</div><!--End primary row-->
			</div><!--End main container-->


<?php

get_footer();
