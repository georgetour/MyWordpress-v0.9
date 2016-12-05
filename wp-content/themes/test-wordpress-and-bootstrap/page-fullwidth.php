<?php
/**
 * Template Name: Full-width
 *
 */

    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

    get_header();?>

<?php
$social_icons_header = get_field('contact_social_label');
?>

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
	    <div   class="row" id="primary">
            <div class="col-sm-12">
                <p><?php echo $social_icons_header?></p>
                <?php $loop = new WP_Query(array('post_type'=>'social_media_icons',
                    'orderby'=>'post_id','order'=>'ASC'));?>
                <?php while ($loop->have_posts()): $loop->the_post();?>
                    <a class="<?php the_field('social_icons_style')?>" href="<?php the_field('social_link') ?>" target="_blank">
                        <i class="<?php the_field('social_icons') ?>"></i>
                    </a>

                <?php endwhile; wp_reset_query()?>

            </div>

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
