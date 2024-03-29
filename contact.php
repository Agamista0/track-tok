<?php
session_start();
require_once('connect.php');
?>
 
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="shortcut icon" type="image/x-icon"href="assets/img/icon/Untitled_logo_6_free-file__3_-removebg-preview.png ">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">


</head>


<body>
  <header>
    <div class="header-area header-transparent">
      <div class="main-header header-sticky">
        <div class="container">
          <div class="menu-wrapper d-flex align-items-center justify-content-between">
            <div class="left-content d-flex align-items-center">
              <div class="logo mr-45">
                <a href="index.php"><img src="assets/img/logo/logo.png" width="120px" alt=""></a>
              </div>

              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="community.php">Community</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="buttons">
              <ul>
              <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                {
                ?>
                  <li class="button-header">
                    <a href="logOut.php" class="btn header-btn2">Log out </a>
                  </li>
                <?php }else{ ?>
                  <li class="button-header">
                    <a href="sin-up.php" class="header-btn mr-10"></i>Sign Up</a>
                    <a href="login.php" class="btn header-btn2">Log In</a>
                  </li>
                <?php } 
                ?>
              </ul>
            </div>
          </div>

          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>
        </div>
      </div>
    </div>
  </header>


    <main>

        <div class="slider-area gray-bg position-relative">
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-caption hero-caption2">
                                <h2>Contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form"
                            action="https://preview.colorlib.com/theme/jobsco/contact_process.php" method="post"
                            id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30"
                                            rows="9" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Message'"
                                            placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Giza</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+201050564112</h3>
                                <p>sun to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3> yousefAgami@gmail.com
                                </h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="footer-area footer-padding gray-bg">
          <div class="footer-wrapper ">
            <div class="container">
              <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="single-footer-caption mb-50">
                    <div class="single-footer-caption mb-30">
    
                      <div class="footer-logo mb-25">
                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                      </div>
                      <div class="footer-tittle">
                        <div class="footer-pera">
                          <p>The automated process starts as soon as your clothes go into the machine.The outcome is
                            gleaming clothes.</p>
                        </div>
                      </div>
                      <div class="footer-social">
                        <a href="https://instagram.com" target=”_blank”><i class="fab fa-instagram"></i></a>
                        <a href="https://facebook.com" target=”_blank”><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target=”_blank”><i class="fab fa-twitter"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                  <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                      <h4>Useful links</h4>
                      <ul>
                        <li><a href="#">Design & creatives</a></li>
                        <li><a href="#">Telecommunication</a></li>
                        <li><a href="#">Restaurant</a></li>
                        <li><a href="#">Programing</a></li>
                        <li><a href="#">Architecture</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                      <h4>Subscribe Newsletter</h4>
                      <p>Subscribe newsletter to get updates about new jobs.</p>
                    </div>
    
                    <div class="footer-form">
                      <div id="mc_embed_signup">
                        <form target="_blank"
                          action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                          method="get" class="subscribe_form relative mail_part" novalidate="true">
                          <input type="email" name="EMAIL" id="newsletter-form-email" placeholder="  Enter your email">
                          <div class="form-icon">
                            <button type="submit" name="submit" id="newsletter-submit"
                              class="email_icon newsletter-submit button-contactForm">
                              Subscribe
                            </button>
                          </div>
                          <div class="mt-10 info"></div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    

 
</body>

<!-- Mirrored from preview.colorlib.com/theme/jobsco/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2023 05:11:11 GMT -->

</html>