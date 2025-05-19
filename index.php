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
<section id="testimonials-layout">
  <div class="container">
    <h1>WHAT DO <span>OUR CLIENTS</span> SAY?</h1>
    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner text-center">
        <?php
          $testimonials = getTestimonials();
          $active = true; 
          foreach ($testimonials as $testimonial):
        ?>
          <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
            <div class="client-img" style="background: url('<?php echo htmlspecialchars($testimonial['image_url']); ?>') center/cover; border-radius: 100%; width: 80px; height: 80px; margin: 0 auto;"></div>
            <p>"<?php echo htmlspecialchars($testimonial['feedback']); ?>"</p>
            <h5>-- <?php echo htmlspecialchars($testimonial['name']); ?> --</h5>
          </div>
        <?php
          $active = false; 
          endforeach;
        ?>
      </div>
      <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
        <i class="fa fa-chevron-left fa-2x"></i>
      </a>
      <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
        <i class="fa fa-chevron-right fa-2x"></i>
      </a>
    </div>
    <div class="text-center mt-4">
      <button id="showAllBtn" class="btn btn-outline-primary">View All Testimonials</button>
    </div>
    <div id="allTestimonials" class="row mt-4 d-none">
      <?php
        foreach ($testimonials as $testimonial):
      ?>
        <div class="col-md-4 mb-4">
          <div class="testimonial-item p-3 border rounded text-center">
            <div class="client-img" style="background: url('<?php echo htmlspecialchars($testimonial['image_url']); ?>') center/cover; border-radius: 100%; width: 80px; height: 80px; margin: 0 auto;"></div>
            <p>"<?php echo htmlspecialchars($testimonial['feedback']); ?>"</p>
            <h6 class="text-white">-- <?php echo htmlspecialchars($testimonial['name']); ?> --</h6>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!----- End testimonials----->
<!-----Start Portfolio----->
<section id="portfolio-layout">
  <div class="container-fluid">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php foreach (getProjects() as $project): ?>
          <div class="swiper-slide" 
            data-title="<?= htmlspecialchars($project['title']) ?>"
            data-client="<?= htmlspecialchars($project['client']) ?>"
            data-desc="<?= htmlspecialchars($project['desc']) ?>"
            data-image="<?= htmlspecialchars($project['image']) ?>"
            data-link="<?= htmlspecialchars($project['link']) ?>"
            data-skills='<?= json_encode($project['skills']) ?>'>
            <div class="project-card">
              <source srcset="<?= str_replace('.png', '@2x.png', $project['image']) ?>" media="(min-width: 768px)">
              <img
                src="<?= $project['image'] ?>" alt="<?= htmlspecialchars($project['title']) ?>"
                loading="lazy" width="600" height="400" class=" rounded-lg shadow-lg w-full object-cover"/>
              <div class="project-info">
                <h3><?= $project['title'] ?></h3>
                <p><strong>Client:</strong> <?= $project['client'] ?></p>
                <p><?= strlen($project['desc']) > 120 ? substr($project['desc'], 0, 120) . '...' : $project['desc'] ?></p>
                <?php if (!empty($project['link'])): ?>
                  <p>
                    <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank" class="view-project-link">
                      🔗 View Project
                    </a>
                  </p>
                <?php endif; ?>
                <div class="skills">
                  <?php foreach ($project['skills'] as $skill): ?>
                      <span><?= $skill ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- Modal for Projects -->
    <div id="projectModal" class="modal" aria-hidden="true">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-image">
            <img id="modalImage" sizes="(max-width: 768px) 480px, 800px" loading="lazy" class="w-full h-auto object-cover"/>
          </div>
          <div class="modal-text">
            <span class="close" aria-label="Close">&times;</span>
            <h3 id="modalTitle"></h3>
            <p><strong>Client:</strong> <span id="modalClient"></span></p>
            <p id="modalDesc"></p>
            <p id="modalLink"></p>
            <div id="modalSkills" class="skills"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-----End Portfolio----->
<!-----Start Contact----->
<section id="contact-layout">
	<div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 margin-bottom-25">
        <h1 class="margin-bottom-35">Contact Information</h1>
        <p><i class="fa fa-map-marker"></i> <?= getSiteConfig()['site_address'] ?></p>
        <p><i class="fa fa-phone"></i> <?= getSiteConfig()['site_phone'] ?></p>
        <p><i class="fa fa-envelope"></i> <a href="mailto:<?= getSiteConfig()['site_email'] ?>"><?= getSiteConfig()['site_email'] ?></a></p>
        <div class="contact-social">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-rss"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope-o"></i></a>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 margin-bottom-25">
        <h1 class="margin-bottom-35">Get In Touch</h1>
        <div class="form_attribute">
          <form action="#" method="post" class="use-floating-validation-tip">
            <div class="form-group mb-3">
              <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required />
            </div>
            <div class="form-group mb-3">
              <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required />
            </div>
            <div class="form-group mb-3">
              <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" />
            </div>
            <div class="form-group mb-3">
              <textarea id="message" name="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
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