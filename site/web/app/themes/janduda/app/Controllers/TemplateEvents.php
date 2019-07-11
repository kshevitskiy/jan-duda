<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateEvents extends Controller
{
  public function upcoming_events()
  {
    $date_now = date('Y-m-d H:i:s');
    $posts = get_posts([
      'post_type'       => 'event',
      'posts_per_page'  => '3',
      'meta_query' 		  => [
        'relation' 			=> 'AND',
        [
          'key'       => 'event_date',
          'compare'		=> '>',
          'value'			=> $date_now,
          'type'			=> 'DATETIME'
        ],
      ],
      'order'				  => 'ASC',
      'orderby'			  => 'meta_value',
      'meta_key'			=> 'event_date',
      'meta_type'			=> 'DATE'
    ]);

    $events = array_map(function($post) {
      return [
        'id'    => $post->ID,
        'title' => $post->post_title,
        'city'  => get_field('event_city', $post->ID),
        'date'  => get_field('event_date', $post->ID),
      ];
    }, $posts);

    return json_encode($events, true);
  }

  public function past_events()
  {
    $date_now = date('Y-m-d H:i:s');
    $posts = get_posts([
      'post_type'       => 'event',
      'posts_per_page'  => '6',
      'meta_query' 		  => [
        'relation' 			=> 'AND',
        [
          'key'       => 'event_date',
          'compare'		=> '<',
          'value'			=> $date_now,
          'type'			=> 'DATETIME'
        ],
        [
          'key'       => 'event_report',
          'compare'   => '=',
          'value'     => '1'
        ]
      ],
      'order'				  => 'ASC',
      'orderby'			  => 'meta_value',
      'meta_key'			=> 'event_date',
      'meta_type'			=> 'DATE'
    ]);

    $events = array_map(function($post) {
      return [
        'id'    => $post->ID,
        'title' => $post->post_title,
        'url'   => get_the_permalink($post->ID),
        'image' => get_the_post_thumbnail_url($post->ID, 'card-thumb'),
        'city'  => get_field('event_city', $post->ID),
        'date'  => get_field('event_date', $post->ID),
      ];
    }, $posts);

    return json_encode($events, true);
  }
}