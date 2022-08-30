<?php
  namespace Shortlinks;
  
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  add_action ('init', function () {
    register_post_type('shortlink', array (
      'labels' => array (
        'name'               => __( 'Header Shortlinks', SHORTLINKS_DOMAIN),
        'singular_name'      => __( 'Header Shortlink', SHORTLINKS_DOMAIN),
        'add_new'            => __( 'Add Shortlink', SHORTLINKS_DOMAIN),
        'add_new_item'       => __( 'Add New Shortlink', SHORTLINKS_DOMAIN),
        'edit_item'          => __( 'Edit Shortlink', SHORTLINKS_DOMAIN),
        'new_item'           => __( 'New Shortlink', SHORTLINKS_DOMAIN),
        'view_item'          => __( 'View Shortlink', SHORTLINKS_DOMAIN),
        'search_items'       => __( 'Search Shortlinks', SHORTLINKS_DOMAIN),
        'not_found'          => __( 'No Shortlinks found', SHORTLINKS_DOMAIN),
        'not_found_in_trash' => __( 'No Shortlinks in trash', SHORTLINKS_DOMAIN),
        'menu_name'          => __( 'Shortlinks', SHORTLINKS_DOMAIN),
        'all_items'          => __( 'Shortlinks', SHORTLINKS_DOMAIN)
      ),
      'menu_icon' => 'dashicons-admin-links',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'supports' => ['title']
    ));
  });  
?>