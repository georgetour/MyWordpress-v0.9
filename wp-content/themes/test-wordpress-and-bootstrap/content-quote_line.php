<?php
//Quote line

$quote_line =get_post_meta(28, 'quote_line',true);
$quote_button =get_post_meta(28, 'quote_button',true);


?>

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
