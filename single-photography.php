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

<?php
$gallery_field = get_field( 'gallery_field' );
if ( $gallery_field ) : ?>
	<?php foreach( $gallery_field as $image ) : ?>
		<a href="<?php echo esc_url( $image['url'] ); ?>">
			<img src="<?php echo esc_url( $image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
		</a>
	<?php endforeach; ?>
<?php endif; ?>