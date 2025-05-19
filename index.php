<?php
  include 'functions.php';
  include 'header.php';
  $projects = getProjects();
?>
<!-- Slider Section -->
<section id="home-layout">
  <section id="slider" class="position-relative">
    <!-- Slide 1 - Desktop -->
    <div class="static-slide d-none d-md-block position-relative">
      <img src="images/rev-slider/slide1.png" alt="slidebg1" class="img-fluid w-100" width="1920" height="800" loading="lazy" />
      <div class="position-absolute text-white" style="top: 170px; left: 5%;">
        <h2>We thrive on technology..<span class="d-block">Technology is <br />Our Strength</span></h2>
      </div>
      <div class="position-absolute" style="top: 140px; left: 46%;">
        <img src="images/rev-slider/balon.png" alt="balon image" class="img-fluid" width="500" height="150" loading="lazy" />
      </div>
      <div class="position-absolute text-white" style="top: 50px; left: 5%;">
        <h1 class="blue_border">Let us help you choose the<br />Solution that best fits your needs</h1>
      </div>
      <div class="position-absolute" style="top: 370px; left: 5%;">
        <a class="btn btn-primary" href="#">Learn More About Us</a>
      </div>
    </div>
    <!-- Slide 1 - Mobile -->
    <div class="static-slide d-block d-md-none position-relative text-white">
      <img src="images/rev-slider/slide1.png" alt="slidebg1" class="img-fluid w-100" width="768" height="600" loading="lazy" />
      <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-between px-4" style="top: 0; left: 0;">
        <div class="text-start" style="max-width: 65%;">
          <h3 class="text-uppercase mb-3" style="font-size: 1.75rem; color: #fff;">QualityClix</h3>
          <p style="font-size: 1rem; color: #fff;">Delivering IT WishLists</p>
        </div>
        <div style="width: 100px;">
          <img src="images/rev-slider/balon.png" alt="balon image" class="img-fluid" width="500" height="150" loading="lazy" />
        </div>
      </div>
    </div>
    <!-- Slide 2 - Desktop Only -->
    <div class="static-slide position-relative d-none d-md-block">
      <img src="images/rev-slider/slide2.jpg" alt="slidebg2" class="img-fluid w-100" width="1920" height="800" loading="lazy" />
      <div class="position-absolute text-white start-50 translate-middle-x text-center" style="top: 320px;">
        <h1>DELIVERING IT WISH LISTS</h1>
      </div>
      <div class="position-absolute" style="top: 50px; left: 40%;">
        <img src="images/rev-slider/sdf.png" alt="sdf image" class="img-fluid" width="250" height="250" loading="lazy" />
      </div>
      <div class="position-absolute" style="top: 130px; left: 20%;">
        <img src="images/rev-slider/sdf_2.png" alt="sdf_2 image" class="img-fluid" width="150" height="150" loading="lazy" />
      </div>
      <div class="position-absolute" style="top: 60px; left: 12px;">
        <img src="images/rev-slider/sdf_3.png" alt="sdf_3 image" class="img-fluid" width="200" height="200" loading="lazy" />
      </div>
      <div class="position-absolute start-50 translate-middle-x" style="top: 400px;">
        <a class="btn btn-primary" href="#contact-layout">Contact us</a>
      </div>
    </div>
  </section>
