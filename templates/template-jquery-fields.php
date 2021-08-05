<?php
/**
 * Template Name: Jquery Fields Templates
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
  <div class="entry-content jquery-fields-custom" style="margin: 200px !important;">
  	<h2>Date Time Picker</h2>
  	<?php if ( $date_time_picker = get_field( 'date_time_picker' ) ) : ?>
		<?php echo esc_html( $date_time_picker ); ?>
	<?php endif; ?>  

	<h2>Date Picker</h2>	
	<?php if ( $date_picker = get_field( 'date_picker' ) ) : ?>
		<?php echo esc_html( $date_picker ); ?>
	<?php endif; ?>

	<h2>Time Picker</h2>
	<?php if ( $time_picker = get_field( 'time_picker' ) ) : ?>
		<?php echo esc_html( $time_picker ); ?>
	<?php endif; ?>

	<h2>Color Picker</h2>
	<?php if ( $color_picker = get_field( 'color_picker' ) ) : ?>
		<?php echo esc_html( $color_picker ); ?>
	
	<style>
		.entry-content{
			background-color: <?php echo $color_picker ?> !important;
		}
	</style>
	<?php endif; ?>
  </div>
</main>


