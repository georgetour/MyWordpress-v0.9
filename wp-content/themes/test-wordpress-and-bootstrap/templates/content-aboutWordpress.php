<?php
//What is Wordpress section
$wordpress_image_logo    = get_field('wordpress_image_logo');
$what_is_wordpress_title = get_field('what_is_wordpress_title');
$what_is_wordpress_desc  = get_field('what_is_wordpress_description');
$left_title              = get_field('no_coding_title');
$left_description        = get_field('no_coding_description');
$right_title             = get_field('enroll_to_test_it_now_title');
$right_description       = get_field('enroll_to_test_it_description');


?>


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