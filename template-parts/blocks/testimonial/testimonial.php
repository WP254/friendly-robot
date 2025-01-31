<?php		
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Block preview
if( !empty( $block['data']['__is_preview'] ) ) { ?>
	<figure>
		<img src="https://placeimg.com/150/150/animals" alt="">
	</figure>
<?php } ?>

<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

if( $is_preview ) {
    $className .= ' is-admin';
}

// Load values and assing defaults.
$text = get_field('testimonial') ?: 'Your testimonial here...';
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="testimonial-blockquote">
        <span class="testimonial-text"><?php echo $text; ?></span><br>
        <span class="testimonial-author">By: <?php echo $author; ?></span><br>
        <span class="testimonial-role">Role: <?php echo $role; ?></span>
    </blockquote>
    <div class="testimonial-image">
        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
    </div>
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
    </style>
</div>

