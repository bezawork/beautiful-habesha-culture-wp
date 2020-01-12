<?php
get_header();
while(have_posts()){
  the_post(); ?>
<section class="breadcrumbs-modern box-transform-wrap bg-image context-dark"
  style="background-image: url(images/bg-breadcrumbs.jpg);">
  <div class="container">
    <div class="breadcrumbs-modern-body">
      <h5 class="breadcrumbs-modern-subtitle"></h5>
      <h1 class="breadcrumbs-modern-title"><?php the_title()?></h1>
    </div>
    <ul class="breadcrumbs-path breadcrumbs-modern-path">
      <li><a href="<?php echo get_site_url('front-page.php')?>">Home</a></li>
      <li class="active">About Us</li>
    </ul>
  </div>
  <div class="box-transform"
    style="background-image: url(<?php echo get_theme_file_uri('/site/images/bg-breadcrumbs.jpg') ?>);"></div>
  <div class="comets comets-left"></div>
  <div class="comets comets-center"></div>
  <div class="comets comets-top"></div>
</section>
<!-- Section About Us-->
<section class="section section-xl bg-gray-700 text-md-left">
  <div class="container">
    <div class="row row-30">
      <div class="col-sm-6 col-lg-4">
        <h4>Why Choose Us</h4>
        <p class="text-width-xl-90">Lorem ipsum dolor sit amet, sit habeo deseruisse eloquentiam et, nec rebum albucius
          in. Ne adhuc prodesset vel. Eu case omnes definitiones mei. Eu iudico libris option duo, in pertinacia
          democritum.</p>
      </div>
      <div class="col-sm-6 col-lg-4">
        <h4>Our Mission</h4>
        <p class="text-width-xl-90">Lorem ipsum dolor sit amet, sit habeo deseruisse eloquentiam et, nec rebum albucius
          in. Ne adhuc prodesset vel. Eu case omnes definitiones mei. Eu iudico libris option duo, in pertinacia
          democritum.</p>
      </div>
      <div class="col-lg-4">
        <h4>What We Do</h4>
        <p class="text-width-xl-90">Lorem ipsum dolor sit amet, sit habeo deseruisse eloquentiam et, nec rebum albucius
          in. Ne adhuc prodesset vel. Eu case omnes definitiones mei. Eu iudico libris option duo, in pertinacia
          democritum.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Advantages-->
<section class="section section-xl bg-default">
  <div class="container">
    <h2>Our Advantages</h2>
    <div class="row row-xl row-30">
      <div class="col-sm-6 col-lg-3">
        <article class="box-icon-modern">
          <div class="box-icon-modern-icon mdi mdi-book-multiple"></div>
          <h4 class="box-icon-modern-title"><a href="#">Reliable Source</a></h4>
          <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, id ignota deterruisset usu, per ut autem
            salutandi.</p>
        </article>
      </div>
      <div class="col-sm-6 col-lg-3">
        <article class="box-icon-modern">
          <div class="box-icon-modern-icon mdi mdi-account-multiple"></div>
          <h4 class="box-icon-modern-title"><a href="#">Qualified Authors</a></h4>
          <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, id ignota deterruisset usu, per ut autem
            salutandi.</p>
        </article>
      </div>
      <div class="col-sm-6 col-lg-3">
        <article class="box-icon-modern">
          <div class="box-icon-modern-icon mdi mdi-refresh"></div>
          <h4 class="box-icon-modern-title"><a href="#">Regular Updates</a></h4>
          <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, id ignota deterruisset usu, per ut autem
            salutandi.</p>
        </article>
      </div>
      <div class="col-sm-6 col-lg-3">
        <article class="box-icon-modern">
          <div class="box-icon-modern-icon mdi mdi-history"></div>
          <h4 class="box-icon-modern-title"><a href="#">Chronicles of Research</a></h4>
          <p class="box-icon-modern-text">Lorem ipsum dolor sit amet, id ignota deterruisset usu, per ut autem
            salutandi.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- Section CEO & Founder-->
<section class="section section-xl position-relative bg-gray-700 text-md-left">
  <div class="container">
    <div class="row">
      <div class="col d-none d-md-block position-static">
        <div class="bg-image-left-1 wow slideInLeft slideInCustom"></div>
      </div>
      <div class="col-md-7 col-lg-6 col-xl-5">
        <h5 class="wow fadeInRight">CEO & Founder</h5>
        <h2 class="wow fadeInRight">Ethan Ford</h2>
        <p class="offset-xl-55 wow fadeInRight">Lorem ipsum dolor sit amet, sit habeo deseruisse eloquentiam et, nec
          rebum albucius in. Ne adhuc prodesset vel. Eu case omnes definitiones mei. Eu iudico libris option duo, in
          pertinacia democritum.</p>
        <!-- Linear progress bar-->
        <article class="progress-linear">
          <div class="progress-header">
            <p class="progress-header-title">Astrology</p><span class="progress-value">20</span>
          </div>
          <div class="progress-bar-linear-wrap">
            <div class="progress-bar-linear"></div>
          </div>
        </article>
        <!-- Linear progress bar-->
        <article class="progress-linear">
          <div class="progress-header">
            <p class="progress-header-title">Astronomy</p><span class="progress-value">85</span>
          </div>
          <div class="progress-bar-linear-wrap">
            <div class="progress-bar-linear"></div>
          </div>
        </article>
        <!-- Linear progress bar-->
        <article class="progress-linear">
          <div class="progress-header">
            <p class="progress-header-title">Ufology</p><span class="progress-value">50</span>
          </div>
          <div class="progress-bar-linear-wrap">
            <div class="progress-bar-linear"></div>
          </div>
        </article>
        <!-- Linear progress bar-->
        <article class="progress-linear">
          <div class="progress-header">
            <p class="progress-header-title">Laboratory Research</p><span class="progress-value">95</span>
          </div>
          <div class="progress-bar-linear-wrap">
            <div class="progress-bar-linear"></div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- Section Our Team-->
<section class="section section-xl bg-default">
  <div class="container">
    <h2>Our Team</h2>
    <div class="row row-xl row-30">
      <div class="col-sm-6 col-lg-3 wow fadeInUp">
        <article class="team-modern box-sm">
          <div class="team-modern-figure"><img src="<?php echo get_theme_file_uri('/site/images/team-4-270x270.jpg')?>"
              alt="" width="270" height="270" />
            <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get in
                touch</a></div>
          </div>
          <h3 class="team-modern-name"><a href="team-member.html">Kimberly Douglas</a></h3>
          <h5 class="team-modern-status">chief editor</h5>
        </article>
      </div>
      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".05s">
        <article class="team-modern box-sm">
          <div class="team-modern-figure"><img src="<?php echo get_theme_file_uri('/site/images/team-5-270x270.jpg') ?>"
              alt="" width="270" height="270" />
            <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get in
                touch</a></div>
          </div>
          <h3 class="team-modern-name"><a href="team-member.html">Eugene Wade</a></h3>
          <h5 class="team-modern-status">editor</h5>
        </article>
      </div>
      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
        <article class="team-modern box-sm">
          <div class="team-modern-figure"><img src="<?php echo get_theme_file_uri('/site/images/team-6-270x270.jpg') ?>"
              alt="" width="270" height="270" />
            <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get in
                touch</a></div>
          </div>
          <h3 class="team-modern-name"><a href="team-member.html">Jennifer Ortega</a></h3>
          <h5 class="team-modern-status">researcher</h5>
        </article>
      </div>
      <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".15s">
        <article class="team-modern box-sm">
          <div class="team-modern-figure"><img src="<?php echo get_theme_file_uri('/site/images/team-7-270x270.jpg') ?>"
              alt="" width="270" height="270" />
            <div class="team-modern-button"><a class="button button-block button-primary" href="contacts.html">Get in
                touch</a></div>
          </div>
          <h3 class="team-modern-name"><a href="team-member.html">Arthur Banks</a></h3>
          <h5 class="team-modern-status">scientist</h5>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- Section Testimonials-->
<section class="section section-xl bg-gray-700">
  <div class="container">
    <h2>Testimonials</h2>
    <div class="row row-xl row-40">
      <div class="col-md-6 col-xl-4">
        <!-- Quote Modern-->
        <article class="quote-modern">
          <div class="unit unit-spacing-md flex-column flex-sm-row align-items-center align-items-sm-start">
            <div class="unit-left">
              <div class="quote-modern-figure"><img
                  src="<?php echo get_theme_file_uri('/site/images/user-1-80x80.jpg')?>" alt="" width="80"
                  height="80" />
              </div>
            </div>
            <div class="unit-body">
              <p class="quote-modern-author">Thomas Stanley</p>
              <div class="quote-modern-text">
                <p class="q"><?php the_content()?></p>
              </div>
            </div>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Quote Modern-->
        <article class="quote-modern">
          <div class="unit unit-spacing-md flex-column flex-sm-row align-items-center align-items-sm-start">
            <div class="unit-left">
              <div class="quote-modern-figure"><img
                  src="<?php echo get_theme_file_uri('/site/images/user-2-80x80.jpg')?>" alt="" width="80"
                  height="80" />
              </div>
            </div>
            <div class="unit-body">
              <p class="quote-modern-author">Brian Boyd</p>
              <div class="quote-modern-text">
                <p class="q"><?php the_content()?></p>
              </div>
            </div>
          </div>
        </article>
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Quote Modern-->
        <article class="quote-modern">
          <div class="unit unit-spacing-md flex-column flex-sm-row align-items-center align-items-sm-start">
            <div class="unit-left">
              <div class="quote-modern-figure"><img
                  src="<?php echo get_theme_file_uri('/site/images/user-3-80x80.jpg')?>" alt="" width="80"
                  height="80" />
              </div>
            </div>
            <div class="unit-body">
              <p class="quote-modern-author">Kimberly Garcia</p>
              <div class="quote-modern-text">
                <p class="q"><?php the_content()?></p>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div><a class="button button-primary offset-xl-70" href="#">View all testimonials</a>
  </div>
</section>

<!-- Section Links-->
<section class="section section-xs bg-default">
  <div class="container">
    <div class="row row-20">
      <div class="col-sm-6">
        <div class="box-link"><img class="box-link-figure"
            src="<?php echo get_theme_file_uri('/site/images/about-4-570x200.jpg')?>" alt="" width="570" height="200" />
          <div class="box-link-caption">
            <h2 class="box-link-title"><a href="team.html">Team</a></h2>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="box-link"><img class="box-link-figure"
            src="<?php echo get_theme_file_uri('/site/images/about-5-570x200.jpg')?>" alt="" width="570" height="200" />
          <div class="box-link-caption">
            <h2 class="box-link-title"><a href="services.html">Services</a></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } 
get_footer();?>