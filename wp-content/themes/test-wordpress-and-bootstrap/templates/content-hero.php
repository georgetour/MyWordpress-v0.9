<?php

//Custom fields
$at_your_needs = get_post_meta(28, 'at_your_needs',true); //Three arguments id of the page, value of the string, true single or faALSE array of custom fields
$how_it_works = get_post_meta(28, 'how_it_works',true);
$create_site = get_post_meta(28, 'create_site',true);
$enroll_url = get_post_meta(28, 'enroll_url',true);
$button_text =get_post_meta(28, 'button_text',true);


?>

<!-- HERO -------------------------->
<section id="hero" class="section-padding" data-type="background" data-speed="2" style="background-position: 50% 0px;">
    <article >
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-5 "><!--Left column-->
                    <img class=" img-responsive img-center" src="<?php bloginfo('stylesheet_directory')?>/assets/img/big-logo-mywordpress.png" alt="My Wordpress big logo">
                </div><!--End Left column----->

                <!--Right column-->
                <div class="col-sm-7">
                    <!--This one pulls from general settings in dashboard Site Title -->
                    <h1 ><?php bloginfo('name');?></h1>
                    <!--This one pulls from general settings in dashboard Tag Line -->
                    <h2><?php bloginfo('description')?>
                    </h2>
                    <div class="price-timeline  ">
                        <div class=" price ">
                            <h4>Exactly at your <br>needs.
                                <div class="price-sphere"><?php echo $at_your_needs?></div></h4>
                        </div>

                        <div class="price">
                            <h4>Customer Support!
                                <div class="price-sphere"><?php echo $how_it_works?></div>
                            </h4>
                        </div>
                        <div class="price">
                            <h4>Let me create your Wordpress site.
                                <div class="price-sphere"><?php echo $create_site?></div>
                            </h4>
                        </div>
                        <p style="margin-top: 70px"><a class="btn btn-lg btn-danger " data-toggle="modal" data-target="#checkMyWorkModal" href="<?php echo $enroll_url?>"><?php echo $button_text?></a></p>


                    </div><!--Right column end-->

                </div>
            </div>
        </div>
    </article>
</section><!--End hero---------------->
