<?php
  namespace Shortlinks;
  
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  add_action ('init', function () {
    $path = $_SERVER['REQUEST_URI'];
    if ($path) {
      $args = [
        'fields'=> 'ids',
        'post_type'=> 'shortlink',
        'meta_key'=> 'path',
        'meta_value'=> $path
      ];
      
      $id = get_posts($args)[0];
      if ($id) {
        $url = get_post_meta($id, "url", true);
        if ($url) {
          wp_redirect($url);
          exit;
        }
      }
    } 
  });
  
?>