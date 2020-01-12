<!-- including the header page from header.php-->
<?php get_header()?>

<!-- Here is the body -->

<section class="breadcrumbs-modern box-transform-wrap bg-image context-dark"
  style="background-image: url(/site/images/bg-breadcrumbs.jpg);">
  <div class="container">
    <div class="breadcrumbs-modern-body">
      <h5 class="breadcrumbs-modern-subtitle"></h5>
      <h1 class="breadcrumbs-modern-title"> Blog</h1>
    </div>
  </div>
  <!--Including images using wordpress ready made functions-->
  <div class="box-transform"
    style="background-image: url(<?php echo get_theme_file_uri('/site/images/bg-breadcrumbs.jpg')?>);"></div>
  <div class="comets comets-left"></div>
  <div class="comets comets-center"></div>
  <div class="comets comets-top"></div>
</section>




<section class="section section-xl bg-default text-md-left">
  <div class="container">
    <div class="row row-40 row-md-60 justify-content-between">
      <div class="col-lg-8">
        <!-- Loop to generate blogs that have been created-->
        <?php
   while(have_posts()){
    the_post(); ?>
        <article class="post post-creative">
          <a class="post-creative-figure" href="<?php the_permalink();?>">
            <?php echo has_post_thumbnail() ? the_post_thumbnail('medium_large') :
            '<img src="'.get_theme_file_uri('/site/images/post-7-770x524.jpg').'" alt="" width="770" height="524" />';?>
          </a>
          <div class="unit flex-column flex-sm-row">
            <div class="unit-left">
              <div class="post-creative-left">
                <h3 class="post-creative-title"><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                <p class="post-creative-text"><?php the_excerpt()?>.</p>
              </div>
            </div>
            <div class="unit-body">
              <div class="post-creative-right">
                <h5 class="post-creative-tag"><?php echo get_the_category_list(',')?></h5>
                <div class="post-creative-time">
                  <time datetime="2018-06-27"><?php the_time('F j,Y') ?><br> at
                    <?php the_time('g:i a') ?></time>
                </div>
              </div>
            </div>
          </div>
        </article>



        <?php } wp_reset_postdata();?>
        <!-- Bootstrap Pagination -->
        <div class="pagination-wrap">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <?php 
              $paginate_customise = function($link) {
                // Work with paginate_links only returning pages as HTML
                error_log('link is '.$link);
                $active = strpos($link, 'current') ? ' active' : '';
                $link = str_replace("page-numbers", "page-link", $link);
                return '<li class="page-item'.$active.'">'.$link.'</li>';
              };
              $paginate_links = paginate_links(array(
                'type' => 'array',
                'prev_text' => __('«'),
                'next_text' => __('»'),
              ));
              echo implode(array_map($paginate_customise, $paginate_links));
              ?>
            </ul>

          </nav>
        </div>
      </div>
      <div class="col-lg-3 aside-post">
        <div class="row row-30 row-lg-70">
          <div class="col-6 col-lg-12">
            <div class="aside-post-item">
              <h3>Categories</h3>
              <ul class="list-marked d-inline-block d-md-block">

                <?php $args= array(
                      'title_li'            => ''
                    );
                    
                    wp_list_categories($args )?>

              </ul>
            </div>
          </div>

          <div class="col-6 col-lg-12">
            <div class="aside-post-item">
              <h3>Archive</h3>
              <ul class="list-marked d-inline-block d-md-block">
                <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 )); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  </div>
</section>
<!--Including footer from footer.php and including wp_footer() to take advantage of some features created by wordpress-->
<?php 

  wp_footer();
  get_footer();?>