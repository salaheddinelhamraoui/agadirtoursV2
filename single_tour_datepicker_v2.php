<?php
require 'connexion.php';


	$idTour = 0;

	
if(isset($_GET['Tour'])) {
	$idTour = $_GET['Tour'];
	$QeuryTour = "SELECT * FROM `tour` where IdTour = ".$idTour;
	$QeuryTour2 = "SELECT * FROM `tour` where IdTour = ".$idTour;
  $QeuryTour3 = "SELECT * FROM `tour` where IdTour = ".$idTour;
	$QeuryDay = "SELECT * FROM `day` where IdTour = ".$idTour;

$resultC  = $conn->query($QeuryDay);	
$resultM  = $conn->query($QeuryTour);	
$resultT  = $conn->query($QeuryTour2);
$resultB  = $conn->query($QeuryTour3);

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="description here ..."
    />
    <meta name="author" content="Ansonika" />
    <title>MOROCCO SAND TOURS - Book Now</title>

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
    <link href="css/timeline.css" rel="stylesheet" />

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
      data-image-src="img/single_tour_bg_1.jpg"
      data-natural-width="1400"
      data-natural-height="470"
    >
      <div class="parallax-content-2">
        <div class="container">
          <div class="row">
		  <?php
				while($row = $resultM->fetch_assoc()) {  ?>
            <div class="col-md-8">
              <h1><?php echo $row["TitreTour"] ; ?></h1>
              <span
                ><?php echo $row["SousTitreTour"] ; ?></span
              >
            </div>
            <div class="col-md-4">
              <div id="price_single_main">
                from/per person <span><sup>MAD</sup><?php echo $row["PrixTour"] ; ?></span>
              </div>
            </div>
			 <?php }?>
          </div>
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>
      <div id="position">
        <div class="container">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="all_tours_grid.php">Tours</a></li>
            <li>Tour</li>
          </ul>
        </div>
      </div>
      <!-- End Position -->

      <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
      </div>
      <!-- End Map -->

      <div class="container margin_60">
        <div class="row">
        <?php
				while($row = $resultT->fetch_assoc()) {  ?>
          <div class="col-lg-8" id="single_tour_desc">
            <div id="single_tour_feat">
              <ul>
                <li><i class="icon_set_1_icon-4"></i>Museum</li>
                <li><i class="icon_set_1_icon-83"></i>Days</li>
                <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
              </ul>
            </div>

            <!-- Map button for tablets/mobiles -->

            <div id="Img_carousel" class="slider-pro">
              <div class="sp-slides">
                <div class="sp-slide">
                  <img
                    alt="Image"
                    class="sp-image"
                    src="css/images/blank.gif"
                    data-src="Admin/<?php echo $row["ImageTour"] ; ?>"
                    data-small="Admin/<?php echo $row["ImageTour"] ; ?>"
                    data-medium="Admin/<?php echo $row["ImageTour"] ; ?>"
                    data-large="Admin/<?php echo $row["ImageTour"] ; ?>"
                    data-retina="Admin/<?php echo $row["ImageTour"] ; ?>"
                  />
                </div>
                
              </div>
            </div>

            <hr />

            <div class="row">
            
              <div class="col-lg-3">
                <h3>Description</h3>
              </div>
              <div class="col-lg-9">
                <h4><?php echo $row["TitreDescription1"] ; ?></h4>
                <p>
                <?php echo $row["Description1"] ; ?>
                </p>
                <h4><?php echo $row["TitreDescription2"] ; ?></h4>

                      <li><?php echo $row["Description2"] ; ?></li>

           
              </div>

            </div>

            <hr />
            <div class="row">
			 <?php
				while($row = $resultC->fetch_assoc()) {
					?>
              <div class="col-lg-12">
                <ul class="cbp_tmtimeline">
                  <li>
                    <time class="cbp_tmtime" datetime="09:30"
                      ><span>full day </span> <span><?php echo  ( $row["TimeDay"]); ?></span>
                    </time>
                    <div class="cbp_tmicon timeline_1"></div>
                    <div class="cbp_tmlabel">
                      <h2>
                        <span
                          ><?php echo  ( $row["EmpDay"]); ?></span
                        ><?php echo  ( $row["TitreDay"]); ?>
                      </h2>
                      <p>
                        <?php echo  ( $row["DescriptionDay"]); ?>
                      </p>
                    </div>
                  </li>
               
                </ul>
				
              </div>
			 <?php  } ?> 
            </div>
            <?php  } ?> 
          </div>
          <!--End  single_tour_desc-->

          <aside class="col-lg-4">
            <div class="box_style_1 expose">
              <h3 class="inner">- Booking -</h3>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label><i class="icon-calendar-7"></i> Select a date</label>
                    <input
                      class="form-control booking_date"
                      id="bookingdate"
                      type="text"
                      data-lang="en"
                      data-min-year="2021"
                      data-max-year="2023"
                      data-disabled-days="11/04/2021,12/04/2021"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label><i class="icon-clock"></i> Time</label>
                    <input
                      class="form-control booking_time"
                      id="bookingtime"
                      type="text"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Adults</label>
                    <div class="numbers-row">
                      <input
                        type="text"
                        value="1"
                        id="adults"
                        class="qty2 form-control"
                        name="quantity"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Children</label>
                    <div class="numbers-row">
                      <input
                        type="text"
                        value="0"
                        id="children"
                        class="qty2 form-control"
                        name="quantity"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <?php
				while($row = $resultB->fetch_assoc()) {
					?>
              <form class="mb-4">
              <input
                  class="form-control mb-2"
                  type="text"
                  placeholder="<?php echo  ( $row["TitreTour"]); ?>"
                />
                <input
                  class="form-control mb-2"
                  type="text"
                  placeholder="Full Name"
                />
                <input
                  class="form-control mb-2"
                  type="email"
                  placeholder="Email"
                />
                <input
                  class="form-control"
                  type="tel"
                  placeholder="Telephone"
                />
              </form>
              <?php  } ?> 
              <a class="btn_full" href="#0">Book now</a>
            </div>
            <!--/box_style_1 -->

            <div class="box_style_4">
              <i class="icon_set_1_icon-90"></i>
              <h4><span>Book</span> by phone</h4>
              <a href="tel://+212691759600" class="phone">+2126 91 75 96 00</a>

              <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
          </aside>
        </div>
        <!--End row -->
      </div>
      <!--End container -->

      <div id="overlay"></div>
      <!-- Mask on input focus -->
    </main>
    <!-- End main -->

    <footer class="revealed">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Need help?</h3>
            <a href="tel://+212672644416" id="phone">+212 672 644 416</a>
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

    <!-- Common scripts -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>

    <!-- Specific scripts -->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function ($) {
        $("#Img_carousel").sliderPro({
          width: 960,
          height: 500,
          fade: true,
          arrows: true,
          buttons: false,
          fullScreen: false,
          smallSize: 500,
          startSlide: 0,
          mediumSize: 1000,
          largeSize: 3000,
          thumbnailArrows: true,
          autoplay: false,
        });
      });
    </script>

    <!--Review modal validation -->
    <script src="assets/validate.js"></script>
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
    <!-- Map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map.js"></script>
    <script src="js/infobox.js"></script>
  </body>
</html>
