<?php
// coding on must use plugins so that this functionalities work regardless of change of theme
function the_different_post_types(){
  register_post_type('event',array(
    'supports' => array('title','editor','excerpt'),
    'rewrite'=> array('slug'=>'events'),
    'has_archive'=>true,
    'public'=> true,
    'menu_icon'=> 'dashicons-calendar-alt',
    'labels'=> array(
      'name' => 'Events',
      'add_new_item'=>'Add New Event',
      'edit_item'=>'Edit Event',
      'all_items'=> 'All Events',
      'singlular_name'=> 'Event'
    )
  ));
}

add_action('init','the_different_post_types')
?>