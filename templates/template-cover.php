<?php
/**
 * Template Name: Contact us
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



<?php if ( $contact_emails = get_field( 'contact_emails' ) ) : ?>
	<?php echo $contact_emails; ?>
<?php endif; ?>

<?php if ( $registered_address = get_field( 'registered_address' ) ) : ?>
	<?php echo $registered_address; ?>
<?php endif; ?>

<?php if ( $factory_address = get_field( 'factory_address' ) ) : ?>
	<?php echo $factory_address; ?>
<?php endif; ?>