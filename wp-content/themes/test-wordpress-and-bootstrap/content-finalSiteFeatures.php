<?php

//Final site features
$final_site_features_title = get_field('final_site_features_title');
$final_site_features_body  = get_field('final_site_features_body');

?>

<!--Final Site FEATURES  ---------------------->
<section id="final-features" class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2><?php echo $final_site_features_title?></h2>
            <p><?php echo $final_site_features_body?></p>
        </div>
        <div class="row">
            <?php $loop = new WP_Query(array('post_type' => 'final_site_feature',
                'orderby' => 'post_id', 'order' => 'ASC'));?>

            <?php while ($loop->have_posts()): $loop->the_post(); ?>

                <div class="col-sm-4 features-images">
                    <div class="features-img-boxes">
                        <?php if(has_post_thumbnail()){the_post_thumbnail('thumbnail',array('class'=> 'final-site-features-img img-responsive img-center'));} ?>
                    </div>

                    <h4 class="features"><?php the_title();?></h4>
                    <p><?php the_content();?></p>
                </div>
                
            <?php endwhile; wp_reset_query()?>

        </div>
    </div>
</section><!--End Final Site FEATURES  ---------------------->
