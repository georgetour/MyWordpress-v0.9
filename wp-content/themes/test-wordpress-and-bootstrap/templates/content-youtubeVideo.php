<?php

//Youtube video section
$youtube_video_title     = get_field('youtube_video_title');
$youtube_video_link     = get_field('youtube_video_link');


?>
<div class="row">
    
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


</div>