</section>
<!-----End Slider----->
<!-----START Services------>
<section id="services-layout">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-9 col-sm-9 left_to_center">
            <h1>Our <span>Services</span></h1>
            <p>Consistency and Reliability all the way</p>
        </div>
        <div class="col-md-3 col-sm-3 right_to_center">
            <a href="#contact-layout" class="buttons">Contact Us</a>
        </div>
    </div>
    <img src="images/line.PNG" width="100%" loading="lazy">
      <div class="row">
        <?php foreach (getServices() as $service): ?>
          <div class="col-md-4 col-sm-4">
            <div class="service_widget">
              <span><i class="fa <?= $service['icon']; ?>"></i></span>
              <h1><?= htmlspecialchars($service['title']); ?></h1>
              <p><?= htmlspecialchars($service['desc']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>
<!-----End Services----->
<!-----START WhyUS------>
<section id="whyUs-layout">
  <div id="numbers">
    <div id="balon">
      <div class="container-fluid">
        <h1 class="text-center margin-bottom-30">Why Us</h1>
        <div class="row">
          <div class="col-md-10 col-sm-10 col-md-offset-1 text-center">
          <div class="whyUsText">Since 2003, QualityClix strives to establish and maintain long term and mutually beneficial relationships with its venerated customers. We are not just a bunch of coders, QualityClix is a solid team of professionals that works in close contact with our clients to deliver the best suited solutions for their business needs. QualityClix has grown with its customers and we intend to continue doing that. If you are looking for a long term reliable work partner, then you need to look no further, because QualityClix is your best option!</div></div>
        </div>
        <div class="row" style="padding-top:100px !important;">
          <div class="col-md-3 col-sm-3">
            <div class="counter">
              <i class="fa fa-star fa-4x"></i>
              <h3>5 star Rating</h3>We have consistently maintained the highest (5 star) rating for all projects undertaken so far.
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="counter">
              <i class="fa fa-thumbs-o-up"></i>
              <h3>96% Recommendation</h3>QualityClix enjoys 96% recommendation from its clients since it started in 2003.
              Please <a href="#">click here</a> to check out our clients reviews to verify our reliability credentials.
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="counter">
              <i class="fa fa-support"></i>
              <h3>24/7 Support</h3>You can reach us 24/7; we are never practically offshore.
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="counter">
              <i class="fa fa-check-square-o"></i>
              <h3>Deliver Quality Software</h3>We deliver quality software on time and at reasonable rates.
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 col-sm-7 margin-bottom-25">
          <h1>What <span>We Do</span></h1>
          <p>The reason to hire!</p>
          <div class="what_we">
            <div class="_mask">
              <div class="table_cell">
                At QualityClix, center stage belongs to our clients:).. We analyze our clients business needs in depth and build solutions best suited for their long term goals!
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-5 margin-bottom-25">
          <h1>Our <span>Skills</span></h1>
          <p>Great Skills for you!</p>
          <div class="progress_content">
            <div class="retain_row">
                Software Development <span class="span">95%</span>
                <div class="bar"><span class="width_95"></span></div>
            </div>
            <div class="retain_row">
                Web Development <span class="span">88%</span>
                <div class="bar"><span class="width_88"></span></div>
            </div>
            <div class="retain_row">
                Web Design <span class="span">85%</span>
                <div class="bar"><span class="width_85"></span></div>
            </div>
            <div class="retain_row">
                Wordpress <span class="span">75%</span>
                <div class="bar"><span class="width_75"></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="home_concept">
      <div class="container relative">
        <div class="row">
          <span class="sun"></span>
          <span class="cloud"></span>
          <div class="col-md-2 col-md-offset-1">
            <div class="process_image">
              <img src="images/str_1.png" alt="" class="rotate">Strategy                      
            </div>
          </div> 
          <div class="col-md-2">
            <div class="process_image">
              <img src="images/planning.png" alt="" class="rotate">Planning                      
            </div>
          </div>
          <div class="col-md-2">
            <div class="process_image">
              <img src="images/build.png" alt="" class="rotate">Build                      
            </div>
          </div> 
          <div class="col-md-4 col-md-offset-1">
            <div class="project_image">
              <img src="images/ourWork.png" style="margin:3px 0px 0px 3px"  class="rotate" loading="lazy">
              <p class="ourWork">Our Work</p>
            </div>
          </div>       
        </div>   
      </div>
  </div>
</section>
<!-----End whyUs----->
<!------TESTIMONIALS------>
<section id="testimonials-layout" class="bg-light py-5">
    <div class="container text-center">
        <h1 class="text-3xl fw-bold mb-5">WHAT DO <span class="text-primary">OUR CLIENTS</span> SAY?</h1>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    $testimonials = getTestimonials();
                    $active = true;
                    foreach ($testimonials as $testimonial):
                ?>
                    <div class="carousel-item <?= $active ? 'active' : '' ?>">
                        <div class="d-flex flex-column align-items-center">
                            <div class="client-img mb-4" style="background: url('<?= htmlspecialchars($testimonial['image_url']) ?>') center/cover; border-radius: 50%; width: 80px; height: 80px;"></div>
                            <p class="text-white fst-italic mb-3">"<?= htmlspecialchars($testimonial['feedback']) ?>"</p>
                            <h5 class="fw-semibold">-- <?= htmlspecialchars($testimonial['name']) ?> --</h5>
                        </div>
                    </div>
                <?php
                    $active = false;
                    endforeach;
                ?>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!----- End testimonials----->
