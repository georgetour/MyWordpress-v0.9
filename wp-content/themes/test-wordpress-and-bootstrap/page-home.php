<?php
/**
 * Template Name: Home Page
 *
 */





//Developer Section
$developer_title  = get_field('developer_title');
$developer_name  = get_field('developer_name');
$developer_image  = get_field('developer_image');
$bio_excerpt  = get_field('bio_excerpt');
$bio_full  = get_field('bio_full');
$numbers_title  = get_field('numbers_title');
$left_number  = get_field('left_number');
$left_number_text  = get_field('left_number_text');
$middle_number_  = get_field('middle_number_');
$middle_number_text  = get_field('middle_number_text');
$right_number  = get_field('right_number');
$right_number_text  = get_field('right_number_text');

//Testimonials section
$testimonials_title = get_field('testimonials_title');


get_header(); ?>



<?php get_template_part('content','hero');?>



<?php get_template_part('content','quote_line');?>



<?php get_template_part('content','aboutWordpress');?>



<?php get_template_part('content','benefits');?>



<?php get_template_part('content','wordpressFeatures');?>



<?php get_template_part('content','finalSiteFeatures');?>

<?php get_template_part('content','youtubeVideo');?>







    <!-- THE Developer  ---------------------------->
    <section id="developer" class="section-padding">
        <div class="container ">
            <div class="row"><!--Developer row---------------------------------->
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-8 "><!--Left column--->
                            <div class="row">
                                <div class="col-md-9 col-xs-9 ">
                                    <h2 style="margin-bottom: 0" class="displayInlineBlock developer-name"><?php echo $developer_title?> </h2>
                                    <div class=""><small><?php echo $developer_name?></small></div>
                                </div>
                                <div class="col-md-3 col-xs-3 ">
                                    <?php $loop = new WP_Query(array('post_type'=>'social_media_icons',
                                    'orderby'=>'post_id','order'=>'ASC'));?>


                                    <?php while ($loop->have_posts()): $loop->the_post();?>
                                    <a class="<?php the_field('social_icons_style')?>" href="<?php the_field('social_link') ?>" target="_blank">
                                        <i class="<?php the_field('social_icons') ?>"></i>
                                    </a>

                                    <?php endwhile;?>

                                </div>
                            </div>
                        </div>

                        <div class=" col-md-4  developer-image"><!--Right column--->
                            <img style="width: 50%" class="img-responsive img-center" src="<?php echo $developer_image['url']?>" alt="Developer George Tourtsinakis">
                        </div>
                    </div>
                    <div class="row">
                        <div  class="col-md-8 ">
                            <p><strong><?php echo $bio_excerpt?></strong></p>
                            <?php if(!empty($bio_full)):?>
                            <p><?php echo $bio_full?></p>
                            <?php endif;?>
                        </div>

                    </div>
                    <hr>
                    <div class="row "><!--Numbers row------------------->

                        <h3 class="align-center"><?php echo $numbers_title?></h3>
                        <div class="col-xs-4 features-img-boxes">
                            <div class="num ">
                                <div class="num-content ">
                                    <?php echo $left_number?><span> <?php echo $left_number_text?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 features-img-boxes">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $middle_number_?><span> <?php echo $middle_number_text?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 features-img-boxes">
                            <div class="num">
                                <div class="num-content">
                                    <?php echo $right_number?><span> <?php echo $right_number_text?></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!--End developer row------------------------------------->
        </div><!--End container-------------------->
    </section><!--End developer section------------->

    <!-- TESTIMONIALS-------------------------->
    <section id="kudos" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 ">
                    <h2 class="align-center"><?php echo $testimonials_title?></h2>

                    <!--Starts the oops for testimonial post-->
                    <?php $loop = new WP_Query(array('post_type' => 'testimonial',
                        'orderby' => 'post_id', 'order' => 'ASC'));?>
                    <?php while ($loop->have_posts()): $loop->the_post(); ?>
                        <!----TESTIMONIALS------>
                        <div class="row testimonials">
                            <div class="col-sm-4 ">

                                <?php if(has_post_thumbnail()){
                                    the_post_thumbnail(array(200,200));//If someone puts a different size image it will become 200x200
                                } ?>
                            </div>
                            <div class="col-sm-8">
                                <blockquote><?php the_content()?>
                                    <cite>&ndash;<?php the_title()?> </cite>
                                </blockquote>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </section><!-- End TESTIMONIALS----------------->


<?php get_footer()?>