<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateBio extends Controller
{
  public function achievements()
  {
    $posts = get_posts([
      'post_type'       => 'achievement',
      'posts_per_page'  => '-1',
      'order'				  => 'DESC',
      'orderby'			  => 'meta_value',
      'meta_key'			=> 'achievement_date',
      'meta_type'			=> 'DATE'
    ]);

    return $posts;
  }
}
