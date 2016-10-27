<?php

//Wordpress features section
$features_section_image  = get_field('features_section_image');
$features_section_title  = get_field('features_section_title');
$features_section_body   = get_field('features_section_body');

?>


<!--Wordpress FEATURES  --------------->
<section id="wordpress-feautures" class="section-padding">
    <div class="container ">
        <div class="section-header">
            <!--If user uploaded an image-->
            <?php if(!empty($features_section_image)) :  ?>
                <img class=" img-responsive img-center" src="<?php echo $features_section_image['url'];?>"
                     alt="<?php echo $features_section_image['alt']; ?>">
            <?php endif;?>

            <h2><?php echo $features_section_title?></h2>

            <?php if(!empty($features_section_body)):?>
                <p class="lead"><?php echo $features_section_body?></p>
            <?php endif;?>

        </div>
        <div class="row">

            <?php $loop = new WP_Query(array('post_type' => 'wordpress_features',
                'orderby' => 'post_id', 'order' => 'ASC'));?>

            <div class="col-lg-8 col-lg-offset-2">
                <div class="col-sm-1"></div>

                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <div class="col-sm-2 ">

                        <i class="<?php the_field('wordpress_feature_icon');?>"></i>
                        <h4 class="features"><?php the_title() ;?></h4>
                    </div>
                <?php endwhile;?>
                <div class="col-sm-1"></div>

            </div>
        </div>
    </div>
</section><!--End Wordpress FEATURES  --------------->

