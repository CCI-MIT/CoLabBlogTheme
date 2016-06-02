<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>
<body>
    <header>
        <nav class="center">
            <ul class="menu_left">
                <a href="http://climatecolab.org"><img src="<?php bloginfo('template_directory');?>/images/logo-climate-colab.png" /></a>
                <li>
                    <a class="blog-nav-item" href="http://climatecolab.org/web/guest/about">About</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="http://climatecolab.org/contests">Contests</a>
                </li>
                <li>
                    <a class="blog-nav-item isCurrent" href="http://climatecolab.org/web/guest/members">Community</a>
                </li>
            </ul>
            <ul class="menu_right">
                <li class="register">
                    <a href="http://climatecolab.org/web/guest/loginregister?redirect=%2Fweb%2Fguest%2Fcommunity">Register</a>
                </li>
                <li class="login">
                    <a href="http://climatecolab.org">Login</a>
                </li>
                <li class="help">
                    <a href="http://climatecolab.org/web/guest/resources/-/wiki/Main/Help">Help</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <div class="proposal-head">
        <div class="center">
            <div class="headline">
                <h1>Community Discussions</h1>
            </div>        
            <ul class="tabbar clearfix">
                <li class="tab"><a href="http://climatecolab.org/web/guest/members">Members</a></li>
                <li class="tab"><a href="http://climatecolab.org/web/guest/discussion">Discussion</a></li>
                <li class="tab active"><a href="http://blog.climatecolab.org">News</a></li>
            </ul>
        </div>
    </div>
    <div class="center">