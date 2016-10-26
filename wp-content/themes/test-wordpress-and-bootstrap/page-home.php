<?php
/**
 * Template Name: Home Page
 *
 */

$blog = get_stylesheet_directory_uri();

//Custom fields
$wordpress_password = get_post_meta(28, 'wordpress_password',true); //Three arguments id of the page, value of the string, true single or faALSE array of custom fields
$how_it_works = get_post_meta(28, 'how_it_works',true);
$create_site = get_post_meta(28, 'create_site',true);
$enroll_url = get_post_meta(28, 'enroll_url',true);
$button_text =get_post_meta(28, 'button_text',true);
$quote_line =get_post_meta(28, 'quote_line',true);
$quote_button =get_post_meta(28, 'quote_button',true);

//======Advanced Custom Fields=====

//What is Wordpress section
$wordpress_image_logo    = get_field('wordpress_image_logo');
$what_is_wordpress_title = get_field('what_is_wordpress_title');
$what_is_wordpress_desc  = get_field('what_is_wordpress_description');
$left_title              = get_field('no_coding_title');
$left_description        = get_field('no_coding_description');
$right_title             = get_field('enroll_to_test_it_now_title');
$right_description       = get_field('enroll_to_test_it_description');

//Who benefits section
$who_benefits_title      = get_field('who_benefits_title');
$who_benefits_body       = get_field('who_benefits_body');

//Wordpress features section
$features_section_image  = get_field('features_section_image');
$features_section_title  = get_field('features_section_title');
$features_section_body   = get_field('features_section_body');

//Final site features
$final_site_features_title = get_field('final_site_features_title');
$final_site_features_body  = get_field('final_site_features_body');

//Youtube video section
$youtube_video_title     = get_field('youtube_video_title');
$youtube_video_link     = get_field('youtube_video_link');

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


get_header(); ?>

    <!-- HERO -------------------------->
    <section id="hero" class="section-padding" data-type="background" data-speed="2" style="background-position: 50% 0px;">
        <article >
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5 "><!--Left column-->
                        <img class=" img-responsive img-center" src="<?php bloginfo('stylesheet_directory')?>/assets/img/test-wordpress-logo.png" alt="Test Wordpress">
                    </div><!--End Left column----->

                    <!--Right column-->
                    <div class="col-sm-7">
                        <!--This one pulls from general settings in dashboard Site Title -->
                        <h1 ><?php bloginfo('name');?></h1>
                        <h2 >You will see how Wordpress works!</h2>
                        <!--This one pulls from general settings in dashboard Tag Line -->
                        <p><?php bloginfo('description')?>
                        </p>
                        <div class="price-timeline  ">
                            <div class=" price ">
                                <h4>Get your Wordpress <br>password.
                                    <div class="price-sphere"><?php echo $wordpress_password?></div></h4>
                            </div>

                            <div class="price">
                                <h4>Test how Wordpress works.
                                    <div class="price-sphere"><?php echo $how_it_works?></div>
                                </h4>
                            </div>
                            <div class="price">
                                <h4>Let me create your Wordpress site.
                                    <div class="price-sphere"><?php echo $create_site?></div>
                                </h4>
                            </div>
                            <p style="margin-top: 70px"><a class="btn btn-lg btn-danger" href="<?php echo $enroll_url?>" role="button"><?php echo $button_text?></a></p>
                        </div><!--Right column end-->

                    </div>
                </div>
            </div>
        </article>
    </section><!--End hero---------------->

    <!-- Quote line SECTION ------------------------->
    <section id="quoteLine" class="section-padding">
        <div class="container ">
            <div class="row">
                <div  class="col-lg-7">
                    <div  class="lead align-center"><strong><?php echo $quote_line?></strong>
                    </div>

                </div>
                <div class="col-lg-5">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal" role="button"><?php echo $quote_button?></button>
                </div>
            </div>
        </div><!--End container----------------->
    </section><!-- End Quote line section------------->

    <!-- What is wordpress ---------------------------->
    <section id="whatIsWordpress" class="section-padding">
        <article>
            <div class="container">
                <div class="section-header">

                    <!--If user uploaded an image-->
                    <?php if(!empty($wordpress_image_logo)) :  ?>
                        <img class=" img-responsive img-center" src="<?php echo $wordpress_image_logo['url'];?>"
                             alt="<?php echo $wordpress_image_logo['alt']; ?>">
                    <?php endif;?>


                    <h2><?php echo $what_is_wordpress_title?></h2>
                    <p class="lead"><?php echo $what_is_wordpress_desc?></p>
                </div>
                <div class="row">
                    <!--Left column-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
                        <h3><?php echo $left_title?></h3>
                        <p><?php echo $left_description ?></p>
                    </div>
                    <!--Right Column-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <h3><?php echo $right_title?></h3>
                        <p><?php echo $right_description?></p>
                    </div>
                </div>
            </div>
        </article>
    </section><!--End what is wordpress---------------->

    <!--WHO BENEFITS ----------------------------------->
    <section id="whoBenefits" class="align-center section-padding">
        <div class="container">
            <div class="row">
                <div class="section-header col-lg-8 col-lg-offset-2"><!--Using bootstrap offset technique--->
                    <h2><?php echo $who_benefits_title ?></h2>
                    <p><?php echo $who_benefits_body ?></p>
                </div>
            </div>
        </div><!--whoBenefits container end--------->
    </section><!--WHO BENEFITS end -------------------->


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
                    <?php endwhile;?>


            </div>
        </div>
    </section><!--End Final Site FEATURES  ---------------------->

    <!-- YOUTUBE VIDEO ------------------------>
    <section id="youtube-video" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 align-center">
                    <h2><?php echo $youtube_video_title ?></h2>
                    <?php echo $youtube_video_link ?>
                </div>
            </div>
        </div>
    </section><!--End youtube video------------->


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
                                    <a class="badge social linkedin" href="https://gr.linkedin.com/in/georgetourtsinakis" target="_blank">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a class="badge social github" href="https://github.com/georgetour" target="_blank">
                                        <i class="<?php echo 'fa fa-github'?>" aria-hidden="true"></i>
                                    </a>

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
                    <h2 class="align-center">What People Are Saying About George?</h2>
                    <!----TESTIMONIALS------>
                    <div class="row testimonials">
                        <div class="col-sm-4 ">
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/ernest.png">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>George I would really like to thank you for the
                                excellent collaboration we had.
                                <cite> - Stellatos Evangelos, Professor in National University of Athens. </cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonials">
                        <div class="col-sm-4 ">
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/aj.png">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>Thats magic mate thanks! Thanks for your help.
                                <cite> - Christopher Daly, Web Developer.</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimonials">
                        <div class="col-sm-4 ">
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/ben.png">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>Thank you George for building and maintaining
                                our site for so many years.
                                <cite> - Kostas Michalis, Co-owner of farmaparnassou.gr.</cite>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End TESTIMONIALS----------------->


<?php get_footer()?>