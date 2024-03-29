<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,
              user-scalable=no" />
  <meta name="url" content="https://ebonsignori.com/">

  <title>Home | Evan A. Bonsignori</title>
  <meta name="author" content="Evan A. Bonsignori">
  <meta name="description" content="Evan Bonsignori's Website.">


  <!--<meta property="og:image" content="img/open_graph/portfolio.jpeg"> -->
  <meta property="og:description" content="Evan Bonsignori's Website.">
  <meta property="og:title" content="Evan A. Bonsignori">


  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/home/home.css" rel="stylesheet"> <!-- Custom CSS -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/vendor/bootstrap.min.css" rel="stylesheet">  <!-- Bootstrap Core CSS -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!-- Font-Awesome CSS -->

  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/jquery-3.2.1.min.js"></script>
</head>

<body>
  <nav data-spy="affix" id="dot-nav">
    	<ul>
	      <li class="awesome-tooltip active" title="Home"><a href="#background-slider"></a></li>
        <li class="awesome-tooltip" title="About"><a href="#about-section"></a></li>
	      <li class="awesome-tooltip" title="Portfolio"><a href="#portfolio"></a></li>
	      <li class="awesome-tooltip" title="Contact"><a href="#contact-section"></a></li>
	    </ul>
	</nav>

  <div class="button_container" id="toggle">
  <span class="top"></span>
  <span class="middle"></span>
  <span class="bottom"></span>
  </div>

  <div class="overlay" id="overlay">
    <nav class="overlay-menu">
      <ul>
        <li><a class="smooth-scroll" href="#background-slider">Home</a></li>
        <li><a href="blog">Blog</a></li>
        <li><a class="smooth-scroll" href="#about-section">About</a></li>
        <li><a class="smooth-scroll" href="#portfolio">Portfolio</a></li>
        <li><a class="smooth-scroll" href="#contact-section">Contact</a></li>
      </ul>
    </nav>
  </div>

  <section id="background-slider">
    <div class="circle-text-container">
      <h1 class="circle-text">
        <span class="char1">E</span>
        <span class="char2">v</span>
        <span class="char3">a</span>
        <span class="char4">n</span>
        <span class="char5"><a class="circle-text-seperator pulse" href="#"></a></span>
        <span class="char7">B</span>
        <span class="char8">o</span>
        <span class="char9">n</span>
        <span class="char10">s</span>
        <span class="char11">i</span>
        <span class="char12">g</span>
        <span class="char13">n</span>
        <span class="char14">o</span>
        <span class="char15">r</span>
        <span class="char16">i</span>
      </h1>
    </div>
    <div class="mobile-text-header left">
      <h1>Evan</h1>
    </div>
    <div class="profile-image" id="center">
      <div class="losange">
        <div class="los1">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/evan_profile_redrocks_headcrop.jpg" name="Profile Picture" alt="A picture of Evan Bonsignori" title="Evan Bonsignori" id="profile-image" />
        </div>
      </div>
    </div>

    <div class="profile-button"><a href="#about-section" class="metro flip smooth-scroll">About</a></div>
    <div class="profile-button"><a href="blog" class="metro">Blog</a></div>
    <div class="profile-button"><a href="#portfolio" class="metro smooth-scroll">Portfolio</a></div>
    <div class="profile-button"><a href="#contact-section" class="metro flip smooth-scroll">Contact</a></div>

    <div class="mobile-text-header right">
      <h1>Bonsignori</h1>
    </div>

    <div id="profile-scroll" class="arrow">
    	<a class="smooth-scroll" href="#about-section"><span></span></a>
    </div>
    <div id="triangle"></div>
  </section>

  <!-- About Section -->
  <section id="about-section">
    <div id="shell">
      <div id="upper">
        <div id="buttons">
          <div class="button red toolbartip toolbar-red">
            <div class="inner-light-top"></div>
            <div class="inner-light-bottom"></div>
            <div class="inner-dark-top"></div>
            <span class="toolbartiptext red">Reset</span>
          </div>
          <div class="button yellow toolbartip toolbar-yellow">
            <div class="inner-light-top"></div>
            <div class="inner-dark-top"></div>
            <div class="inner-light-bottom"></div>
            <span class="toolbartiptext yellow">Minimize</span>
          </div>
          <div class="button green toolbartip" id="toolbar-green">
            <div class="inner-light-top"></div>
            <div class="inner-dark-top"></div>
            <div class="inner-light-bottom"></div>
            <span class="toolbartiptext green">Clear</span>
          </div>
        </div>
        <span class="title">https://ebonsignori.com/index</span>
      </div>
      <div id="main">
        <span class="fore">about@ebonsignori.com </span><span class="accent">$</span>
        <div class="enter" id="query" contenteditable="true">
          <span id="filler"><span class="accent"></span>Enter your query here</span></span>
        </div>
      </div>
    </div>
  </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
      <h1 class="text-center header">Portfolio</h1>
      <div class="container">
          <div class="row">
              <ul id="filters" class="clearfix">
                <li><span class="filter active" id="all">All</span></li>
                <li><span class="filter" data-cat="webdev">Web Development</span></li>
                <li><span class="filter" data-cat="proofofconcept">Proof of Concept</span></li>
                <li><span class="filter" data-cat="coursework">Coursework</span></li>
              </ul>
          </div>

          <div id="portfolio-content">
          <div class="row">
              <!-- Mirror Image Hair Salon Wordpress -->
              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item" data-cat="webdev">
                  <a href="#mirrorimagemodal" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/mirror_image.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Mirror Image Hair Salon</h4>
                      <p class="text-muted">Wordpress Salon Site</p>
                  </div>
              </div>
              <!-- Georgette Ford Essential Oils -->
              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item" data-cat="webdev">
                  <a href="#georgettefordmodal" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/georgette_ford.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Georgette Ford - Distributor</h4>
                      <p class="text-muted">HTML5 MLM Page</p>
                  </div>
              </div>
              <!-- PHP MySQL Invoice Form -->
              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item" data-cat="coursework">
                  <a href="#invoicemodal" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/invoice.png" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Invoice Forms with Storage</h4>
                      <p class="text-muted">PHP and MySQL</p>
                  </div>
              </div>
              <!-- Useless Projects -->
              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item" data-cat="proofofconcept">
                  <a href="#uselessmodal" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/useless_sites.png" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>"Useless" Sites and Videos</h4>
                      <p class="text-muted">Randomized Sites and Videos</p>
                  </div>
              </div>
              <!-- Unused
              <div class="col-md-4 col-sm-6 portfolio-item" data-cat="c">
                  <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="img/portfolio_real/mirror_image.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Escape</h4>
                      <p class="text-muted">Website Design</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 portfolio-item" data-cat="c">
                  <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="img/portfolio_real/mirror_image.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Dreams</h4>
                      <p class="text-muted">Website Design</p>
                  </div>
              </div>
              -->
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-section">
      <h1 class="text-center header">Contact</h1>
      <h2 class="text-center terminal-header"> $ find . -name "Evan Bonsignori" </h2>
      <!-- Contact info hidden in javascript to prevent spam bots -->
      <div id="contact-show" class="text-center">
        <p> Hidden from Bots, click to show: <br />
            <button class="btn contact"
            onclick="showContactInfo()">Contact Information</button>
        </p>
      </div>

      <h2 class="text-center terminal-header"> $ mail -s "feedback" "evan@ebonsignori.com"</h2>
      <p class="text-center"> Is something on this site out of place? Is there a design that annoys you?
        Did you like something?
        <br />
      Leave me a message!
      </p>

      <!-- Contact Form -->
      <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <form class="form-horizontal" action="index.html">
              <div class="form-group">
                <label for="contact-name">Name</label>
                <input type="text" name="contact-name" class="form-control" id="contact-name"  placeholder="Jane Doe">
              </div>
              <div class="form-group">
                <label for="contact-email">Email</label>
                <input type="email"  name="contact-email" class="form-control" id="contact-email" placeholder="jane.doe@example.com">
              </div>
              <div class="form-group ">
                <label for="contact-message">Your Message</label>
               <textarea  name="contact-message" class="form-control" id="contact-message" placeholder="Message Contents"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Send Message</button>
            </form>
        </div>
    </div>
      <?php
      if (isset($_POST["contact-name"]) && !empty($_POST["contact-name"])) {
          $to      = 'evan@ebonsignori.com';
          $subject = 'Visitor Message - Ebonsignori.com';
          $message = "Name: " . $_POST['contact-name'] . "\nEmail: " . $_POST['contact-email'] . "\nMessage:\n" . $_POST['contact-message'] . "\n\nEnd Email.";

          mail($to, $subject, $message);
      }
      ?>
  </section>

  </div><!-- /.container -->

  <!-- Footer Section -->
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <span class="copyright">Copyright &copy; Evan Bonsignori 2017</span>
              </div>
              <div class="col-md-4">
                      <ul class="list-inline social-network social-circle">
                        <!--<li>
                          <a href="#home-section" class="icoHome smooth-scroll">
                            <i class="fa fa-home"></i></a>
                        </li>-->
                        <li>
                          <a href="https://www.facebook.com/ebonsignori" target="_blank" class="icoFacebook">
                            <i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                          <a href="https://github.com/Ebonsignori" target="_blank" class="icoGithub">
                            <i class="fa fa-github"></i></a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/in/evan-bonsignori-33167787" target="_blank" class="icoLinkedin">
                            <i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/ebonsignori/" target="_blank" class="icoInstagram">
                            <i class="fa fa-instagram"></i></a>
                        </li>
                      </ul>
              </div>
              <div class="col-md-4">
                  <ul class="list-inline quicklinks">
                      <li><a href="blog">Blog</a>
                      </li>
                      <li><a href="acknowledgements">Acknowledgements</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- (1) Mirror Image Portfolio Modal-->
  <div class="portfolio-modal modal fade" id="mirrorimagemodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <h2>Mirror Image Hair Salon</h2>
                              <p class="item-intro text-muted">A Hair Salon Business Website In Wordpress</p>
                              <img class="img-responsive img-centered" src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/mirror_image_big.PNG" alt="">

                              <p>
                                Given an inspiration page by the client, I created a theme that satisfied the style that the client desired, while delivering all of the essential information that I deemed necessary to the client's visitors.

                                <br/ > <br/ >The site is created in Wordpress and hosted on shared hosting. I used the X-Theme for the front end design and plugins for most of the functionality- such as a social media page linked to Facebook, a gallery page linked to Instagram, and a slider on the front page.
                                <br/ > <br/ >As my first paid freelancing expierence, I learned how to remain flexible on the project by adjusting the project based on regular feedback from my client. I learned how to implment already-made wordpress plugins to ease development, and how to optimize page speed and SEO using feedback tools.
                                <br/ > <br/ >The website is within the top five results for "hair salons in Rincon GA" or "hair cuts in rincon GA" and in the first three results for "Mirror image hair salon." The page is monitored by google analytics and is secured through regular updates and security plugins.
                              </p>

                              <p><strong>See the website live </strong><a href="https://mirrorimagerincon.com">here</a>.</p>
                              <ul class="list-inline">
                                  <li>Date: May-June 2017</li>
                                  <li>Client: Mirror Image Hair Salon</li>
                                  <li>Category: Web Development</li>
                              </ul>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- (2) Georgette Ford Portfolio Modal -->
  <div class="portfolio-modal modal fade" id="georgettefordmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <h2>Georgette Ford - Oils Distributor</h2>
                              <p class="item-intro text-muted">Multi-Level-Marketing Website in HTML5, CSS, and JS</p>
                              <img class="img-responsive img-centered" src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/georgetteford.png" alt="">
                              <p>
                                With little direction from the client, I researched essential oils and browsed independent distributor websites before creating this from an HTML5 template that can be found <a href="https://html5up.net/dimension"> here</a>.
                                <br /> <br /> This site was my first expierence in web design and naturally has a few bugs. I've had to return to the page to improve load times and functionality, but each time has been a learning expierence.
                                <br /> <br /> The content of the page is hard coded and maintained semi-annually without a CMS. I initially hosted the page on an Ubuntu server using a dedicated server "droplet" from Digintal Ocean. Since, I've simplified the process and transfered the site to automated shared hosting.
                              </p>
                              <p><strong>See the website live </strong><a href="http://www.georgetteford.com/">here</a>.</p>
                              <ul class="list-inline">
                                  <li>Date: April 2017</li>
                                  <li>Client: Georgette Ford</li>
                                  <li>Category: Web Development</li>
                              </ul>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- (3) PHP Invoices Portfolio Modal -->
  <div class="portfolio-modal modal fade" id="invoicemodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <h2>Invoice Forms</h2>
                              <p class="item-intro text-muted">With Server and Database Storage</p>
                              <img class="img-responsive img-centered" src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/invoice.png" alt="">
                              <p>
                                My first time learning about HTML, CSS, and JS and my first time implmenting PHP and MySQL with front end languages.
                                <br/ > <br /> The assignment was broken into two segments: <br />
                                  (1) Create invoice front end and use PHP to save invoices to a file
                                  <br />
                                  (2) Add functionality to save invoices to database using MySQL and create a script that saves 100 random invoices to the database
                              </p>
                              <p> I went beyond the assignment and added additional functionality such as randimizing values, resetting forms, and removing all invoices with one click. These improvments eased development and testing and earned me a 100% on the assignment.</p>
                              <p><a href="<?php echo get_bloginfo('template_directory'); ?>/projects/invoices/index.html">View the project</a> or <a href="https://github.com/Ebonsignori/invoiceForm">view the sourcecode</a>.</p>
                              <ul class="list-inline">
                                  <li>Date: March-April 2017</li>
                                  <li>Client: School</li>
                                  <li>Category: Coursework</li>
                              </ul>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- (4) "Useless" Portfolio Modal -->
  <div class="portfolio-modal modal fade" id="uselessmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2>"Useless" Sites and Videos</h2>
                              <p class="item-intro text-muted">Randomized Sites and Videos</p>
                              <img class="img-responsive img-centered" src="<?php echo get_bloginfo('template_directory'); ?>/img/portfolio_real/its-useless.jpg" alt="">
                              <p>
                                A fun project demonstrating javascript arrays, randomization, and YouTube API integration. Repeats are avoided until every video or site is played/visted.
                              </p>
                              <p>Visit useless <strong>sites</strong> <a href="<?php echo get_bloginfo('template_directory'); ?>/projects/useless/uselesssite.html">here</a>, or view the <a href="https://github.com/Ebonsignori/useless">sourcecode</a>.</p>
                              <p>Visit useless <strong>videos</strong> <a href="<?php echo get_bloginfo('template_directory'); ?>/projects/useless/uselessvideo.html">here</a>, or view the <a href="https://github.com/Ebonsignori/useless">sourcecode</a>.</p>
                              <ul class="list-inline">
                                  <li>Date: June 2017</li>
                                  <li>Client: Self</li>
                                  <li>Category: Proof of Concept</li>
                              </ul>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Portfolio Modal 5 and 6-->
  <!-- Unused
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <h2>Project Name</h2>
                              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                              <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                              <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                              <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                              <h2>Project Name</h2>
                              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                              <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                              <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                              <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
-->

  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/typed.min.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/home/home.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/home/dotnav.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/home/terminal.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/home/portfolio_sort.js"></script>

  <!-- Google Analytics Code -->

</body>

</html>
