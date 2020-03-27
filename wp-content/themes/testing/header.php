<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <?php  $topheadertext =  of_get_option("top-header-text"); ?>
<?php  $logo =  of_get_option("site_logo"); ?>
<?php  $mobilelogo =  of_get_option("mobile_logo"); ?>

<div id="wrapper" class="hfeed">
<header id="header">
<div class="free-text">
  <p><?php echo $topheadertext; ?></p>
</div>
<div class="menu-bg">
<div class="logo-section">
      <a href="<?php echo home_url(); ?>"><img id="logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" class="img-responsive"></a>
    </div> 
    <div class="mega-menu-inner">
      <div class="mobile-header">
        <div id="nav-icon1">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="mobile-logo-section">
            <a href="<?php echo home_url(); ?>"><img src="<?php  echo get_template_directory_uri();?>/images/mobile-logo.png ?>" class="mobile-logo"></a>
          </div>
        </div>

        <div class="nav-menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="http://localhost/testing/our-services/">Services</a></li>
              <li  class="menu-list"><a href="google.com">Men</a>
                <div class="sub-menu-icon">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
                <div class="sub-menu">
                  <div class="row_submenu">
                   <div class="sub-menu-img">
                          <img src="<?php echo get_template_directory_uri();?>/images/men.jpg" class="img-responsive">
                          <h2>Men's Wallets</h2>
                    <h5><a href="#">Shop the Collection</a></h5>
                    </div>
                    <div class="sub-menu-list">
                       <ul>
                        <li><a href="#"><b>Wallets</b></a></li>
                          <li><a href="#">Men</a></li>
                          <li><a href="#">Men</a></li>
                          <li><a href="#">Men</a></li>
                          <li><a href="#">Men</a></li>
                          <li><a href="#">Men</a></li>
                          <li><a href="#">Men</a></li>
                        </ul>
                    </div>
                         <div class="sub-menu-list">
                          <ul>
                            <li><a href="#"><b>Wallets</b></a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                          </ul>
                        </div>
                      <div class="sub-menu-list">
                          <ul>
                            <li><a href="#"><b>Wallets</b></a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Men</a></li>
                          </ul>
                        </div>
                      <div class="sub-menu-list best-seller">
                          <ul>
                            <li><a href="#"><b>Best Sellers</b></a></li>
                            <li><a href="#"><b>Best Sellers</b></a></li>
                            <li><a href="#"><b>Best Sellers</b></a></li>
                            <li><a href="#"><b>Best Sellers</b></a></li>
                            
                          </ul>
                        </div>
                  </div>
              </div>
</li>
              <li  class="menu-list"><a href="google.com">Women</a>
                  <div class="sub-menu-icon">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
                <div class="sub-menu">
                  <div class="row_submenu">
                  <div class="sub-menu-img">
                    <img src="<?php echo get_template_directory_uri();?>/images/women.jpg" class="img-responsive">
                    <h2>Women's Purse</h2>
                    <h5><a href="#">Shop the Collection</a></h5>
                  </div>
                  <div class="sub-menu-list">
                     <ul>
                      <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                  </div>
                  <div class="sub-menu-list">
                        <ul>
                          <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                      </div>
                    <div class="sub-menu-list">
                        <ul>
                          <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                      </div>
                    <div class="sub-menu-list best-seller">
                        <ul>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                      </ul>
                      </div>
                    </div>
                 </div>
              </li>
              <li class="menu-list"><a href="#">Shop</a>
                   <div class="sub-menu-icon">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
                <div class="sub-menu">
                  <div class="row_submenu">
                  <div class="sub-menu-img">
                    <img src="<?php echo get_template_directory_uri();?>/images/women.jpg" class="img-responsive">
                    <h2>Women's Purse</h2>
                    <h5><a href="#">Shop the Collection</a></h5>
                  </div>
                  <div class="sub-menu-list">
                     <ul>
                      <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                  </div>
                  <div class="sub-menu-list">
                        <ul>
                          <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                      </div>
                    <div class="sub-menu-list">
                        <ul>
                          <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                      </div>
                    <div class="sub-menu-list best-seller">
                        <ul>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                      </ul>
                      </div>
                    </div>
                 </div>

              </li>
              <li class="menu-list"><a href="#">Wallet</a>
                   <div class="sub-menu-icon">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
                <div class="sub-menu">
                  <div class="row_submenu">
                  <div class="sub-menu-img">
                    <img src="<?php echo get_template_directory_uri();?>/images/women.jpg" class="img-responsive">
                    <h2>Women's Purse</h2>
                    <h5><a href="#">Shop the Collection</a></h5>
                  </div>
                  <div class="sub-menu-list">
                     <ul>
                      <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                  </div>
                  <div class="sub-menu-list">
                        <ul>
                          <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                      </div>
                    <div class="sub-menu-list">
                        <ul>
                          <li><a href="#"><b>Purse</b></a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                          <li><a href="#">Women</a></li>
                        </ul>
                      </div>
                    <div class="sub-menu-list best-seller">
                        <ul>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                          <li><a href="#"><b>Best Sellers</b></a></li>
                      </ul>
                      </div>
                    </div>
                 </div>

              </li>
              <li><a href="#">Purse</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
     </div>
</div>




<!-- <div id="branding"> -->
<!-- <div id="site-title">
<?php //if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php //echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php //if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div> -->
<!-- <div id="site-description"><?php //bloginfo( 'description' ); ?></div> -->
<!-- </div> -->
<!-- <nav id="menu">
<div id="search"><?php //get_search_form(); ?></div>
<?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav> -->
</header>
<div id="container">