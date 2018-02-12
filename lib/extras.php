<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function get_related_posts( $post_id, $related_count, $args = array() ) {
    $args = wp_parse_args( (array) $args, array(
      'orderby' => 'ASC ',
      'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
    ) );

    $related_args = array(
      'post_type'      => get_post_type( $post_id ),
      'posts_per_page' => $related_count,
      'post_status'    => 'publish',
      'post__not_in'   => array( $post_id ),
      'orderby'        => $args['orderby'],
      'tax_query'      => array()
    );

    $post       = get_post( $post_id );
    $taxonomies = get_object_taxonomies( $post, 'names' );

    foreach ( $taxonomies as $taxonomy ) {
      $terms = get_the_terms( $post_id, $taxonomy );
      if ( empty( $terms ) ) {
        continue;
      }
      $term_list                   = wp_list_pluck( $terms, 'slug' );
      $related_args['tax_query'][] = array(
        'taxonomy' => $taxonomy,
        'field'    => 'slug',
        'terms'    => $term_list
      );
    }

    if ( count( $related_args['tax_query'] ) > 1 ) {
      $related_args['tax_query']['relation'] = 'OR';
    }

    if ( $args['return'] == 'query' ) {
      return new \WP_Query( $related_args );
    } else {
      return $related_args;
    }
}

