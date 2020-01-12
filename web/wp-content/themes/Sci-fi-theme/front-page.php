<!--Powers the home page -->
<?php  get_header() ?>

<!-- Section welcome-->
<section class="section section-md bg-default context-dark section-height-1 box-transform-wrap bg-image"
  style="background-image: url(<?php echo get_theme_file_uri('/site/images/bg-index.jpg') ?>);">
  <div class="container">
    <div class="row">
      <div class="col offset-md-1">
        <div class="post-erin">
          <h5 class="post-erin-subtitle">welcome to</h5>
          <h1 class="post-erin-title">Science — HTML Multipurpose Theme<br><span class="font-weight-light">for Ufology,
              Astronomy, Astrology, and Laboratory</span></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="box-transform"
    style="background-image: url(<?php echo get_theme_file_uri('/site/images/bg-index.jpg') ?>);">
  </div>
  <div class="comets comets-left comets-long"></div>
  <div class="comets comets-center comets-long"></div>
  <div class="comets comets-top comets-long"></div>
</section>
<section class="section section-xl bg-default">
  <div class="container">
    <h2 class="wow fadeInDown">Latest Articles</h2>
    <div class="row row-xl row-30 row-md-40 row-lg-60">

      <?php
$postsonhomepage = new WP_Query(array(
  'posts_per_page' => 3
));

 while($postsonhomepage->have_posts()){
  $postsonhomepage->the_post(); ?>

      <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
        <!-- Post Modern-->
        <article class="post post-modern box-md"><a class="post-modern-figure" href="<?php the_permalink() ?>">
            <?php echo has_post_thumbnail() ? the_post_thumbnail('large') :
            '<img src="'.get_theme_file_uri('/site/images/post-7-770x524.jpg').'" alt="" width="150" height="150" />';?>

          </a>
          <h5 class="post-modern-tag"><?php echo get_the_category_list(', ') ?></h5>
          <h3 class="post-modern-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
          <p class="post-modern-text">
            <?php echo wp_trim_words(get_the_content(),18)?>
          </p><a class="button button-2 button-secondary-2 button-icon button-icon-left"
            href="<?php the_permalink() ?>"><span class="icon mdi mdi-arrow-right"></span><span>Read more</span></a>
        </article>
      </div>

      <?php } ?>
    </div>
  </div><a class="button button-primary wow fadeInUp" href="<?php echo site_url('/blog') ?>">View all posts</a>
  </div>
</section>
<!-- Section most recent three Events-->
<section class="section section-xs section-first bg-gray-700">
  <div class="container">
    <h2 class="wow fadeInLeft">Up Coming Events</h2>
    <section class="section section-xs section-last bg-gray-700">
      <div class="container">
        <div class="row row-30">
          <?php
        $homepageEvents = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'event',
          'orderby'=>'post_date',
          'order'=>'DESC'
        ));
        while($homepageEvents -> have_posts()){
          $homepageEvents->the_post();?>
          <div class="col-6 col-sm-4 wow fadeInUp">
            <div class="counter-creative">
              <h2 class="counter-creative-number">
                <?php
 echo get_field('event_date');


?>
              </h2>
              <div class="big counter-creative-title"><?php the_title()?></div>
              <p class="box-icon-modern-text"> <?php echo wp_trim_words(get_the_content(), 4)?><a
                  href="<?php the_permalink()?>"></a></p>
              <a href="<?php the_permalink()?>">Learn more</a>
              <div class="counter-creative-icon mdi mdi-table"></div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </div>
</section>

<!-- Section Support-->
<section class="section section-xs bg-primary-invariable context-dark">
  <div class="container">
    <div class="unit unit-spacing-3 align-items-center justify-content-center wow fadeInLeft">
      <div class="unit-left"><span class="icon icon-xxl mdi mdi-headset"></span></div>
      <div class="unit-body">
        <h2>Dedicated 24/7 Support</h2>
      </div>
    </div>
  </div>
</section>
<?php
wp_footer();
get_footer();
?>