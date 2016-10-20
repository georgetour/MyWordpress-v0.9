<!-- HEADER------------------------->
<header class="site-header" role="banner">
    <!--NAVBAR------->
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           
            <div class="container">
               
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                        <!--with sr-only class will show only to screen readers-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img class="img-logo img-responsive" src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo-top.png"></a>

                </div>

                <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied
                to "container".In other words it overwrites the "container" class-->
                <?php wp_nav_menu(array(
                    'theme_location'    =>'primary',
                    'container'         => 'nav',
                    'container_class'   => 'navbar-collapse collapse',
                    'menu_class'        => 'nav navbar-nav navbar-right'
                    )
                )?>

            </div><!--End container---------->
            
        </div>
        
    </div><!--End navbar-->
</header>