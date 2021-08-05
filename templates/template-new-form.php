<?php
/**
 * Template Name: Frontend
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
acf_form_head();

get_header();
?>
  <style>
        .para{
            padding-top: 100px !important
        }
  </style>
<?php 
$new_post= array(
      // code I am using to test out
             'post_id' => 'new_post', 
             'post_status'   => 'publish',
             'field' => array('12115'), //
             // 'form' => true,
             'post_title'	=> false,
             'uploader' => 'basic',
             // 'post_content' => true,             
             'submit_value' => 'update',
             'field_el' => '<p class="para">',
            );
acf_form( $new_post);

acf_enqueue_uploader(); ?>
