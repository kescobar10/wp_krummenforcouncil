<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Typography -->
        <link href="https://fonts.googleapis.com/css?family=Arvo:400,700|Montserrat:100,200,400,600" rel="stylesheet">

        <!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

        <?php wp_head(); ?>
    </head>
<body>
<header>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110530593-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110530593-1');


    </script>

    <div id="header-left">
        <figure>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/headshot.jpg" alt="John Krummen" />
        </figure>
    </div>
    <div id="header-right">
        <div id="sm-top">
            <a href="http://wwww.facebook.com" target="_blank" class="fb"></a>
            <a href="http://www.twitter.com" target="_blank" class="tw"></a>
        </div>
        <figure>
            <h1>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" id="logo-1"/>
            </h1>
        </figure>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/headshot.jpg" id="mobile-headshot" alt="John Krummen" />
        <button class="animated bounceIn"><a href="http://www.paypal.com" target="_blank">Contribute</a></button>
    </div>
</header>

<nav class="nav-home-top">
    <?php html5blank_nav(); ?>
</nav>
<main>
