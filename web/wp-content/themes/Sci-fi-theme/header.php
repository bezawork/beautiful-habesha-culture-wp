<! DOCTYPE html>
  <html>

  <head>
    <!--Plugins and WordPress core use this function to insert crucial elements into your document -->
    <?php wp_head(); ?>
  </head>

  <body>
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
          data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="false" data-xl-stick-up="false"
          data-xxl-stick-up="false" data-body-class="body-style-1">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
            <span></span></div>
          <div class="rd-navbar-aside-outer">
            <div class="rd-navbar-aside">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark"
                      src="<?php echo get_theme_file_uri('/site/images/logo-default-171x40.png')?>" alt="" width="171"
                      height="40" /><img class="brand-logo-light"
                      src="<?php echo get_theme_file_uri('/site/images/logo-inverse-171x40.png')?>" alt="" width="171"
                      height="40" /></a>
                </div>
              </div>
              <div class="rd-navbar-aside-info rd-navbar-collapse">
                <p class="rd-navbar-quote">“Science without religion is lame, religion without science is blind.”</p>
                <div>
                  <ul class="list-social-modern">
                    <li><a class="icon mdi mdi-google" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap">

                <ul class="rd-navbar-list-link">
                  <?php $sectionsunderpages =new WP_QUERY(array(

                ));
                error_log('post tyep'.get_post_type());
                ?>
                  <!-- Adding line under page names when the pages are active-->
                  <li><a <?php if($_SERVER["REQUEST_URI"] == '/') echo 'class= "rd-nav-item active"'?>
                      href="<?php echo get_site_url() ?>">Home</a></li>
                  <li><a
                      <?php if($_SERVER["REQUEST_URI"] == '/events/'|| get_post_type() == 'event') echo 'class= "rd-nav-item active"'?>
                      href="<?php echo get_site_url() ?>/events">Events</a></li>
                  <li><a
                      <?php if($_SERVER["REQUEST_URI"] == '/blog/' || get_post_type() == 'post') echo 'class= "rd-nav-item active"'?>
                      href="<?php echo get_site_url() ?>/blog">Blogs</a></li>
                  <li><a <?php if($_SERVER["REQUEST_URI"] == '/about/') echo 'class= "rd-nav-item active"'?>
                      href="<?php echo get_site_url() ?>/about">About</a></li>
                </ul>
              </div>
              <!-- RD Navbar Search-->
              <div class="rd-navbar-search">
                <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2"
                  data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live"
                  method="GET">
                  <div class="form-wrap">
                    <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text"
                      name="s" autocomplete="off" />
                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                  </div>
                  <button class="rd-search-form-submit mdi mdi-magnify" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>