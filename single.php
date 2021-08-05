<?php
/**
 * 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

?>

<main id="site-content" role="main">
  <div class="entry-content" style="margin: 200px !important;">

<?php the_content(); ?>    
<?php

//load field settings and values

$editor = get_field('editor');

?>

<p style="size: 10px !important;">
  <?php  
  if ($editor) {
  echo $editor;
}
  ?>
</p>