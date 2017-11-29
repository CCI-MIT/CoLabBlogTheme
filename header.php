<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo('name'); ?></title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <link href="https://cdn.climatecolab.org/images/favicon.ico" rel="Shortcut Icon">

    <?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <nav class="center">
            <a href="https://www.climatecolab.org">
                <img src="https://cdn.climatecolab.org/images/logo-climate-colab.png" />
            </a>
            <ul class="menu_left">
                <li>
                    <a class="blog-nav-item" href="https://www.climatecolab.org/page/about">About</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="https://www.climatecolab.org/contests">Contests</a>
                </li>
                <li>
                    <a class="blog-nav-item isCurrent" href="https://www.climatecolab.org/members">Community</a>
                </li>
            </ul>
            <ul class="menu_right">
                <li class="register">
                    <a href="https://www.climatecolab.org/register?redirect=%2F">Register</a>
                </li>
                <li class="login">
                    <a href="https://www.climatecolab.org">Login</a>
                </li>
                <li class="help">
                    <a href="https://www.climatecolab.org/wiki/Help">Help</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <div class="proposal-head">
        <div class="center">
            <div class="headline">
                <h1>Community News</h1>
            </div>        
            <ul class="tabbar clearfix">
                <li class="tab"><a href="https://www.climatecolab.org/members">Members</a></li>
                <li class="tab"><a href="https://www.climatecolab.org/discussion">Discussion</a></li>
                <li class="tab active"><a href="https://news.climatecolab.org">News</a></li>
            </ul>
        </div>
    </div>
    <div class="center">