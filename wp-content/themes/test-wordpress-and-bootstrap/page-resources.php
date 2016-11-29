<?php
/**
 * Template Name: Resources
 *
 */

get_header();

$top_header_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));




?>

<!--Top Image-------------->

<?php if(has_post_thumbnail()){ //check for top header image ?>
    <section class="top-image" style="background: url('<?php echo $top_header_url;?>')no-repeat; background-size: cover" data-type="background" data-speed="2">
        <h1 class="top-header"><?php the_title()?></h1>
    </section><!--End top image--->
<?php } else {?>

<section class="top-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="top-header"><?php the_title()?></h1>
</section><!--End top image--->

<?php }?>
<!--Main Container------------------->
<div class="container">
    <div class="row" id="primary">
        <div id="content" >
            <section class="main-content">

                <?php while(have_posts()) : the_post();?>

                    <?php the_content()?>

                <?php endwhile; ?><!--End while for description top-->

                <?php $loop = new WP_Query(array('post_type' => 'resources2',
                    'orderby' => 'post_id','order' => 'ASC' )); ?>

                <hr>

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
                        <p><?php the_content()?></p>

                        <!--Button to add-->
                        <?php if(!empty($button_text)):?>

                            <a href="<?php echo $resource_url?>" class="btn btn-success">
                                <?php echo $button_text?>
                            </a>

                        <?php endif; ?><!--End button-->


                    </div>



                    <?php endwhile; wp_reset_query()?>

                </div>

            </section><!--main-content--->
        </div>
    </div><!--End row-->
</div><!--End container --------->

<?php get_footer()?>

