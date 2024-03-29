<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username']);
 $password = md5($_POST['password']);

 $sql = "SELECT * FROM `TrackTok`.`login` WHERE username='$username' AND password='$password'";
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
  $_SESSION['username'] = $username;
 }else{

  $fmsg = "<div class='fmsg fmg'> An unauthorized failed login attempt was detected </div>";

  
 }
}
if(isset($_SESSION['username'])){
 $smsg = "<div class='smsg'>successful entry</div>";
 echo "
 <meta HTTP-EQUIV='REFRESH' content='5; url=/community.php'/>";
}
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta charset="utf-8">
  <title>Login</title>
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
                  <li class="button-header">
                    <a href="sin-up.php" class="header-btn mr-10"></i>Sign Up</a>
                    <a href="login.php" class="btn header-btn2">Log In</a>
              </li> 
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

    <div class="login-form-area section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-10">
            <div class="login-form">
            <form method="POST" > 
              <div class="login-heading">
                <span>Login</span>
                <p>Enter Login details to get access</p>
                <?php if(isset($smsg)){ ?><div class="alert alert-success" style="color:rgb(57, 129, 255);" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger" style="color:rgb(57, 129, 255);" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
              </div>

              <div class="input-box">
                <div class="single-input-fields">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Username" required >
                </div>
                <div class="single-input-fields">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Enter Password" required >
                </div>
                <div class="single-input-fields login-check">
                  <input type="checkbox" id="fruit1" name="keep-log">
                  <label for="fruit1">Keep me logged in</label>
                </div>
              </div>

              <div class="login-footer">
                <p>Don’t have an account? <a href="sin-up.php">Sign Up</a> here</p>
                <button class="btn login-btn">Login</button>
              </div>
            </form>
            </div>
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

        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row d-flex align-items-center">
                <div class="col-xl-12 ">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>