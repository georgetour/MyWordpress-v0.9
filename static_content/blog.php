<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Test Wordpress</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="assets/css/font-awesome/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Google Fonts
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>-->
</head>
<body class="blog">

<!-- HEADER------------------------->
<?php include 'header.php'?>
<!--End header------------------------->

<!--Top Image-------------->
<section class="top-image feature-image-default-alt" data-type="background" data-speed="2">
    <h1 class="top-header">Your first blog</h1>
</section><!--End top image--->

<!--Blog Content---------------------------->
<div class="container">
    <div id="primary" class="row">
        <main id="content" class="col-sm-8" role="main">
        <article class="post"><!--post-->
            <header>
                <h3><a href="post.php">Blog title here</a></h3>

                <div class="post-details">
                    <i class="fa fa-user"></i> George Tourtsinakis
                    <i class="fa fa-clock-o"></i>
                    <time> August 7, 2014</time>
                    <i class="fa fa-folder"></i>
                    <a href="">Check my site</a> 
                    <i class="fa fa-tags"></i>
                    Tagged <a href="">wordpress</a>, <a href="">another tag</a>, <a href="">yada yadaa</a>
                    <div class="post-comments-badge">
                        <a  href=""><i class="fa fa-comments"></i>168</a>
                    </div>
                </div><!-- post details----->
            </header><!--End header--->

            <div class="post-image">
                <img class="img-responsive" src="assets/img/hero-bg.jpg" alt="Hero image">
            </div><!--post image--->

            <div class="post-excerpt">
                <p>Lorem ipsum dolor sit amet, ne aliquam dolores mnesarchum sit,
                    errem accusamus vel cu, per ad nibh tota nulla.
                    Nisl facer instructior ut eum, his ad errem epicuri complectitur.
                    Id vide duis patrioque vel. Pri ne feugiat dissentias,
                    mea ut fastidii copiosae prodesset. Ea aeterno aliquam perfecto eam,
                    eum malis rationibus ea... <a href="post.php">continue reading &raquo;</a>
                </p>
            </div>
        </article><!--End post-->


            <article class="post"><!--post-->
                <header>
                    <h3><a href="post.php">Blog title here</a></h3>

                    <div class="post-details">
                        <i class="fa fa-user"></i> George Tourtsinakis
                        <i class="glyphicon glyphicon-time"></i>
                        <time> August 7, 2014</time>
                        <i class="fa fa-folder-open-alt"></i>
                        <a href="">Check my site</a> ,
                        <i class="fa fa-tags"></i>
                        Tagged <a href="">wordpress</a>, <a href="">another tag</a>, <a href="">yada yadaa</a>
                        <div class="post-comments-badge">
                            <a class="orange" href=""><i class="fa fa-comments">168</i></a>
                        </div>
                    </div><!-- post details----->
                </header><!--End header--->

                <div class="post-image">
                    <img class="img-responsive" src="assets/img/hero-bg.jpg" alt="Hero image">
                </div><!--post image--->

                <div class="post-excerpt">
                    <p>Lorem ipsum dolor sit amet, ne aliquam dolores mnesarchum sit,
                        errem accusamus vel cu, per ad nibh tota nulla.
                        Nisl facer instructior ut eum, his ad errem epicuri complectitur.
                        Id vide duis patrioque vel. Pri ne feugiat dissentias,
                        mea ut fastidii copiosae prodesset. Ea aeterno aliquam perfecto eam,
                        eum malis rationibus ea... <a href="post.php">continue reading &raquo;</a>
                    </p>
                </div>
            </article><!--End post-->

            <article class="post"><!--post-->
                <header>
                    <h3><a href="post.php">Blog title here</a></h3>

                    <div class="post-details">
                        <i class="fa fa-user"></i> GeorgeTourtsinakis
                        <i class="glyphicon glyphicon-time"></i>
                        <time> August 7, 2014</time>
                        <i class="fa fa-folder-open-alt"></i>
                        <a href="">Check my site</a> ,
                        <i class="fa fa-tags"></i>
                        Tagged <a href="">wordpress</a>, <a href="">another tag</a>, <a href="">yada yadaa</a>
                        <div class="post-comments-badge">
                            <a class="orange" href=""><i class="fa fa-comments">168</i></a>
                        </div>
                    </div><!-- post details----->
                </header><!--End header--->

                <div class="post-image">
                    <img class="img-responsive" src="assets/img/hero-bg.jpg" alt="Hero image">
                </div><!--post image--->

                <div class="post-excerpt">
                    <p>Lorem ipsum dolor sit amet, ne aliquam dolores mnesarchum sit,
                        errem accusamus vel cu, per ad nibh tota nulla.
                        Nisl facer instructior ut eum, his ad errem epicuri complectitur.
                        Id vide duis patrioque vel. Pri ne feugiat dissentias,
                        mea ut fastidii copiosae prodesset. Ea aeterno aliquam perfecto eam,
                        eum malis rationibus ea... <a href="post.php">continue reading &raquo;</a>
                    </p>
                </div>
            </article><!--End post-->
        </main><!--End main------>

        <!--SIDEBAR-------------->
        <aside class="col-sm-4">
            <div class="widget">
                <h4>Let's create your site!</h4>
                <p>It will be managed by YOU!</p>
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                Start!
                </button>
            </div><!--Widget---->

            <div class="widget">
                <form role="form" class="search-form">
                    <label for="sidebar-search" class="sr-only"></label>
                    <input id="sidebar-search" type="text" placeholder="Search the blog...">
                </form>
            </div><!--Widget---->

            <div class="widget">
                <h4>About Test Wordpress Live</h4>
                <p>Lorem ipsum dolor sit amet, ne aliquam dolores mnesarchum sit,
                    errem accusamus vel cu, per ad nibh tota nulla.
                    Nisl facer instructior ut eum, his ad errem epicuri complectitur.
                    Id vide duis patrioque vel. Pri ne feugiat dissentias,
                    mea ut fastidii copiosae prodesset. Ea aeterno aliquam perfecto eam,
                    eum malis rationibus ea.</p>


            </div><!--Widget---->

            <div class="widget">
                <h4>Recent Posts</h4>
                <ul>
                    <li><a href="#">Blog post #1</a></li>
                    <li><a href="#">Blog post #2</a></li>
                    <li><a href="#">Blog post #3</a></li>
                    <li><a href="#">Blog post #4</a></li>
                    <li><a href="#">Blog post #5</a></li>
                </ul>
            </div>

            <div class="widget">
                <h4>Categories</h4>
                <ul>
                    <li><a href="#">Category #1</a></li>
                    <li><a href="#">Category #2</a></li>
                    <li><a href="#">Category #3</a></li>
                    <li><a href="#">Category #4</a></li>
                    <li><a href="#">Category #5</a></li>
                </ul>
            </div>
        </aside>


    </div><!--End row------------>
