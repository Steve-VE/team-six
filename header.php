<!DOCTYPE html>
<html <?= language_attributes(); ?> >
<head>
    <meta charset="<?= bloginfo("charset");?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML meta tags are a cornerstone of coding. But which are the most essential? We give you a rundown of all the meta tags you need to know."/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="resource-type" content="document" />
    <meta http-equiv="content-language" content="en-us" />
    <meta name="author" content="Foodog Team-Six" />
    <meta name="contact" content="info@foodog.com" />
    <meta name="copyright" content="Copyright (c)2018 
    Team-six. All Rights Reserved." />
    <meta name="description" content="Foodog - Changing the way we feed our pet. dog lifestyle, wellness, community" />
    <meta name="keywords" content="dog, feeding, practices, tips, food, wellness, lifestyle, community dogs" />

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <title><?= bloginfo("title"); ?></title>

    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>"  type="text/css" media="screen">
<link rel="stylesheet" href="style-header.css"  type="text/css" media="screen">

    <!-- TEAM SIX - Loading Scripts (voir teamSixScripts() dans functions.php -->
    <?php add_action('wp_enqueue_scripts', 'teamSixScripts'); ?>
    <!--TEAM SIX - Font Awesome integration script -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-social">
        <div class="logo-image">
        <img src="logo.png" alt="Digest">
        </div>

    <div class="social-network">
    
        <ul class="favicons">
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Search</li>
        </ul>
  
    </div>
    </div>

    <div class="navbar">
        <ul class="text-center">
            <li><a href="">NUTRITION</a></li>
            <li><a href="">WELLNESS</a></li>
            <li><a href="">LIFESTYLE</a></li>
            <li><a href="">COMMUNITY</a></li>
    </ul>
    </div>
    
</header>