<!-----Start Portfolio----->
<section id="portfolio-layout" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold display-5">Our Featured Projects</h2>
      <p class="text-muted">Take a look at our latest work and amazing collaborations.</p>
    </div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php foreach (getProjects() as $project): ?>
          <div class="swiper-slide">
            <div class="card shadow-sm h-100 border-0 p-4">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center fw-semibold mb-4" style="font-size: 1.5rem;">
                  <?= htmlspecialchars($project['title']) ?>
                </h5>
                <p class="card-text text-dark mb-3" style="font-size: 1.5rem; line-height: 1.6;">
                  <?= strlen($project['desc']) > 120 ? substr($project['desc'], 0, 120) . '...' : $project['desc'] ?>
                </p>
                <p class="mb-3" style="font-size: 1.5rem;">
                  <strong>Client:</strong> <?= htmlspecialchars($project['client']) ?>
                </p>
                <div class="skills mb-4">
                  <?php foreach ($project['skills'] as $skill): ?>
                    <span class="badge bg-primary text-white"><?= htmlspecialchars($skill) ?></span>
                  <?php endforeach; ?>
                </div>
                <div class="mt-auto text-end">
                  <button class="btn btn-outline-primary btn-sm px-3 py-2 openCustomModal"
                          data-title="<?= htmlspecialchars($project['title']) ?>"
                          data-client="<?= htmlspecialchars($project['client']) ?>"
                          data-desc="<?= htmlspecialchars($project['desc']) ?>"
                          data-image="<?= htmlspecialchars($project['image']) ?>"
                          data-link="<?= htmlspecialchars($project['link']) ?>"
                          data-skills='<?= json_encode($project['skills']) ?>'>
                    <i class="fa fa-eye me-1"></i> Preview
                  </button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination mt-3"></div>
    </div>
  </div>
</section>
<!-- Projects Modal -->
<div id="customModal" class="custom-modal">
  <div class="custom-modal-content">
    <span class="custom-modal-close">&times;</span>
    <div class="row">
      <div class="col-md-6">
          <img id="modalImage" src="" alt="Project Image" class="img-fluid rounded w-100 mb-3" style="min-height: 300px; object-fit: cover;">
      </div>
      <div class="col-md-6 d-flex flex-column position-relative">
          <h5 id="modalTitle" class="fw-bold mb-2 fs-2 modal-title"></h5>
          <p class="modal-client"><strong>Client:</strong> <span id="modalClient" class="text-primary"></span></p>
          <p id="modalDesc" class="mt-2 modal-description text-justify"></p>
          <div id="modalSkills" class="skills mt-3 mb-3"></div>
          <div id="modalLink">Visit Project</div>
      </div>
    </div>
  </div>
</div>
<!-----End Portfolio----->
<!-----Start Contact----->
<section id="contact-layout" class="py-16 bg-white">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-6 col-sm-6 mb-4">
                <h1 class="mb-4">Contact Information</h1>
                <p><i class="fa fa-map-marker"></i> <?= getSiteConfig()['site_address'] ?></p>
                <p><i class="fa fa-phone"></i> <?= getSiteConfig()['site_phone'] ?></p>
                <p><i class="fa fa-envelope"></i> 
                    <a href="mailto:<?= getSiteConfig()['site_email'] ?>"><?= getSiteConfig()['site_email'] ?></a>
                </p>
                <div class="contact-social mt-3">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-rss"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-lg-6 col-md-12 mb-4 d-flex align-items-center justify-content-center">
                <form action="#" method="POST" class="w-100 p-4 border rounded bg-light shadow-sm" style="max-width: 500px; margin: 0 auto;">
                    <h2 class="mb-3 fw-bold fs-2" style="color:#2D728B !important">Get In Touch</h2>
                    <div class="mb-2">
                        <input type="text" name="name" class="form-control form-control-sm" placeholder="Your Name" required>
                    </div>
                    <div class="mb-2">
                        <input type="email" name="email" class="form-control form-control-sm" placeholder="Your Email" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="subject" class="form-control form-control-sm" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" placeholder="Your Message" required style="resize: none; height: 70px !important;"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-sm px-4 py-3 fs-5">
                            <i class="fa fa-paper-plane me-2"></i>Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-----End contact----->
<?php
  include 'footer.php';
?>
<script>
  jQuery("#atest").click( function() {})
  function get_post_images(post_id){
    $("#wait_msg").show();
      $('#pro_img').html(''); 
        image_links =[];
        jQuery.ajax({
        type : "get",
        dataType : "JSON",
        url : "?action=my_user_vote&post_id="+post_id,
        success: function(response) {
          $("#wait_msg").hide();
        console.log(response);
          if(response[0] !=false){
            for(var i=0;i<response.length;i++){
            console.log(response[i]);
              if(i==0){
                  var imgTag = "<div class='item active'><img src='"+response[i]+"'></div>";
                  $('#pro_img').prepend(imgTag);
              }else{
                  var imgTag = "<div class='item '><img src='"+response[i]+"'></div>";
                  $('#pro_img').prepend(imgTag);
              }
            }
          }else{
            var no_img_src="";
            var imgTag = "<div class='item active'><img src='"+no_img_src+"'></div>";
            $('#pro_img').prepend(imgTag);
          }
        },
        error: function (request, error) {
        console.log(arguments);
        alert(" Images can't loaded ");
      }
    });
  }
</script>