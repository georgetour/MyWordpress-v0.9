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
                    <img class=" img-responsive img-center" src="<?php bloginfo('stylesheet_directory')?>/assets/img/Wordpress-logo.png" alt="Wordpress logo">
                    <h2>What is Wordpress?</h2>

                    <p class="lead">Wordpress is a leading Content Management System
                        that is used by many companies, sites, blogs.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
                        <h3>No coding at all!</h3>
                        <p>With Wordpress anyone without coding or programming at all
                            can make changes to his site, add content,  themes, updates and
                            in other words, anything an administrator could do.
                        </p>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <h3>Enroll above to TEST IT NOW!</h3>
                        <p>If you can't imagine what I mean you should test it.

                        </p>
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
                    <h2>Who benefits from Wordpress?</h2>
                    <h3>Companies</h3>
                    <p>Any company can use it if they want to update their sites content simple and fast.
                        From Fortune, BBC to small local shops.
                    </p>
                    <h3>Personal/portfolio sites</h3>
                    <p class="align-center">A site that doesn't get updates
                        and new content becomes boring and less visited over time.
                        Even for your personal, portfolio site you need to update it so you can attract new visitors and employers.
                    </p>
                    <h3>Bloggers</h3>
                    <p>Wordpress started as a blog platform so people could make blogs without coding.
                        It's so powerful though that's used by any kind of sites nowdays. </p>
                    <h3>No extra money for you to spend</h3>
                    <p>Since you will be able to update your site, you won't need to pay developers for each change.</p>
                </div>
            </div>
        </div><!--whoBenefits container end--------->
    </section><!--WHO BENEFITS end -------------------->


    <!--Wordpress FEATURES  --------------->
    <section id="wordpress-feautures" class="section-padding">
        <div class="container ">
            <div class="section-header">
                <h2>Wordpress features</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-sm-2 col-sm-offset-1 ">
                        <i class="features-sprites ci-computer"></i>
                        <h4 class="features">Easy update  your site.</h4>
                    </div>
                    <div class="col-sm-2 ">
                        <i class="features-sprites ci-watch"></i>
                        <h4 class="features">Pre-made themes to choose if you don't want a custom one.</h4>
                    </div>
                    <div class="col-sm-2 ">
                        <i class="features-sprites ci-facebook"></i>
                        <h4 class="features">Many plugins that will do stuff for you.</h4>
                    </div>
                    <div class="col-sm-2 ">
                        <i class="features-sprites ci-documentation"></i>
                        <h4 class="features">Active community and documentation.</h4>
                    </div>
                    <div class="col-sm-2 ">
                        <i class="features-sprites ci-ecommerce"></i>
                        <h4 class="features">E-commerce solutions.</h4>
                    </div>

                </div>
            </div>
        </div>
    </section><!--End Wordpress FEATURES  --------------->


    <!--Final Site FEATURES  ---------------------->
    <section id="final-features" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Final site features</h2>
                <p>At the end you will have a very beautiful and powerful site.</p>
            </div>
            <div class="row">
                <div class="col-sm-4 ">
                    <div class="features-img-boxes">
                        <img class="img-responsive img-center" style="width: 150px" src="<?php bloginfo('stylesheet_directory')?>/assets/img/Responsive-Web-Design-compressor.png">
                    </div>
                    <h4 class="features">A professional and smart website.</h4>
                    <p>It will fulfill all your needs and your clients will enjoy it
                        in all devices.
                    </p>
                </div>
                <div class="col-sm-4 ">
                    <div class="features-img-boxes">
                        <img class="img-responsive img-center"style="height: 110px" src="<?php bloginfo('stylesheet_directory')?>/assets/img/premium-quality.png">
                    </div>
                    <h4 class="features">Premium quality.</h4>
                    <p>All my projects have quality and clean code so users
                        receive maximum experience.
                    </p>
                </div>
                <div class="col-sm-4 ">
                    <div class="features-img-wordpress">
                        <img class="img-responsive img-center" style="width: 300px;" src="<?php bloginfo('stylesheet_directory')?>/assets/img/Wordpress-logo.png">
                    </div>
                    <h4 class="features">Easy-to-use with Wordpress</h4>
                    <p>As you saw you will have control of your site since your site will be
                        dynamically updated by you.
                    </p>
                </div>
            </div>
        </div>
    </section><!--End Final Site FEATURES  ---------------------->

    <!-- YOUTUBE VIDEO ------------------------>
    <section id="youtube-video" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 align-center">
                    <h2>Video that explains what is Wordpress by WebSmartTV</h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/VdvEdMMtNMY" frameborder="0" allowfullscreen></iframe>
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
                                    <h2 style="margin-bottom: 0" class="displayInlineBlock developer-name">Your developer </h2>
                                    <h2 class="developer-name"><small>George Tourtsinakis</small></h2>
                                </div>
                                <div class="col-md-3 col-xs-3 ">
                                    <a class="badge social linkedin" href="https://gr.linkedin.com/in/georgetourtsinakis" target="_blank">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a class="badge social github" href="https://github.com/georgetour" target="_blank">
                                        <i class="fa fa-github" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4  developer-image"><!--Right column--->
                            <img style="width: 50%" class="img-responsive img-center" src="<?php bloginfo('stylesheet_directory')?>/assets/img/myphoto.jpg" alt="Developer George Tourtsinakis">
                        </div>
                    </div>
                    <div class="row">
                        <div  class="col-md-8 skilled">
                            <p>A highly skilled professional, George Tourtsinakis is a passionate web designer and developer.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row "><!--Numbers row------------------->
                        <h3 class="align-center">The numbers don't lie</h3>
                        <div class="col-xs-4 ">
                            <div class="num ">
                                <div class="num-content ">
                                    3+<span> years experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 ">
                            <div class="num">
                                <div class="num-content">
                                    20+<span> High quality projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 ">
                            <div class="num">
                                <div class="num-content">
                                    150000+<span> Lines of code</span>
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