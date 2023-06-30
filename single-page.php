<?php
session_start();
require_once('connect.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta charset="utf-8">
  <title>A Piano Battle for the Ages... (Teaser)</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/Untitled_logo_6_free-file__3_-removebg-preview.png "> 
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,400;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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


  </div class="header">
  <div class="single-page-left">

    <h1>A Piano Battle for the Ages... (Teaser) </h1>
    <p>Teaser Score for Piano Battle by MZ and Groovy
      <img id="user-img" src="assets/img/user1.jpeg" alt="">
    </p>
    <p class="Published">Published over 2 years ago</p>
    <div class="line1"></div>
    <div class="icons">
      <button class="leftbtn"><i id="iconsid" class="fa-solid fa-heart"></i>
        <lable class="btnlbl"> likes</lable>
      </button>
      <button class="leftbtn"><i id="iconsid" class="fas fa-share"></i>
        <lable class="btnlbl"> share</lable>
      </button>
      <button class="leftbtn"><i id="iconsid" class="fa fa-download" aria-hidden="true"></i>
        <lable class="btnlbl"> download</lable>
      </button>
      <button class="leftbtn"><i id="iconsid" class="fa-solid fa-folder-plus"></i>
        <lable class="btnlbl"> add to collection</lable>
      </button>
    </div>

    <div class="btnlblright">
      <label>12 likes</label>
      <label>5 shares/50 views</label>


    </div>

    <div class="line2"></div>
    <div class="commentsection">
      <img class="profilepic" href="" src="1.png" alt="not">

      <input value="add a comment..." class="comment" type="text"></div>


  </div>
  </div>



  <div class="single-page-right">
    <div class="bar">
      <button class="barbtn"><i id="" class="fa-solid fa-music"></i></button>
      <button id="play-button" class="barbtn"><i id="" class="fa-solid fa-play"></i></button>
      <button id=" " class="barbtn"><i class="fa-solid fa-chevron-down"></i></button>
      <div class="iconsright">
        <i id="righticons" class="fa-solid fa-magnifying-glass-plus"></i>
        <i id="righticons" class="fa-solid fa-magnifying-glass-minus"></i>
        <i id="righticons" class="fa fa-bars" aria-hidden="true"></i>
        <i id="righticons" class="fa fa-expand" aria-hidden="true"></i>


      </div>
    </div>
    <div class="bar-line"></div>
    <img src="scale/A Piano Battle for the Ages... (Teaser)-1.webp">
    <img src="scale/A Piano Battle for the Ages... (Teaser)-2.webp">
    <img src="scale/A Piano Battle for the Ages... (Teaser)-3.webp">
    <img src="scale/A Piano Battle for the Ages... (Teaser)-4.webp">
    <img src="scale/A Piano Battle for the Ages... (Teaser)-5.webp">
    <img src="scale/A Piano Battle for the Ages... (Teaser)-6.webp">
  </div>
</body>

<script>
  const playButton = document.getElementById('play-button');
  playButton.onclick = () => {
    const audio = new Audio(

      "assets/tracks-music/The Oceans Echo _ Piano solo Ft. JM.mp3"
    );
    audio.play();
    playButton.onclick = () => {
      audio.muted = !audio.muted;
      audio.currentTime = 0;
    }
  };
</script>

</html>