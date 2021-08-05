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

<h1><?php the_title(); ?></h1>

<?php if( get_field('testimonial_content') ): ?>
<p><?php the_field('testimonial_content'); ?></p>
<?php endif; ?>

<div class="image">
<?php $image = get_field('testimonial_picture'); ?>
<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<div class="name">
<?php if( get_field('testimonial_name') ): ?>
<p><?php the_field('testimonial_name'); ?></p>
<?php endif; ?>
<?php if( get_field('testimonial_location') ): ?>
<p><?php the_field('testimonial_location'); ?></p>
<?php endif; ?>
</div>