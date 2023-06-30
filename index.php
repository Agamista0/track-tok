<?php
session_start();
require_once('connect.php');
?>

<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta charset="utf-8">
  <title>HOME</title>
  <link rel="shortcut icon" type="image/x-icon"
    href="assets/img/icon/Untitled_logo_6_free-file__3_-removebg-preview.png ">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,400;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet" />
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
    <div class="slider-area position-relative ">
      <div class="single-sliders slider-height  gray-bg d-flex align-items-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7">
              <div class="hero-caption">
                <h1>listen music online, together.</h1>
                <span>track-tok is a collaborative music notation platform for beginner composers and professionals
                  alike.</span>

                <div class="slider-btns">
                  <a href="login.html" class="btn hero-btn">Get started for free!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-tittle">
        <h2>music</h2>
      </div>

      <div class="hero-img">
        <img src="assets/img/hero/hero-img.png" alt="">
      </div>

      <div class="hero-shape bounce-animate">
        <img src="assets/img/hero/hero-shape.png" alt="">
      </div>

      <div class="hero-shape2">
        <img src="assets/img/hero/hero-shape2.png" alt="">
      </div>
    </div>


    <section class="top-jobs fix ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-12">

            <div class="section-tittle section-tittle3 text-center mb-10">
              <span>1000+</span>
              <h2>The number of users around the world</h2>

            </div>
          </div>
        </div>
      </div>


    </section>

    <section class="about-area gray-bg section-padding2">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-6 col-lg-7 col-md-10">
            <div class="support-location-img">
              <img src="assets/img/gallery/about.webp" alt="">
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-8">
            <div class="right-caption">

              <div class="section-tittle1 section-tittle3">
                <h2>For the guitar players: a complete tablature editor.</h2>
              </div>
              <div class="support-caption">
                <p class="pera-top">track-tok offers native support on all the common tools you need for your tab
                  marking creations, with tabs automatically synchronized with the music notation.</p>
                <a href="#" class="btn about-btn">Find Talent</a>

              </div>
            </div>
          </div>
        </div>
        <div class="about-tittle">
          <h2>tracks</h2>
        </div>
      </div>
    </section>

    <section class="job-category section-padding">
      <div class="container">
        <div class="row justify-content-center mb-55">
          <div class="col-xl-8">
            <div class="section-tittle section-tittle3 text-center">
              <h2>Not just a notation platform. A global community of millions music lovers.</h2>
              <p>track-tok is the biggest community of creators driven by the love for music.</p>
            </div>
          </div>
        </div>

      </div>
    </section>



    <div class="testimonial-area">
      <div class="container">
        <div class="testimonial-wrapper">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
              <div class="h1-testimonial-active dot-style">

                <div class="single-testimonial position-relative">
                  <div class="testimonial-caption">
                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                    <p>"The perfect place to grow as a composer. <br>hare your creations with the world, get and give
                      feedback, and meet like-minded music enthusiasts.</p>
                  </div>


                </div>

                <div class="single-testimonial position-relative">
                  <div class="testimonial-caption">
                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                    <p>"Read, listen, like, comment, share.
                      Be part of your favorite composers’ journey.</p>
                    <a href="">Explore more community scores -> </a>
                  </div>
                </div>

                <div class="single-testimonial position-relative">
                  <div class="testimonial-caption">
                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                    <p>"Take your compositions to the next level
                      Flat gives you the tools you need to write and share your scores with a global community of 5M+
                      music lovers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="t-shape">
            <img src="assets/img/gallery/70-709266_violin-hd-png-download-removebg-preview (1).png" alt="">
          </div>
        </div>
      </div>
    </div>




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


  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>


</html>