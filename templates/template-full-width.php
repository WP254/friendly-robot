<?php
/**
 * Template Name: templates wysiwyg editor
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
<?php if ( $wysiwyg_editor = get_field( 'wysiwyg_editor' ) ) : ?>
	<?php echo $wysiwyg_editor; ?>
<?php endif; ?>

<?php
$urls = get_field( 'f_module_des', 'options' );
if ( $urls ) : ?>
	<?php foreach( $urls as $url ) : ?>
		<a href="<?php echo esc_url( $url ); ?>" ><?php echo esc_html( $url ); ?></a>
	<?php endforeach; ?>
<?php endif; ?>

<div class="col-12 col-sm-4 col-md-2 text-center text-md-left">
<?php if( get_field('f_module_des','options') ): ?>
<a href="<?php the_field('f_module_des','options'); ?>"><?php _e('Module Description', 'leviy'); ?></a>
<?php endif; ?>
</div>