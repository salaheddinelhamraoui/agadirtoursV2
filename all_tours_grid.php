<?php
require 'connexion.php';

	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />
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
            <!-- e -->
          </nav>
        </div>
      </div>
      <!-- container -->
    </header>
    <!-- End Header -->

    <section
      class="parallax-window"
      data-parallax="scroll"
      data-image-src="img/home_bg_1.jpg"
      data-natural-width="1400"
      data-natural-height="470"
    >
      <div class="parallax-content-1">
        <div class="animated fadeInDown">
          <h1>MOROCCO SAND TOURS</h1>
          <p>
          Tours in Morocco By Morocco Sand Tours.
          </p>
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>
      <div id="position">
        <div class="container">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Tours</li>
          </ul>
        </div>
      </div>
      <!-- Position -->

      <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
      </div>
      <!-- End Map -->

      <div class="container margin_60">
        <div class="row">
          <aside class="col-lg-3">

            <div class="box_style_2">
              <i class="icon_set_1_icon-57"></i>
              <h4>Need <span>Help?</span></h4>
              <a href="tel://+212691759600" class="phone">+2126 91 75 96 00</a>

              <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
          </aside>
          <!--End aside -->

          <div class="col-lg-9">
            <div class="row">
            <?php
			    $QeuryTour = "SELECT * FROM `tour`";
	            $resultA  = $conn->query($QeuryTour);
				while($row = $resultA->fetch_assoc()) {  ?>
              <div class="col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="tour_container">
                  <div class="ribbon_3 popular"><span>Popular</span></div>
                  <div class="img_container">
                <a href="<?php echo "single_tour_datepicker_v2.php?Tour=".$row["IdTour"]; ?>">
                  <img
                    src="Admin/<?php echo $row["ImageTour"] ; ?>"
                    width="800"
                    height="533"
                    class="img-fluid"
                    alt="image"
                  />
                  <div class="short_info">
                    <i class="icon_set_1_icon-44"></i><?php echo $row["SousTitreTour"] ; ?><span
                      class="price"
                      ><sup>MAD</sup><?php echo $row["PrixTour"] ; ?></span
                    >
                  </div>
                </a>
              </div>
                  <div class="tour_title">
                <h3><strong><?php echo $row["TitreTour"] ; ?></strong></h3>             
              </div>
                </div>
                <!-- End box tour -->
              </div>
              <!-- End col-md-6 -->
              <?php }?>
            </div>
            <!-- End row -->

            <hr />

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <span class="page-link"
                    >1<span class="sr-only">(current)</span></span
                  >
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- end pagination-->
          </div>
          <!-- End col lg 9 -->
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

    <!-- Search Menu -->
    <div class="search-overlay-menu">
      <span class="search-overlay-close"
        ><i class="icon_set_1_icon-77"></i
      ></span>
      <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i></button>
      </form>
    </div>
    <!-- End Search Menu -->


    <!-- Common scripts -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>

    <!-- Specific scripts -->
    <!-- Cat nav mobile -->
    <script src="js/cat_nav_mobile.js"></script>
    <script>
      $("#cat_nav").mobileMenu();
    </script>

    <!-- Map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map.js"></script>
    <script src="js/infobox.js"></script>

    <!-- Check box and radio style iCheck -->
    <script>
      $("input").iCheck({
        checkboxClass: "icheckbox_square-grey",
        radioClass: "iradio_square-grey",
      });
    </script>
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
  </body>
</html>
