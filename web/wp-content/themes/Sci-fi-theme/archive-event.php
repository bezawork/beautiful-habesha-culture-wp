<?php get_header()?>
<!--Powers the archive-event page -->

<section class="breadcrumbs-modern box-transform-wrap bg-image context-dark"
  style="background-image: url(/site/images/bg-breadcrumbs.jpg);">
  <div class="container">
    <div class="breadcrumbs-modern-body">

      <h1 class="breadcrumbs-modern-title"> All Events</h1>
      <br>
      <h5 class="breadcrumbs-modern-subtitle">See what is going on in the world of cyphrons</h5>
    </div>
  </div>
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

        <section class="section section-xl bg-gray-700-invariable context-dark">
          <div class="container">
            <h2>What happened when</h2>
            <div class="table-custom-responsive">
              <!--WP_QUERY is created by wordpress to load pages from other pages. For instance if you want to get the title of another page than the one you are working on. You can use the_title() function after using WP_QUERY-->
              <?php

        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $homepageEvents = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'event',
          'orderby'=>'post_date',
          'order'=>'DESC',
          'paged' => $paged,
        ));
        ?>
              <table class="table-ticket">
                <tbody>
                  <?php
                while($homepageEvents -> have_posts()){
                   $homepageEvents->the_post();?>
                  <tr>
                    <td><a class="table-ticket-title" href="<?php echo the_permalink()?>"><?php the_title()?></a>
                    </td>
                    <td>
                      <div class="table-ticket-info"><span class="table-ticket-icon mdi mdi-map-marker"></span><span>New
                          York,
                          NY<br>University Hall</span></div>
                    </td>
                    <td>
                      <div class="table-ticket-info"><span
                          class="table-ticket-icon mdi mdi-calendar-clock"></span><span>
                          <?php echo(the_field('event_date'))
                          ?>
                          <br class="d-none d-lg-block">at 6:00 pm</span></div>
                    </td>
                  </tr>



                  <?php } wp_reset_postdata();?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <!-- Bootstrap Pagination -->
        <div class="pagination-wrap">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <?php 
              $paginate_customise = function($link) {
                // Work with paginate_links only returning pages as HTML
                $active = strpos($link, 'current') ? ' active' : '';
                $link = str_replace("page-numbers", "page-link", $link);
                return '<li class="page-item'.$active.'">'.$link.'</li>';
              };
              $paginate_links = paginate_links(array(
                'type' => 'array',
                'prev_text' => __('«'),
                'next_text' => __('»'),
                'current' => max( 1, get_query_var('paged') ),
	              'total' => $homepageEvents->max_num_pages
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
                <a href="<?php the_permalink()?>">
                  <?php $args= array(
                      'title_li'            => ''
                    );
                    
                    wp_list_categories($args )?></a>

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
</section>

<?php 
  wp_footer();
  get_footer();?>