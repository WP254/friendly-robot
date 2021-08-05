<?php
/**
 * The template for displaying Author archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<main id="site-content" role="main">
  <div class="entry-content" style="margin: 200px !important;">


<?php
$author_id = get_the_author_meta('ID');
 if ( have_rows( 'business_details','user_'. $author_id  ) ) : ?>
	<?php while ( have_rows( 'business_details','user_'. $author_id  ) ) :
		the_row(); ?>
		
		<?php if ( $business_name = get_sub_field( 'business_name' ) ) : ?>
			<?php echo esc_html( $business_name ); ?>
		<?php endif; ?>

	
		<?php if ( have_rows( 'payment_details','user_'. $author_id  ) ) : ?>
			<?php while ( have_rows( 'payment_details','user_'. $author_id  ) ) :
				the_row(); ?>
				<?php if ( $account_bsb = get_sub_field( 'account_bsb' ) ) : ?>
					<?php echo esc_html( $account_bsb ); ?>
				<?php endif; ?>

				<?php if ( $account_name = get_sub_field( 'account_name' ) ) : ?>
					<?php echo esc_html( $account_name ); ?>
				<?php endif; ?>

				<?php if ( $account_number = get_sub_field( 'account_number' ) ) : ?>
					<?php echo esc_html( $account_number ); ?>
				<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>	

	<?php endwhile; ?>
<?php endif; ?>

