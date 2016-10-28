<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>


<!--Top template with the big logo -->
<?php get_template_part('templates/content','hero');?>

<!--Quote line template -->
<?php get_template_part('templates/content','quote_line');?>

<!--Quote line template -->
<?php get_template_part('templates/content','aboutWordpress');?>

<!--Benefits template -->
<?php get_template_part('templates/content','benefits');?>

<!--Wordpress features template -->
<?php get_template_part('templates/content','wordpressFeatures');?>

<!--Final Site features template -->
<?php get_template_part('templates/content','finalSiteFeatures');?>

<!--Youtube Video template -->
<?php get_template_part('templates/content','youtubeVideo');?>

<!--Developer template -->
<?php get_template_part('templates/content','developer');?>

<!--Testimonials template -->
<?php get_template_part('templates/content','testimonials');?>




<?php get_footer()?>