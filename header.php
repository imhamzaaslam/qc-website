<?php 
$config = getSiteConfig();
$site_name_parts = explode(' ', htmlspecialchars($config['site_name']));
$first_word = $site_name_parts[0] ;
$second_word = $site_name_parts[1] ;
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $config['site_name']; ?> - Delivering IT wish list!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Critical CSS -->
        <link type="text/css" rel="stylesheet" href="style.css">
        <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
        <!-- Defer non-essential styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print" onload="this.media='all'">
        <link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="icon" href="/images/favicon-16x16.png">
        <!-- Deferred non-critical CSS -->
        <link rel="stylesheet" href="css/settings.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" href="css/responsive.css" media="print" onload="this.media='all'">
        <!-- Inline Critical Styles -->
        <style type="text/css">
            .wpcf7 .screen-reader-response {
                display: none;
            }
            .contact-form label, .contact-form input, .contact-form textarea { display: block; margin: 10px 0; }
            .contact-form label { font-size: larger; }
            .contact-form input { padding: 5px; }
            #cf_message { width: 90%; padding: 10px; }
            #cf_send { padding: 5px 10px; }
            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0; 
            }
        </style>
    </head>
    <body>
        <header>
            <div id="top">
                <div class="container">
                    <span><i class="fa fa-envelope"></i> <a href="mailto:<?= $config['site_email']; ?>"><?= $config['site_email']; ?></a></span>             
                    <span class="padding-left-20"><i class="fa fa-phone"></i> <?= $config['site_phone']; ?></span>            
                </div>
            </div>
            <section id="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-6">
                            <a href="/" class="logo d-flex align-items-center" style="text-decoration: none; flex-wrap: nowrap;">
                                <img src="<?= $config['logo_url']; ?>" 
                                    alt="<?= htmlspecialchars($config['site_name']); ?>" 
                                    class="logo-img"
                                    srcset="<?= $config['logo_url']; ?> 1x, <?= $config['logo_url']; ?> 2x">
                                <span class="logo-text" style="font-weight: bold; white-space: nowrap;">
                                    <span style="color: #2d1d5d;"><?= $first_word ?></span>
                                    <span style="color: #747474;"> <?= $second_word ?></span>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="toggle"><i class="fa fa-bars"></i></div>
                            <ul>
                                <li><a href="#home-layout" class="selected">Home</a></li>
                                <li><a href="#services-layout">Our services</a></li>
                                <li><a href="#whyUs-layout">Why Us</a></li>
                                <li><a href="#testimonials-layout">Testimonials</a></li>
                                <li><a href="#portfolio-layout">Portfolio</a></li>
                                <li><a href="#contact-layout">Contact Us</a></li>
                            </ul>
                            <!-- Optional social media list -->
                            <!-- 
                            <ul class="social_media">
                                <li><a href="#" class="social fb" title="Facebook"></a></li>
                                <li><a href="#" class="social twt" title="Twitter"></a></li>
                                <li><a href="#" class="social linked" title="LinkedIn"></a></li>
                            </ul>
                            -->
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    </body>
</html>