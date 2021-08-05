<?php

/**
 * Button Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'button-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$target = get_field('button_link_target');
$button_text = get_field('button_text');
$block_bg = get_field('block_background');
$btn_align = get_field('button_alignment');

if ('white' == get_field('button_background')) {
	$className = $className . ' has-white-background-color';
}

if ('white' == $block_bg) {
    $bg_class = ' has-white-background-color';
} elseif ('black' == $block_bg) {
    $bg_class = ' has-black-background-color';
} elseif ('gray' == $block_bg) {
    $bg_class = ' has-gray-background-color';
} elseif ('purple' == $block_bg) {
    $bg_class = ' has-purple-background-color';
}

if ('left' == $btn_align) {
    $align_class = ' btn-align-left';
} elseif ('center' == $btn_align) {
    $align_class = ' btn-align-center';
} elseif ('right' == $btn_align) {
    $align_class = ' btn-align-center';
}

?>
<div id="<?php echo $id; ?>" class="button-container<?php echo $bg_class ?><?php echo $align_class ?>">
<a
	href="<?php echo $target; ?>"
	class="acf-button-block button uppercase <?php echo $className; ?>"
	
	<?php if (get_field('open_in_new_tab')) : echo 'target="_blank"'; endif; ?>
>
	<?php echo $button_text; ?>
</a>
</div>
