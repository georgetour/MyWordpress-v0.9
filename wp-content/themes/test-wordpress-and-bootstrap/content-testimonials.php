<?php

//Testimonials section
$testimonials_title = get_field('testimonials_title');

?>

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
