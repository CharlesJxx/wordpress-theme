<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php if ( is_home() ) {
		bloginfo('name'); echo " - "; bloginfo('description');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	} ?></title>

    <!-- Favicon -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Main Header start -->
    <header class="main-herader">
        <!-- Header topbar start -->
        <div class="header-topbar">
            <div class="topbar-arrow"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 center767">
                        <div class="herader-topbar-col tobar-leftside">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="after-bdr">(+86) 021 31751393</span>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>sales@crushermill.org</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 center767">
                        <div class="herader-topbar-col tobar-rightside">
                            <ul class="topbar-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header navbar start -->
        <div class="header-navbar fixed-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index-one.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn">

                            <?php wp_nav_menu(array('container' => 'ul','menu_class'=>'nav navbar-nav navbar-right')); ?>
                            
                            <!-- <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown active">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-one.html">Home one</a></li>
                                            <li><a href="index-two.html">Home two</a></li>
                                            <li><a href="index-three.html">Home three</a></li>
                                            <li><a href="index-four.html">Home four</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio-grid-3.html">Portfolio Grid 3</a></li>
                                            <li><a href="portfolio-grid-4.html">Portfolio Grid 4</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-gird-3.html">Blog gird 3</a></li>
                                            <li><a href="blog-gird-4.html">Blog gird 4</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="services.html">Our Services</a></li>
                                            <li><a href="pricing.html">Our Pricing</a></li>
                                            <li><a href="signin-signup.html">Sign in / Sign Up</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mega menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu mega-menu">
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 4</a></li>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 4</a></li>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 4</a></li>
                                            <li><a href="#">Link 1</a></li>
                                            <li><a href="#">Link 2</a></li>
                                            <li><a href="#">Link 3</a></li>
                                            <li><a href="#">Link 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
