<?php

//Who benefits section
$who_benefits_title      = get_field('who_benefits_title');
$who_benefits_body       = get_field('who_benefits_body');

?>

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