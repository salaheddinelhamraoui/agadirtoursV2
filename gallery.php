<?php
require 'connexion.php';

	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Some desc Here" />
    <meta name="author" content="Salaheddin El Hamraoui" />
    <title>Morocco Sand Tours</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      href="img/apple-touch-icon-57x57-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="72x72"
      href="img/apple-touch-icon-72x72-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="114x114"
      href="img/apple-touch-icon-114x114-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="144x144"
      href="img/apple-touch-icon-144x144-precomposed.png"
    />

    <!-- GOOGLE WEB FONT -->
    <link
      href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- COMMON CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/vendors.css" rel="stylesheet" />

    <!-- CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet" />
  </head>

  <body>
    <div id="preloader">
      <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
      </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
      <div id="top_line">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <i class="icon-phone"></i><strong>+212691759600</strong>


              <i class="far fa-clock ml-5 mr-1"></i
              ><strong>7/7 : Morocco.sandtours@gmail.com</strong>
            </div>
          </div>
          <!-- End row -->
        </div>
        <!-- End container-->
      </div>
      <!-- End top line-->

      <div class="container">
        <div class="row">
          <div class="col-3">
            <div id="logo_home">
              <h1>
                <a href="index.php" title="Morocco Sand Tours travel template"
                  >Morocco Sand Tours travel template</a
                >
              </h1>
            </div>
          </div>
          <nav class="col-9">
            <a
              class="cmn-toggle-switch cmn-toggle-switch__htx open_close"
              href="javascript:void(0);"
              ><span>Menu mobile</span></a
            >
            <div class="main-menu">
              <div id="header_menu">
                <img
                  src="img/logo_sticky.png"
                  width="160"
                  height="34"
                  alt="Morocco Sand Tours"
                />
              </div>
              <a href="#" class="open_close" id="close_in"
                ><i class="icon_set_1_icon-77"></i
              ></a>
              <ul>
                <li class="submenu">
                  <a href="index.php" class="show-submenu">Home</a>
                </li>
                <li class="submenu">
                  <a href="all_tours_grid.php" class="show-submenu"
                    >All Tours </a>
                </li>
                <li class="submenu">
                  <a href="contact_us.php" class="show-submenu">Contact us</a>
                </li>
                <li class="submenu">
                  <a href="custom.php" class="show-submenu">Customized Tours</a>
                </li>
                <li class="submenu">
                  <a href="gallery.php" class="show-submenu">Gallery</a>
                </li>
                <li class="submenu">
                  <a href="blog.php" class="show-submenu">Blog</a>
                </li>
                <li class="submenu">
                  <a href="About.php" class="show-submenu">About</a>
                </li>
              </ul>
            </div>
            <!-- End main-menu -->

          </nav>
        </div>
      </div>
      <!-- container -->
    </header>
    <!-- End Header -->

    <section
      class="parallax-window"
      data-parallax="scroll"
      data-image-src="img/header_bg.jpg"
      data-natural-width="1400"
      data-natural-height="470"
    >
      <div class="parallax-content-1">
        <div class="animated fadeInDown">
          <h1>Gallery page</h1>
          <p>
          Morocco Sand Tours.
          </p>
        </div>
      </div>
    </section>
    <!-- End Section -->

    <main>
      <div id="position">
        <div class="container">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Gallery</li>
          </ul>
        </div>
      </div>
      <!-- End Position -->

      <div class="container margin_60">
        <div class="main_title">
          <h2>Some <span>images</span> places</h2>
          <p>
          Welcome to Magical Morocco.
          </p>
        </div>
        <hr />
        <div class="row magnific-gallery add_bottom_60">
        <?php
			    $Qeurygallery = "SELECT * FROM `galerie` where IdType=1";
	            $resultG  = $conn->query($Qeurygallery);
				while($row = $resultG->fetch_assoc()) {  ?>
          <div class="col-sm-4">
            <div class="img_wrapper_gallery">
              <div class="img_container_gallery">
                <a
                  href="Admin/<?php echo $row["ImageGalerie"] ; ?>"
                  title="Photo title"
                  data-effect="mfp-zoom-in"
                  ><img src="Admin/<?php echo $row["ImageGalerie"] ; ?>" alt="Image" class="img-fluid" />
                  <i class="icon-resize-full-2"></i>
                </a>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <!-- End row -->
        <div class="main_title">
          <h2>Some <span>images</span> with clients</h2>
          <p>
          Welcome to Magical Morocco.
          </p>
        </div>
        <hr />
        <div class="row">
        <?php
			    $Qeurygallery2 = "SELECT * FROM `galerie` where IdType=2";
	            $resultG2  = $conn->query($Qeurygallery2);
				while($row = $resultG2->fetch_assoc()) {  ?>
          <div class="col-sm-4">
            <div class="img_wrapper_gallery">
              <div class="img_container_gallery">
                <a
                  href="Admin/<?php echo $row["ImageGalerie"] ; ?>"
                  title="Photo title"
                  data-effect="mfp-zoom-in"
                  ><img src="Admin/<?php echo $row["ImageGalerie"] ; ?>" alt="Image" class="img-fluid" />
                  <i class="icon-resize-full-2"></i>
                </a>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->

    <footer class="revealed">
		<div class="container">
		  <div class="row">
			<div class="col-md-4">
			  <h3>Need help?</h3>
			  <a href="tel://+212691759600" id="phone">+212691759600</a>

			  <a href="mailto:Morocco.sandtours@gmail.com" id="email_footer"
        >Morocco.sandtours@gmail.com</a
            >
          </div>
          <div class="col-md-3">
            <h3>Discover</h3>
            <ul>
            <li><a href="About.php">About us</a></li>
              <li><a href="all_tours_grid.php">Tours</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="gallery.php">Gallery</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h3>Settings</h3>
            <div class="styled-select">
              <select name="lang" id="lang">
                <option value="English" selected>English</option>
                <option value="French">French</option>
                <option value="Spanish">Spanish</option>
                <option value="Russian">Russian</option>
              </select>
            </div>
          </div>
        </div>
		  <!-- End row -->
		  <div class="row">
			<div class="col-md-12">
			  <div id="social_footer">
				<ul>
				  <li>
					<a href="https://www.facebook.com/MoroccoSandTours/"><i class="icon-facebook"></i></a>
				  </li>
				  <li>
					<a href="#"><i class="icon-twitter"></i></a>
				  </li>
				  <li>
					<a href="#"><i class="icon-google"></i></a>
				  </li>
				  <li>
					<a href="https://www.instagram.com/sandtours"><i class="icon-instagram"></i></a>
				  </li>
				</ul>
				<p>© MoroccoSandTours 2021</p>
			  </div>
			</div>
		  </div>
		  <!-- End row -->
		</div>
		<!-- End container -->
	  </footer>
    <!-- End footer -->

    <div id="toTop"></div>
    <!-- Back to top button -->
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+212691759600", // WhatsApp number
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
                 var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

<!-- /GetButton.io widget -->
    <!-- Common scripts -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
