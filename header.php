<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>K Kinoshita's Portfolio</title>
        <meta charset="utf-8">
        <meta name="description" content="Kinoshita's portfolio">
		<meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/style.css">
        <!-- owl carousel css-->
        <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/owl/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/owl/assets/owl.theme.default.min.css">
        <!-- jquery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carousel js -->
        <script type="text/javascript" src="<?php get_template_directory_uri(); ?>/owl/owl.carousel.min.js"></script>
        <!-- owl動作させるため追加-->
        <script type="text/javascript" src="<?php get_template_directory_uri(); ?>/carousel.js"></script>

    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div id="title" class="four columns" >
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" srcset="<?php echo get_template_directory_uri(); ?>/images/logo@2x.png">
                        </div>
                </div>
                    <div id="icon" class="four columns">
                        <div>
                           <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="Portfolio" srcset="<?php echo get_template_directory_uri(); ?>/images/icon@2x.png">
                        </div>
                    </div>
                    <div id="menu" class="four columns">
                        <div>
                        <ul>
                            <li><a href="<?php echo get_template_directory_uri(); ?>/skill"><span>Skills</span></a></li>
                            <li><a href="<?php echo get_template_directory_uri(); ?>/work"><span>Work</span></a></li>
                            <li><a href="<?php echo get_template_directory_uri(); ?>/contact"><span>Contact</span></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <article class="first">
            <div class="container">
                <div class="row">
                <div id="eyecatch" class="six columns">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/eyecatch.png" alt="eyecatch" srcset="<?php echo get_template_directory_uri(); ?>/images/eyecatch@2x.png">
                </div>
                <div id="profile" class="six columns">
                    <div>
                    <p>大阪府在住のWEBデザイナーです。<br>
                        オンラインスクールでWEB制作について学んでおり<br>
                        現在転職活動中です。これからさらにWEB制作の<br>
                        知識や技術を身に着けていきたいと考えています。
                    </p>
                    </div>
                </div>
                </div>
            </div>
        </article>
        
