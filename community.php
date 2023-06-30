<?php
session_start();
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta charset="utf-8">
  <title>Community</title>
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


  <div id="search-box">
    <input type="text" id="search-input" placeholder="Search for music scores ...">
    <button id="search-button">Search</button>
  </div>

  <div>
   
    <div class="main-music">
      <img class="top-right-image" src="assets/user/f10addc8-cb73-4e9b-aa0e-9df4961a0335.jpeg">
      <a href="single-page.php"><h3 class="song-title">A Piano Battle for the Ages... (Teaser)</h3></a>
      <p class="song-">Piano, Harp, Oud, String ensemble, Violin, Viola, Violoncello, Contrabass ... & 10 more</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <a href="single-page.html"><button class="orginal">Orginal</button></a>
      <a href="single-page.html"><button><i class="fas fa-eye">33</i></button></a>
      <a href="single-page.html"><button><i class="fa-solid fa-play" id="fa-solid2">32</i></button></a>

      <a href="single-page.html"><button><i class="fa-solid fa-heart">43</i></button></a>
      <a href="single-page.html"><button><i class="fa-solid fa-comment">44</i></button></a>
    </div>
    <div class="main-music">
      <img class="top-right-image" src="assets/img/gallery/1.png">
      <a href="single-page.php"><h3 class="song-title">Give and Take - Piano and Cello</h3></a>
      <p class="song-">Violoncello, Piano</p>
      <button id="play-btn"><i class="fa-solid fa-play" onclick="changeImage()"id="fa-solid1"><source src="assets/track-music/A traitor • Cap 1.mp3"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">13</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">42</i></button>
      <button><i class="fa-solid fa-heart">45</i></button>
      <button><i class="fa-solid fa-comment">10</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image"  src="assets/img/gallery/6.jpeg">
      <a href="single-page.php"><h3 class="song-title">The Swashbuckling Ugly Duckling Mind Boggling Vomiting Tobogganing...</h3></a>
      <p class="song-">Piano</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Arrangement</button>
      <button><i class="fas fa-eye">22</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">44</i></button>
      <button><i class="fa-solid fa-heart">32</i></button>
      <button><i class="fa-solid fa-comment">12</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image" src="assets/img/gallery/2.jpeg">
      <a href="single-page.php"><h3 class="song-title">Hurt and Heal</h3></a>
      <p class="song-">Violin, Viola, Violoncello, Contrabass</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">35</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">52</i></button>
      <button><i class="fa-solid fa-heart">22</i></button>
      <button><i class="fa-solid fa-comment">20</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image"  src="assets/img/gallery/3.jpeg">
      <a href="single-page.php"><h3 class="song-title">A Piano Battle </h3></a>
      <p class="song-">Piano</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">33</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">32</i></button>
      <button><i class="fa-solid fa-heart">43</i></button>
      <button><i class="fa-solid fa-comment">44</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image"  src="assets/img/gallery/4.jpeg">
      <a href="single-page.php"><h3 class="song-title">Midnight Microwave</h3></a>
      <p class="song-">HQ electric guitar, Piano, Drumset, HQ vintage electric bass ... & 1 more</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">13</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">52</i></button>
      <button><i class="fa-solid fa-heart">12</i></button>
      <button><i class="fa-solid fa-comment">11</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image"  src="assets/img/gallery/5.png">
      <a href="single-page.php"><h3 class="song-title">AGrey Town Minstrel</h3></a>
      <p class="song-">Piano</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">43</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">21</i></button>
      <button><i class="fa-solid fa-heart">114</i></button>
      <button><i class="fa-solid fa-comment">24</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image"  src="assets/img/gallery/6.jpeg">
      <a href="single-page.php"><h3 class="song-title">A Piano Battle for the Ages.</h3></a>
      <p class="song-">Piano, Harp, Oud, String ensemble, Violin, Viola, Violoncello, Contrabass ... & 10 more</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">33</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">32</i></button>
      <button><i class="fa-solid fa-heart">43</i></button>
      <button><i class="fa-solid fa-comment">44</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image"  src="assets/img/gallery/2.jpeg">
      <a href="single-page.php"><h3 class="song-title">Turn The Corner || Short Piano Solo</h3></a>
      <p class="song-">Piano, Harp, Oud, String ensemble, Violin</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">13</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">98</i></button>
      <button><i class="fa-solid fa-heart">53</i></button>
      <button><i class="fa-solid fa-comment">61</i></button>
    </div>
    <div class="main-music">
      <img class="top-right-image" src="assets/img/gallery/4.jpeg">
      <a href="single-page.php"><h3 class="song-title">A Piano Battle for the Ages... (Teaser)</h3></a>
      <p class="song-">Piano, Harp, Oud, String ensemble, Violin, Viola, Violoncello, Contrabass ... & 10 more</p>
      <button id="play-btn" onclick="changeImage()"><i class="fa-solid fa-play" id="fa-solid1"></i></button>
      <button class="orginal">Orginal</button>
      <button><i class="fas fa-eye">33</i></button>
      <button><i class="fa-solid fa-play" id="fa-solid2">32</i></button>
      <button><i class="fa-solid fa-heart">43</i></button>
      <button><i class="fa-solid fa-comment">44</i></button>
    </div>

  
  </div>

  <script>
    const btn = document.getElementById("play-btn");
    btn.onclick = () => {
      const audio = new Audio(

        "assets/tracks-music/The Oceans Echo _ Piano solo Ft. JM.mp3"
      );
      audio.play();
      btn.onclick = () => audio.muted = !audio.muted
    };
  </script>

  <script src="assets/js/community-search.js"></script>
</body>

</html>