</div><!--End container---------->


<!-- FOOTER -------------------------->
<footer>
    <div  class="container">
        <div class="row">
        <div class=" col-sm-3 footer-logo">
            <p><a href="/"><img  class="img-logo img-responsive" src="assets/img/logo-top.png" alt="Test Wordpress logo"></a></p>
        </div>
        <div  class="col-sm-9">
            <nav>
                <ul  class="list-unstyled list-inline pull-right">
                    <li>Created by George Tourtsinakis</li>
                    <li><a id="backToTop" href="#">Back to TOP</a></li>
                </ul>
            </nav>
        </div>
        </div>
    </div>
</footer><!--End footer----------------->

<!-- MODAL ----------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <!--For screens readers only--->
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-envelope">Get quote NOW!</i>
                </h4>
            </div><!--modal-header-->

            <div class="modal-body">
                <p>Simply enter your email and idea for your site to get quote <em>for free!</em>.</p>
                <form class=" " role="form">
                    <div class="form-group">
                        <label class="sr-only" for="name">Your name</label>
                        <input type="text" class="form-control" placeholder="Your name">
                    </div><!--form group--->
                    <div class="form-group">
                        <label class="sr-only" for="email">Your email</label>
                        <input type="text" class="form-control" placeholder="Your email">
                    </div><!--form group--->
                    <div class="form-group">
                        <label class="sr-only" for="getIdea">Your idea</label>
                        <textarea type="text" class="form-control" placeholder="Your idea" rows="6" ></textarea>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-danger" value="Get quote!">
                    </div>
                </form>

                <hr>

                <p><small>By sending your info you will be able to receive a quote for your future site.</small></p>

            </div><!--modal-body--->
        </div><!--Modal content---->
    </div><!--modal dialog-------->
</div><!--End Modal--------------->


<!--BOOTSTRAP CORE JAVASCRIPT and our javascript-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>