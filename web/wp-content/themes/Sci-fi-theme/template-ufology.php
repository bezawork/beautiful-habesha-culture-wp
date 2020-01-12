<?php /* Template Name: Ufology page */ ?>
<?php
get_header();
while(have_posts()){
  the_post(); ?>
<div class="page">
  <!-- Page Header-->
  <header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
        data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
        data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
        data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="false"
        data-xl-stick-up="false" data-xxl-stick-up="false" data-body-class="body-style-1">
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
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html"><span
                      class="rd-nav-icon mdi mdi-home"></span><span class="rd-nav-title">Home</span></a>
                  <!-- RD Navbar Dropdown-->
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="ufo.html">UFO</a></li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="astrology.html">Astrology</a></li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="astronomy.html">Astronomy</a></li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="laboratory.html">Laboratory</a>
                    </li>
                  </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="about.html"><span
                      class="rd-nav-icon mdi mdi-information"></span><span class="rd-nav-title">About</span></a>
                  <!-- RD Navbar Dropdown-->
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="about.html">About</a></li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="team.html">Team</a></li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="team-member.html">Team Member</a>
                    </li>
                  </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#"><span
                      class="rd-nav-icon mdi mdi-layers"></span><span class="rd-nav-title">Pages</span></a>
                  <!-- RD Navbar Megamenu-->
                  <ul class="rd-menu rd-navbar-megamenu">
                    <li class="rd-megamenu-item">
                      <h4 class="rd-megamenu-title">Elements</h4>
                      <ul class="rd-megamenu-list">
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="typography.html">Typography</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="buttons.html">Buttons</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a>
                        </li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid.html">Grid</a>
                        </li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="tabs-and-accordions.html">Tabs and accordions</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="progress-bars.html">Progress bars</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a>
                        </li>
                      </ul>
                    </li>
                    <li class="rd-megamenu-item">
                      <h4 class="rd-megamenu-title">News</h4>
                      <ul class="rd-megamenu-list">
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="classic-blog.html">Classic Blog</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-blog.html">Grid
                            Blog</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="single-post.html">Single Post</a></li>
                      </ul>
                    </li>
                    <li class="rd-megamenu-item">
                      <h4 class="rd-megamenu-title">Gallery</h4>
                      <ul class="rd-megamenu-list">
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="cobbles-gallery.html">Cobbles Gallery</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-gallery.html">Grid
                            Gallery</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="masonry-gallery.html">Masonry Gallery</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="single-project.html">Single Project</a></li>
                      </ul>
                    </li>
                    <li class="rd-megamenu-item">
                      <h4 class="rd-megamenu-title">Pages</h4>
                      <ul class="rd-megamenu-list">
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-page.html">404
                            Page</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503-page.html">503
                            Page</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="coming-soon.html">Coming Soon</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="under-construction.html">Under Construction</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="terms-of-use.html">Terms of Use</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="sitemap.html">Sitemap</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="services.html">Services</a></li>
                        <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                            href="single-service.html">Single Service</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html"><span
                      class="rd-nav-icon mdi mdi-email"></span><span class="rd-nav-title">Contacts</span></a>
                </li>
              </ul>
              <ul class="rd-navbar-list-link">
                <li><a href="#">News</a></li>
                <li><a href="#">Documentary</a></li>
                <li><a href="#">Sightings</a></li>
                <li><a href="#">Incidents</a></li>
                <li><a href="#">ISS Tracking</a></li>
                <li><a href="#">Researching</a></li>
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
  <!-- Swiper-->
  <section class="section swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="5000"
    data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper">
      <div class="swiper-slide context-dark"
        data-slide-bg="<?php echo get_theme_file_uri('/site/images/slide-1.jpg')?>">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-7 col-xl-6 offset-md-1">
                <div class="post-erin">
                  <h5 class="post-erin-subtitle" data-caption-animate="fadeInDown" data-caption-delay="100">ufology
                  </h5>
                  <h1 class="post-erin-title"><span class="d-inline-block" data-caption-animate="fadeInRight"
                      data-caption-delay="0">UFO Hovered Over The Beach</span> <span class="d-block font-weight-light"
                      data-caption-animate="fadeInLeft" data-caption-delay="0">In Marquette, Michigan</span>
                  </h1>
                  <p class="bigger post-erin-text" data-caption-animate="fadeInUp" data-caption-delay="100">According
                    to a recent eyewitness testimony, on December 11, 2018, at 1:05 pm a UFO was spotted at the local
                    beach near Marquette, MI. This area is well known for UFO sightings.</p><a
                    class="button button-2 button-lg button-white-2 button-icon button-icon-left"
                    href="single-post.html" data-caption-animate="fadeInLeft" data-caption-delay="300"><span
                      class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide context-dark"
        data-slide-bg="<?php echo get_theme_file_uri('/site/images/slide-2.jpg')?>">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-7 col-xl-6 offset-md-1">
                <div class="post-erin">
                  <h5 class="post-erin-subtitle" data-caption-animate="fadeInDown" data-caption-delay="100">incidents
                  </h5>
                  <h1 class="post-erin-title"><span class="d-inline-block" data-caption-animate="fadeInRight"
                      data-caption-delay="0">Mysterious UFO Looks Humanoid</span> <span
                      class="d-block font-weight-light" data-caption-animate="fadeInLeft" data-caption-delay="0">As It
                      Hovers The Sky</span>
                  </h1>
                  <p class="bigger post-erin-text" data-caption-animate="fadeInUp" data-caption-delay="100">Puzzled
                    drivers were left wondering if they had captured evidence of aliens visiting Earth as the footage
                    went viral and was quickly picked up by conspiracy theory websites.</p><a
                    class="button button-2 button-lg button-white-2 button-icon button-icon-left"
                    href="single-post.html" data-caption-animate="fadeInLeft" data-caption-delay="300"><span
                      class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide context-dark"
        data-slide-bg="<?php echo get_theme_file_uri('/site/images/slide-3.jpg')?>">
        <div class="swiper-slide-caption section-md">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-7 col-xl-6 offset-md-1">
                <div class="post-erin">
                  <h5 class="post-erin-subtitle" data-caption-animate="fadeInDown" data-caption-delay="100">news</h5>
                  <h1 class="post-erin-title"><span class="d-inline-block" data-caption-animate="fadeInRight"
                      data-caption-delay="0">Former Jet Pilot Backs Up</span> <span class="d-block font-weight-light"
                      data-caption-animate="fadeInLeft" data-caption-delay="0">Claims of Officials</span>
                  </h1>
                  <p class="bigger post-erin-text" data-caption-animate="fadeInUp" data-caption-delay="100">A retired
                    fighter jet pilot has spoken out to back up a former Pentagon official who last week revealed he
                    is in charge of a secret government programme to fight back against UFO attacks.</p><a
                    class="button button-2 button-lg button-white-2 button-icon button-icon-left"
                    href="single-post.html" data-caption-animate="fadeInLeft" data-caption-delay="300"><span
                      class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-nav-style">
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev fa-arrow-left"></div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next fa-arrow-right"></div>
    </div>
  </section>

  <!-- Section Posts-->
  <section class="section section-xl bg-gray-700 text-md-left">
    <div class="container">
      <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30"
        data-mouse-drag="false" data-dots="true">
        <!-- Post Modern-->
        <article class="post post-modern box-md post-modern-2 wow fadeInUp" data-wow-delay=".1s">
          <h5 class="post-modern-tag">news</h5>
          <h4 class="post-modern-title"><a href="single-post.html">ISS Tracking: Keeping Track of the International
              Space Station</a></h4>
          <p class="post-modern-text">Orbiting the Earth at an altitude of about 400 km, the International Space
            Station (ISS) is humanity’s largest and...</p><a
            class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
              class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
        </article>
        <!-- Post Modern-->
        <article class="post post-modern box-md post-modern-2 wow fadeInUp">
          <h5 class="post-modern-tag">sightings</h5>
          <h4 class="post-modern-title"><a href="single-post.html">Dubai Witness Describes Hovering Boomerang UFO</a>
          </h4>
          <p class="post-modern-text">​A United Arab Emirates witness at Dubai reported watching a hovering,
            boomerang-shaped object that made...</p><a
            class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
              class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
        </article>
        <!-- Post Modern-->
        <article class="post post-modern box-md post-modern-2 wow fadeInUp" data-wow-delay=".1s">
          <h5 class="post-modern-tag">incidents</h5>
          <h4 class="post-modern-title"><a href="single-post.html">Media Says Strong Signal From Space May Be Alien,
              Scientists Say Probably Not</a></h4>
          <p class="post-modern-text">The media has been ablaze with the story of a strong signal from space detected
            by a team of Russian astronomers last spring...</p><a
            class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
              class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
        </article>
      </div>
    </div>
  </section>

  <!-- Section About Us-->
  <section class="section section-lg position-relative bg-default text-md-left">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xl-6">
          <h5 class="wow fadeInLeft">featured article</h5>
          <h2 class="wow fadeInRight">Existence of UFO's 'Proved Beyond Reasonable Doubt' According to Experts</h2>
          <p class="wow fadeInLeft">Luis Elizondo, the former head of a secret US government programme, believes that
            Earth may well have been visited by alien life via the unidentified aircraft and that there is also proof.
          </p>
          <p class="wow fadeInLeft" data-wow-delay=".05s">He resigned from the US Department of Defence in October to
            protest against the excessive secrecy and opposition to the programme he was in charge of. Mr. Elizondo
            could not comment whether or not his team had...</p><a
            class="button button-primary offset-xl-40 wow fadeInUp" href="about.html">Learn more</a>
        </div>
        <div class="col d-none d-md-block position-static">
          <div class="bg-image-right-2 wow slideInRight slideInCustom"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Advantages-->
  <section class="section section-xl bg-gray-700">
    <div class="container">
      <h5 class="wow fadeInRight">why choose us</h5>
      <h2 class="wow fadeInLeft">Our Advantages</h2>
      <div class="row row-xl row-30">
        <div class="col-sm-6 col-lg-3 wow fadeInUp">
          <article class="box-icon-modern">
            <div class="box-icon-modern-icon mdi mdi-book-multiple"></div>
            <h4 class="box-icon-modern-title"><a href="#">#1 UFO News Source</a></h4>
            <p class="box-icon-modern-text">Science is the leading source of all UFO-related news and associated
              research.</p>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".05s">
          <article class="box-icon-modern">
            <div class="box-icon-modern-icon mdi mdi-account-multiple"></div>
            <h4 class="box-icon-modern-title"><a href="#">Qualified Authors</a></h4>
            <p class="box-icon-modern-text">We are an experienced team of skilled journalists and ufologists.</p>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
          <article class="box-icon-modern">
            <div class="box-icon-modern-icon mdi mdi-refresh"></div>
            <h4 class="box-icon-modern-title"><a href="#">Regular Updates</a></h4>
            <p class="box-icon-modern-text">Science provides daily news and updates to our readers and subscribers.
            </p>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".15s">
          <article class="box-icon-modern">
            <div class="box-icon-modern-icon mdi mdi-history"></div>
            <h4 class="box-icon-modern-title"><a href="#">Chronicles of Research</a></h4>
            <p class="box-icon-modern-text">Our articles are based on checked facts and research conducted by
              ufologists.</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscribe to Our Newsletter-->
  <section class="section parallax-container"
    data-parallax-img="<?php echo get_theme_file_uri('/site/images/bg-parallax-1.jpg')?>">
    <div class="parallax-content section-md context-dark">
      <div class="container">
        <div class="row row-20 align-items-center justify-content-center">
          <div class="col-auto wow fadeInUp">
            <h2>Subscribe for News and Updates</h2>
          </div>
          <div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 wow fadeInDown">
            <!-- RD Mailform-->
            <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global"
              data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
              <div class="form-wrap">
                <input class="form-input" id="subscribe-form-0-email" type="email" name="email"
                  data-constraints="@Email @Required" />
                <label class="form-label" for="subscribe-form-0-email">E-mail</label>
              </div>
              <div class="form-button">
                <button class="button button-icon-2 button-primary" type="submit"><span
                    class="icon mdi mdi-email-outline"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="comets comets-left"></div>
    <div class="comets comets-center"></div>
    <div class="comets comets-top"></div>
  </section>

  <!-- Section posts-->
  <section class="section section-xl bg-default">
    <div class="container">
      <h2 class="wow fadeInDown">Latest Articles</h2>
      <div class="row row-xl row-30 row-md-40 row-lg-60">
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
          <!-- Post Modern-->
          <article class="post post-modern box-md"><a class="post-modern-figure" href="single-post.html"><img
                src="<?php echo get_theme_file_uri('/site/images/post-1-370x270.jpg')?>" alt="" width="370"
                height="270" /></a>
            <h5 class="post-modern-tag">news</h5>
            <h3 class="post-modern-title"><a href="single-post.html">Iowa Witness Recalls Late Night UFO Close
                Encounter</a></h3>
            <p class="post-modern-text">An Iowa witness at Millerton recalled a UFO incident from the early 90s where
              the object moved over his vehicle at one...</p><a
              class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
                class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp">
          <!-- Post Modern-->
          <article class="post post-modern box-md"><a class="post-modern-figure" href="single-post.html"><img
                src="<?php echo get_theme_file_uri('/site/images/post-2-370x270.jpg')?>" alt="" width="370"
                height="270" /></a>
            <h5 class="post-modern-tag">news</h5>
            <h3 class="post-modern-title"><a href="single-post.html">Military Jets Chase Sphere UFO</a></h3>
            <p class="post-modern-text">A Georgia witness at Ty Ty reported watching a group of military jets that
              appeared to be escorting a red-orange...</p><a
              class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
                class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
          <!-- Post Modern-->
          <article class="post post-modern box-md"><a class="post-modern-figure" href="single-post.html"><img
                src="<?php echo get_theme_file_uri('/site/images/post-3-370x270.jpg')?>" alt="" width="370"
                height="270" /></a>
            <h5 class="post-modern-tag">news</h5>
            <h3 class="post-modern-title"><a href="single-post.html">Virginia Witness Recalls Multiple UFOs in Night
                Sky</a></h3>
            <p class="post-modern-text">A Virginia witness at Colonial Heights recalled a UFO encounter from the 60s
              when one large object emitted multiple...</p><a
              class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
                class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
          <!-- Post Modern-->
          <article class="post post-modern box-md"><a class="post-modern-figure" href="single-post.html"><img
                src="<?php echo get_theme_file_uri('/site/images/post-4-370x270.jpg')?>" alt="" width="370"
                height="270" /></a>
            <h5 class="post-modern-tag">news</h5>
            <h3 class="post-modern-title"><a href="single-post.html">Alleged UFO Photos Over China Lake Analyzed</a>
            </h3>
            <p class="post-modern-text">In October 2018, a curious post appeared on the Facebook page of ‘Art Bell’s
              Midnight In The Desert Feat Heather Wade’. It...</p><a
              class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
                class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp">
          <!-- Post Modern-->
          <article class="post post-modern box-md"><a class="post-modern-figure" href="single-post.html"><img
                src="<?php echo get_theme_file_uri('/site/images/post-5-370x270.jpg')?>" alt="" width="370"
                height="270" /></a>
            <h5 class="post-modern-tag">news</h5>
            <h3 class="post-modern-title"><a href="single-post.html">Arizona Witness Describes Six Hovering Discs</a>
            </h3>
            <p class="post-modern-text">An Arizona witness traveling by train through Apache County reported watching
              and photographing six hovering...</p><a
              class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
                class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
          <!-- Post Modern-->
          <article class="post post-modern box-md"><a class="post-modern-figure" href="single-post.html"><img
                src="<?php echo get_theme_file_uri('/site/images/post-6-370x270.jpg')?>" alt="" width="370"
                height="270" /></a>
            <h5 class="post-modern-tag">news</h5>
            <h3 class="post-modern-title"><a href="single-post.html">Witness Describes ‘Huge’ Rectangle UFO Under 500
                Feet</a></h3>
            <p class="post-modern-text">​A California witness at Oroville reported watching a large, rectangle-shaped
              object moving overhead under 500 feet that...</p><a
              class="button button-2 button-secondary-2 button-icon button-icon-left" href="single-post.html"><span
                class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
          </article>
        </div>
      </div><a class="button button-primary wow fadeInUp" href="grid-blog.html">View all posts</a>
    </div>
  </section>

  <!-- Section About Us-->
  <section class="section section-lg position-relative bg-gray-700 text-md-left">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-6 col-xl-5">
          <h5 class="wow fadeInLeft">who we are</h5>
          <h2 class="wow fadeInRight">A Few Words About Us</h2>
          <p class="wow fadeInLeft">Science is a research-based organization with a mission to investigate and report
            evidence of extra-terrestrial, UFO, and other phenomena to a global audience. Our team provides daily
            news, updates, and articles about UFOs.</p>
          <div class="row row-30">
            <div class="col-4 wow fadeInRight">
              <div class="counter-modern">
                <h2 class="counter-modern-number"><span class="counter">21</span>
                </h2>
                <div class="counter-modern-title">Certified <br>Authors</div>
              </div>
            </div>
            <div class="col-4 wow fadeInRight" data-wow-delay=".05s">
              <div class="counter-modern">
                <h2 class="counter-modern-number"><span class="counter">8</span>
                </h2>
                <div class="counter-modern-title">Years <br>of Experience</div>
              </div>
            </div>
            <div class="col-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="counter-modern">
                <h2 class="counter-modern-number"><span class="counter">58</span>
                </h2>
                <div class="counter-modern-title">Qualified <br>Consultants</div>
              </div>
            </div>
          </div><a class="button button-primary wow fadeInUp" href="about.html">Learn more</a>
        </div>
        <div class="col d-none d-md-block position-static">
          <div class="bg-image-right-3 wow slideInRight slideInCustom"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Our Team-->
  <section class="section section-xl bg-default">
    <div class="container">
      <h2 class="wow fadeInLeft">Our Team</h2>
      <div class="row row-xl row-30">
        <div class="col-sm-6 col-lg-3 wow fadeInUp">
          <article class="team-modern box-sm">
            <div class="team-modern-figure"><img
                src="<?php echo get_theme_file_uri('/site/images/team-4-270x270.jpg')?>" alt="" width="270"
                height="270" />
              <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get
                  in touch</a></div>
            </div>
            <h3 class="team-modern-name"><a href="team-member.html">Kimberly Douglas</a></h3>
            <h5 class="team-modern-status">chief editor</h5>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".05s">
          <article class="team-modern box-sm">
            <div class="team-modern-figure"><img
                src="<?php echo get_theme_file_uri('/site/images/team-5-270x270.jpg')?>" alt="" width="270"
                height="270" />
              <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get
                  in touch</a></div>
            </div>
            <h3 class="team-modern-name"><a href="team-member.html">Eugene Wade</a></h3>
            <h5 class="team-modern-status">editor</h5>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
          <article class="team-modern box-sm">
            <div class="team-modern-figure"><img
                src="<?php echo get_theme_file_uri('/site/images/team-6-270x270.jpg')?>" alt="" width="270"
                height="270" />
              <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get
                  in touch</a></div>
            </div>
            <h3 class="team-modern-name"><a href="team-member.html">Jennifer Ortega</a></h3>
            <h5 class="team-modern-status">researcher</h5>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".15s">
          <article class="team-modern box-sm">
            <div class="team-modern-figure"><img
                src="<?php echo get_theme_file_uri('/site/images/team-7-270x270.jpg')?>" alt="" width="270"
                height="270" />
              <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get
                  in touch</a></div>
            </div>
            <h3 class="team-modern-name"><a href="team-member.html">Arthur Banks</a></h3>
            <h5 class="team-modern-status">scientist</h5>
          </article>
        </div>
      </div><a class="button button-lg button-primary wow fadeInRight" href="team.html">View all authors</a>
    </div>
  </section>

  <!-- Section Tables-->
  <section class="section section-xl position-relative bg-gray-700-invariable">
    <div class="container">
      <h2 class="wow fadeInRight">Events</h2>
      <div class="table-custom-responsive">
        <table class="table-ticket">
          <tbody>
            <tr>
              <td><a class="table-ticket-title" href="#">How UFO Sightings Influence Our Daily Lives</a></td>
              <td>
                <div class="table-ticket-info"><span class="table-ticket-icon mdi mdi-map-marker"></span><span>New
                    York, NY<br>University Hall</span></div>
              </td>
              <td>
                <div class="table-ticket-info"><span class="table-ticket-icon mdi mdi-calendar-clock"></span><span>June
                    30, 2018 <br class="d-none d-lg-block">at 6:00 pm</span></div>
              </td>
              <td>
                <div class="table-ticket-info"><span
                    class="table-ticket-icon mdi mdi-ticket-account"></span><span>$12.00</span></div>
              </td>
              <td><a class="table-ticket-link" href="#">Book a ticket</a></td>
            </tr>
            <tr>
              <td><a class="table-ticket-title" href="#">Encounters With Other Worlds - Key Numbers and Facts</a></td>
              <td>
                <div class="table-ticket-info"><span class="table-ticket-icon mdi mdi-map-marker"></span><span>Los
                    Angeles, CA<br>Conference Center</span></div>
              </td>
              <td>
                <div class="table-ticket-info"><span
                    class="table-ticket-icon mdi mdi-calendar-clock"></span><span>August 8, 2018 <br
                      class="d-none d-lg-block">at 6:00 pm</span></div>
              </td>
              <td>
                <div class="table-ticket-info"><span
                    class="table-ticket-icon mdi mdi-ticket-account"></span><span>$13.00</span></div>
              </td>
              <td><a class="table-ticket-link" href="#">Book a ticket</a></td>
            </tr>
            <tr>
              <td><a class="table-ticket-title" href="#">Theory Of Multidimensional Existence: The Basics</a></td>
              <td>
                <div class="table-ticket-info"><span class="table-ticket-icon mdi mdi-map-marker"></span><span>Seattle,
                    WA<br>National Library</span>
                </div>
              </td>
              <td>
                <div class="table-ticket-info"><span
                    class="table-ticket-icon mdi mdi-calendar-clock"></span><span>August 21, 2018 <br
                      class="d-none d-lg-block">at 6:00 pm</span></div>
              </td>
              <td>
                <div class="table-ticket-info"><span
                    class="table-ticket-icon mdi mdi-ticket-account"></span><span>$14.00</span></div>
              </td>
              <td><a class="table-ticket-link" href="#">Book a ticket</a></td>
            </tr>
            <tr>
              <td><a class="table-ticket-title" href="#">Why Ancient Cultures Are Included In The UFO Reality</a></td>
              <td>
                <div class="table-ticket-info"><span class="table-ticket-icon mdi mdi-map-marker"></span><span>Dallas,
                    TX<br>Public Library</span></div>
              </td>
              <td>
                <div class="table-ticket-info"><span
                    class="table-ticket-icon mdi mdi-calendar-clock"></span><span>September 12, 2018 <br
                      class="d-none d-lg-block">at 6:00 pm</span></div>
              </td>
              <td>
                <div class="table-ticket-info"><span
                    class="table-ticket-icon mdi mdi-ticket-account"></span><span>$15.00</span></div>
              </td>
              <td><a class="table-ticket-link" href="#">Book a ticket</a></td>
            </tr>
          </tbody>
        </table>
      </div><a class="button button-lg button-primary wow fadeInLeft" href="#">View all events</a>
    </div>
  </section>

  <!-- Section Counter Classic-->
  <section class="section section-md bg-default">
    <div class="container">
      <div class="row row-xxl row-30">
        <div class="col-6 col-md-3">
          <div class="counter-classic">
            <div class="counter-classic-icon mdi mdi-book-open-variant"></div>
            <div class="counter-classic-decor"></div>
            <h2 class="counter-classic-number"><span class="counter">89643</span>
            </h2>
            <div class="counter-classic-title">Regular Readers</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="counter-classic">
            <div class="counter-classic-icon mdi mdi-spellcheck"></div>
            <div class="counter-classic-decor"></div>
            <h2 class="counter-classic-number"><span class="counter">537</span>
            </h2>
            <div class="counter-classic-title">High Quality Articles</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="counter-classic">
            <div class="counter-classic-icon mdi mdi-star-outline"></div>
            <div class="counter-classic-decor"></div>
            <h2 class="counter-classic-number"><span class="counter">34</span>
            </h2>
            <div class="counter-classic-title">Certificates</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="counter-classic">
            <div class="counter-classic-icon mdi mdi-comment-check-outline"></div>
            <div class="counter-classic-decor"></div>
            <h2 class="counter-classic-number"><span class="counter">149</span>
            </h2>
            <div class="counter-classic-title">Registered Incidents</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-default">
    <!-- Owl Carousel-->
    <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5"
      data-autoplay="false" data-smart-speed="500">
      <!-- Thumbnail Classic-->
      <article class="thumbnail-classic thumbnail-classic-2"><a class="thumbnail-classic-figure"
          href="<?php echo get_theme_file_uri('/site/images/grid-gallery-16-1200x800-original.jpg')?>"
          data-lightgallery="item"><img
            src="<?php echo get_theme_file_uri('/site/images/grid-gallery-16-370x260.jpg')?>" alt="" width="370"
            height="260" /></a>
        <div class="thumbnail-classic-caption">
          <div>
            <div class="thumbnail-classic-icon mdi mdi-plus-circle"></div>
          </div>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail-classic thumbnail-classic-2"><a class="thumbnail-classic-figure"
          href="<?php echo get_theme_file_uri('/site/images/grid-gallery-17-1200x800-original.jpg" data-lightgallery="item')?>"><img
            src="<?php echo get_theme_file_uri('/site/images/grid-gallery-17-370x260.jpg')?>" alt="" width="370"
            height="260" /></a>
        <div class="thumbnail-classic-caption">
          <div>
            <div class="thumbnail-classic-icon mdi mdi-plus-circle"></div>
          </div>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail-classic thumbnail-classic-2"><a class="thumbnail-classic-figure"
          href="<?php echo get_theme_file_uri('/site/images/grid-gallery-18-1200x800-original.jpg')?>"
          data-lightgallery="item"><img
            src="<?php echo get_theme_file_uri('/site/images/grid-gallery-18-370x260.jpg')?>" alt="" width="370"
            height="260" /></a>
        <div class="thumbnail-classic-caption">
          <div>
            <div class="thumbnail-classic-icon mdi mdi-plus-circle"></div>
          </div>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail-classic thumbnail-classic-2"><a class="thumbnail-classic-figure"
          href="<?php echo get_theme_file_uri('/site/images/grid-gallery-19-1200x800-original.jpg')?>"
          data-lightgallery="item"><img
            src="<?php echo get_theme_file_uri('/site/images/grid-gallery-19-370x260.jpg')?>" alt="" width="370"
            height="260" /></a>
        <div class="thumbnail-classic-caption">
          <div>
            <div class="thumbnail-classic-icon mdi mdi-plus-circle"></div>
          </div>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail-classic thumbnail-classic-2"><a class="thumbnail-classic-figure"
          href="<?php echo get_theme_file_uri('/site/images/grid-gallery-20-1200x800-original.jpg')?>"
          data-lightgallery="item"><img
            src="<?php echo get_theme_file_uri('/site/images/grid-gallery-20-370x260.jpg')?>" alt="" width="370"
            height="260" /></a>
        <div class="thumbnail-classic-caption">
          <div>
            <div class="thumbnail-classic-icon mdi mdi-plus-circle"></div>
          </div>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail-classic thumbnail-classic-2"><a class="thumbnail-classic-figure"
          href="<?php echo get_theme_file_uri('/site/images/grid-gallery-6-1200x800-original.jpg')?>"
          data-lightgallery="item"><img src="<?php echo get_theme_file_uri('/site/images/grid-gallery-6-370x260.jpg')?>"
            alt="" width="370" height="260" /></a>
        <div class="thumbnail-classic-caption">
          <div>
            <div class="thumbnail-classic-icon mdi mdi-plus-circle"></div>
          </div>
        </div>
      </article>
      <!-- Thumbnail Classic-->
      <article class="thumbnail-classic thumbnail-classic-2"><a class="thumbnail-classic-figure"
          href="<?php echo get_theme_file_uri('/site/images/grid-gallery-8-1200x800-original.jpg')?>"
          data-lightgallery="item"><img src="<?php echo get_theme_file_uri('/site/images/grid-gallery-8-370x260.jpg')?>"
            alt="" width="370" height="260" /></a>
        <div class="thumbnail-classic-caption">
          <div>
            <div class="thumbnail-classic-icon mdi mdi-plus-circle"></div>
          </div>
        </div>
      </article>
    </div>
  </section>
  <?php } 
get_footer();?>