<?php
/* 
template name: ABOUT ME
* Template Post Type: post, page

 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
  <div class="entry-content" style="margin: 200px !important;">

<p class="about-me-para"><?php 

// get values
// Load value.
$iframe = get_field('oembed');

// Use preg_match to find iframe src.
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];

// Add extra parameters to src and replcae HTML.
$params = array(
    'controls'  => 0,  /*This will disable controller*/
    'hd'        => 1,
     'autohide'  => 1,
    'autoplay' => 1 /*This will disable auto play*/
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);

// Add extra attributes to iframe HTML.
$attributes = 'frameborder="0"';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

// Display customized HTML.
echo $iframe;
?>
