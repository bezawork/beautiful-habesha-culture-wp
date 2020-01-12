<?php /* Template Name: Copy this */ ?>
<?php
get_header();
while(have_posts()){
  the_post(); ?>

<?php } 
get_footer();?>