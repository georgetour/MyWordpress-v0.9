<?php
/**
 * Template Name: Full-width
 *
 */

    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

    get_header();?>

<?php if(has_post_thumbnail()) {?>
<section class="top-image feature-image-default"style="background: :url('<?php echo $thumbnail_url?>')no-repeat;background-size:cover; " data-type="background" data-speed="2">
    <h1 class="top-header"><?php the_title()?></h1>
</section><!--End top image--->

<?php }else {//Fallback image?>
    <section class="top-image feature-image-default" data-type="background" data-speed="2">
        <h1 class="top-header"><?php the_title()?></h1>
    </section><!--End top image--->
<?php }?>

<!-- MAIN CONTENT
================================================== -->
    <div class="container">
	    <div class="row" id="primary">

		    <div id="content" class="col-sm-12">

			    <section class="main-content">

                    <?php while (have_posts()):the_post();?>
                        <?php the_content();?>

                    <?php endwhile; //End loop?>
			    </section><!--Main content-->

		    </div><!-- content -->

	    </div><!-- primary -->
    </div><!-- container -->









<?php

get_footer();

?>
