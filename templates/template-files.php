<?php
/**
 * Template Name: testing page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<?php
 $args = array(
    // 'posts_per_page'    => -1,
    'post_type'         => 'post',
    'post_status' => 'publish',
    'order' => 'ASC',
    'meta_key' => 'show_projects_archive',
    'meta_value' => 'show',
);

$project = new WP_Query( $args );
if( $project->have_posts() ) :
?>
<ul>
<?php
while( $project->have_posts() ) :
$project->the_post();
?>
<li>

<div class="feat">
<a href="<?php the_permalink(); ?>" class="feat-img">
<?php the_post_thumbnail( 'full','feat-project' ) ?></a>
</div>
<div class="info">
<a href="<?php the_permalink(); ?>" class="arrow">
<h3><?php the_title(); ?>
<img src="<?php echo home_url(); ?>/wp-content/themes/astra-child-gwtb/img/long-arrow-r.png">
</h3>
</a>

<?php the_field( 'bullets' ); ?>
<p class="project-link"><a href="<?php the_permalink(); ?>">View Project</a></p>
</div>

</li>
<?php
endwhile;
wp_reset_postdata();
?>
</ul>
<?php
else :
esc_html_e( 'No projects exist!', 'gwtb' );
endif;
?>
</section>