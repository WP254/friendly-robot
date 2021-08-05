<?php

$block_abbr = 'csbc';
$block_id = $block_abbr . '-' . $block['id'];
if( !empty($block['anchor']) ) {
$block_id = $block['anchor'];
}
$block_classes = 'block block-' . $block_abbr . ' ' . $block_abbr . '-' . $block['id'];
if( !empty($block['className']) ) {
$block_classes .= ' ' . $block['className'];
}

if ( $is_preview ) {
echo '';
return;
}

$allowed_blocks = array( 'core/heading', 'core/paragraph' );

$template = array(
array('core/heading', array(
'level' => 2,
'content' => 'Title Goes Here',
)),
array( 'core/paragraph', array(
'content' => 'Colorway: Style Code: Release Date: MSRP: ',
) )
);

?>
</div>
</div>
</div>
</div>

<div id="<?php echo $block_id; ?>" class="<?php echo $block_classes; ?>">
<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" template="' . esc_attr( wp_json_encode( $template ) ) . '" />'; ?>
</div>