<?php

//Youtube video section
$youtube_video_title     = get_field('youtube_video_title');
$youtube_video_link     = get_field('youtube_video_link');


?>
<div class="row">
<h2><?php echo $youtube_video_title ?></h2>
<?php echo $youtube_video_link ?>

</div>
