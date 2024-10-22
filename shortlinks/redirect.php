<?php
  namespace Shortlinks;
  
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  add_action ('init', function () {
    $path = $_SERVER['REQUEST_URI'];
    if ($path) {
      if (str_starts_with($path, "/shortlink/")) {
        $args = [
          'fields'=> 'ids',
          'post_type'=> 'shortlink',
          'name'=> substr($path, 11)
        ];

        $posts = get_posts($args);
        $id = count($posts) > 0 ? $posts[0] : null;
        if ($id) {
          $url = get_post_meta($id, "url", true);
          if ($url) {
            wp_redirect($url);
            exit;
          }
        }
      } else {
        $args = [
          'fields'=> 'ids',
          'post_type'=> 'shortlink',
          'meta_key'=> 'path',
          'meta_value'=> $path
        ];

        $posts = get_posts($args);
        $id = count($posts) > 0 ? $posts[0] : null;
        if ($id) {
          $url = get_post_meta($id, "url", true);
          if ($url) {
            wp_redirect($url);
            exit;
          }
        }
      }
    } 
  });
  
?>