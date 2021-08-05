<?php
/**
 * Template Name: Taxonomy Specific template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
  <div class="entry-content" style="margin: 200px !important;">


<?php
$post_type = 'progetto';
$taxonomy = 'area_progetti';

$args = array(
	'post_type'			=> $post_type,
	'posts_per_page' 	=> -1,
	'orderby' => 'title',
	'order'				=> 'DSC',			
	'tax_query'	=> array(
		array(
			'taxonomy'	=> $taxonomy,
			'field'		=> 'slug',
			'terms'		=> array('architettura'), //exact same configuration
		),
	),
);
$progetto = new WP_Query( $args ); ?>

<?php if( $progetto->have_posts() ): ?>
<?php while( $progetto->have_posts() ) : $progetto->the_post(); ?>
<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                

                <?php the_post_thumbnail(); ?>

<p><?php the_content();?></p>
<?php endwhile; endif; ?>
<?php wp_reset_query(); // reset the query ?>


