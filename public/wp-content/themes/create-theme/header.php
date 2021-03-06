<?php
// /**
//  * The header for our theme
//  *
//  * This is the template that displays all of the <head> section and everything up until <div id="content">
//  *
//  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
//  *
//  * @package wpp_project
//  */

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Poca - Podcast &amp; Audio Template</title>
<!-- <h1>myyyyyyyyyyERTR<h1> -->
  <!-- Favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
<?php wp_head(); ?>
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-thumbnail">
      <img src="<?php echo get_template_directory_uri();?>/img/core-img/preloader.png" alt="">
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="pocaNav">

          <!-- Logo -->
          <a class="nav-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/img/core-img/logo.png" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <div class="nav-container">
              <nav class="navbar navbar-default ">
              <?php
                     wp_nav_menu(
                       array(
                         'menu'       => 'MyPoca Menu',
                       
                         'container'  => false,
                        // 'menu_class' => 'nav navbar-nav',
                        'items_wrap' => '<nav class="main-nav"><ul id="menu-main-nav" class="menu" >%3$s</ul>',
                       )
                     );
                ?>
              </nav>
              </div>
               <!-- <ul id="nav">
                <li class="dropdown"> -->
              <!-- <li class="dropdown-toggle">blog</li> -->
               <!-- <a href="#" class="dropdown-toggle"> Blog</a> -->
                <?php
                    // wp_nav_menu(
                    //   array(
                    //     'menu'       => 'MyPoca Menu',
                        //  'menu_class' => 'dropdown-menu forAnimate',
                        // 'container'  => '',
                    //     //  'items_wrap' => '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
                    //   )
                    // );
                ?>
                <!-- </li>
               </ul> -->
              <!-- </ul> -->

              <!-- Top Search Area -->
              <div class="top-search-area">
                <form action="index.html" method="post">
                  <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>

              <!-- Top Social Area -->
              <div class="top-social-area">
                <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                <a href="#" class="fa fa-pinterest" aria-hidden="true"></a>
                <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                <a href="#" class="fa fa-youtube-play" aria-hidden="true"></a>
              </div>

            </div>
            <!-- Nav End -->
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->