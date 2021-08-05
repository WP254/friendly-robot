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

    $args = array (
        'post_type' => 'events',
        'numberposts' => -1
    );


    $the_query = new WP_Query($args);
    while($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="event-card" id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>">
                <p class="event-date"><?php the_field('event_date'); ?></p>
                <h2 class="event-title"><?php the_title(); ?></h2>
            </a>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>