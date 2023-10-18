<?php
session_start();
if (isset($_POST['button'])) {
    $clickCount = file_get_contents('click_count.txt');
    $clickCount = intval($clickCount) + 1;
    file_put_contents('click_count.txt', $clickCount);
    $_SESSION['click_count'] = $clickCount;
    $downloadlink = file_get_contents('https://api.ninjaui.app/api.php?uidownloadlink');
    header( 'Location: ' . $downloadlink );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>NinjaUI - Your ultimate Game Cheat Library Loader</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html" class="active"><i class="fa-solid fa-home"></i> Home</a></li>
              <li><a href="https://cyberlab.fun"><i class="fa-solid fa-globe-asia"></i> Forum</a></li>
              <li><a href="https://shrinkl.com/Discord"><i class="fa-solid fa-hand-holding-medical"></i> Support</a>
              </li>
              <li><a href="https://cyberlab.fun/help/privacy-policy/"><i class="fa-solid fa-scroll"></i> Privacy Policy</a>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To NinjaUI</h6>
                  <h4><em>Browse</em> Your favorite cheats with NinjaUI</h4>
                  <form method="post">
                  <button type="submit" name="button" class="btn btn-primary gradient-button">Download</button>
                </form>
                  <div class="col-lg-8">
                    <p style="color: rgb(202, 202, 202);"><i class="fa-brands fa-microsoft"></i> Windows 10 and above
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->
          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2>NinjaUI Details</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6" style="width: 100%;">
                      <div class="right-info">
                        <ul>
                          <li><i class="fa-solid fa-dot-circle fa-beat"
                              style="--fa-animation-duration: 1s; --fa-fade-opacity: 0.6;"></i> 1,234 <br> Online Users
                          </li>
                          <li><i class="fa fa-download fa-bounce"></i> <?php echo number_format(file_get_contents('click_count.txt')); ?> <br> Downloads</li>
                          <li><i class="fa fa-server fa-flip" style="--fa-animation-duration: 3s;"></i> <?php echo number_format(file_get_contents('https://api.ninjaui.app/api.php?uiversion') / 100, 2); ?> <br>
                            Version</li>
                          <li><i class="fa fa-gamepad fa-shake"></i> 1,234 <br> Cheats</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <!-- ***** Carousel Start ***** -->
                    <div id="carouselExampleCaptions" class="carousel slide">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                          class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                          aria-label="Slide 2"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./assets/images/NinjaUI_AppLibrary.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Cheat Library</h5>
                            <p style="color: rgb(255, 255, 255); text-shadow: 1px 1px black;">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="./assets/images/NinjaUI_Settings.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Settings</h5>
                            <p style="color: rgb(255, 255, 255); text-shadow: 1px 1px black;">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <!-- ***** Carousel End ***** -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Details End ***** -->
      </div>
    </div>
  </div>
  </div>
  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>© NinjaUI 2023 - Property of <a href="https://cheater.ninja/" target="_blank" rel="noopener noreferrer"><img src="./assets/images/CN-logo.png" alt="CheaterNinja Logo" width="auto" height="35px"></a>
            <br>Designed & Developed by ZeroByteZ - Made with <i style="color:rgba(235, 54, 54, 0.808)"
              class="fa fa-heart fa-beat"></i>
          </p>
        </div>
      </div>
    </div>
    <br>
  </footer>
  <!-- ***** Footer End ***** -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


</body>

</html>