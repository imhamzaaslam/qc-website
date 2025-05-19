<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>QualityClix - Delivering IT wish list!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="style.css">
        <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="icon" href="/images/favicon-16x16.png">
        <link rel="stylesheet" href="css/settings.css" />
        <link rel="stylesheet" href="css/responsive.css" />
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
    <?php
        $config = getSiteConfig();
        ?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 margin-bottom-25">
                        <h1><?php echo htmlspecialchars($config['site_name']); ?></h1>
                        <img src="<?php echo htmlspecialchars($config['logo_url']); ?>" alt="Logo" style="max-height: 150px; width: auto;" loading="lazy">
                    </div>
                    <div class="col-md-3 col-sm-3 margin-bottom-25">
                        <h1>Hot Links</h1>
                        <ul>
                            <li><a href="#home-layout">Home</a></li>
                            <li><a href="#services-layout">Our services</a></li>
                            <li><a href="#whyUs-layout">Why Us</a></li>
                            <li><a href="#testimonials-layout">Testimonials</a></li>
                            <li><a href="#portfolio-layout">Portfolio</a></li>
                            <li><a href="#contact-layout">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 margin-bottom-25">
                        <h1>Get In Touch</h1>
                        <p><i class="fa fa-mobile"></i> <?php echo htmlspecialchars($config['site_phone']); ?></p>
                        <p><i class="fa fa-map-marker"></i> <?php echo htmlspecialchars($config['site_address']); ?></p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:<?php echo htmlspecialchars($config['site_email']); ?>"><?php echo htmlspecialchars($config['site_email']); ?></a></p>
                    </div>
                    <div class="col-md-3 col-sm-3 social_icons">
                        <h1>Catch Us on Social Media</h1>
                        <?php foreach (getSiteConfig()['social_links'] as $platform => $url): ?>
                            <a href="<?= $url ?>" class="padding-right-10" target="_blank">
                                <i class="fa fa-<?= $platform ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="copyright">
                    Copyrights &copy; <?php echo date('Y'); ?>.
                    <a href="#"><?php echo htmlspecialchars($config['site_name']); ?></a>. All Rights Reserved.
                </div>
            </div>
        </footer>
        <section id="screenShot">
            <div class="container">
                <div class="title">
                    <span><img src="images/close_btn.png" loading="lazy"></span>
                    <div class="nav_btn" style="position: absolute !important;left: 10px !important;top: -1px !important; z-index:80000;">
                        <a class="navigate pre_nav" href="#carousel-2" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>
                        <a class="navigate next_nav" href="#carousel-2" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
                    </div>
                </div>
                <div class="body">
                    <h1 id="wait_msg">Please Wait Images are loading</h1>
                    <div class="well-none">
                        <div id="carousel-2" class="carousel slide">
                            <div id="pro_img" class="carousel-inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
        <script type="text/javascript" src="js/jquery_2.1.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
        <script type="text/javascript" src="js/rev-slider/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript"></script>
        <script>
            $(function(){
                $('#Container').mixItUp();
            });
            $( "#frm_contactus" ).submit(function( event ) {
                alert("Under maintenance")
            });            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                },
            });
        </script>
        <script>
            document.querySelectorAll('.swiper-slide').forEach(slide => {
                slide.addEventListener('click', () => {
                    const modal = document.getElementById('projectModal');
                    document.getElementById('modalImage').src = slide.dataset.image;
                    document.getElementById('modalTitle').textContent = slide.dataset.title;
                    document.getElementById('modalClient').textContent = slide.dataset.client;
                    document.getElementById('modalDesc').textContent = slide.dataset.desc;
                    const link = slide.dataset.link;
                    document.getElementById('modalLink').innerHTML = link ? 
                    `<a href="${link}" target="_blank">🔗 View Project</a>` : '';

                    const skillsContainer = document.getElementById('modalSkills');
                    skillsContainer.innerHTML = '';
                    const skills = JSON.parse(slide.dataset.skills);
                    skills.forEach(skill => {
                        const span = document.createElement('span');
                        span.textContent = skill;
                        skillsContainer.appendChild(span);
                    });
                    modal.style.display = 'block';
                });
            });
            document.querySelector('.close').onclick = () => {
                document.getElementById('projectModal').style.display = 'none';
            };
            window.onclick = event => {
                if (event.target.id === 'projectModal') {
                    document.getElementById('projectModal').style.display = 'none';
                }
            };
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const showAllBtn = document.getElementById('showAllBtn');
                const allTestimonials = document.getElementById('allTestimonials');

                showAllBtn.addEventListener('click', function () {
                allTestimonials.classList.toggle('d-none');
                showAllBtn.textContent = allTestimonials.classList.contains('d-none') 
                    ? 'View All Testimonials' 
                    : 'Hide Testimonials';
                });
            });
        </script>
    </body>
</html>