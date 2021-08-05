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

wp_enqueue_script("jquery"); 

get_header(); 

?>

<div id="archive-filters">
<?php foreach( $GLOBALS['my_query_filters'] as $key => $name ): 
    
    // get the field's settings without attempting to load a value
    $field = get_field_object($key, false, false);
    
    
    // set value if available
    if( isset($_GET[ $name ]) ) {
        
        $field['value'] = explode(',', $_GET[ $name ]);
        
    }
    
    
    // create filter
    ?>
    <div class="filter" data-filter="<?php echo $name; ?>">
        <?php create_field( $field ); ?>
    </div>
    
<?php endforeach; ?>
</div>

<script type="text/javascript">
(function($) {
    
    // change
    $('#archive-filters').on('change', 'input[type="checkbox"]', function(){

        // vars
        var url = '<?php echo home_url('property'); ?>';
            args = {};
            
        
        // loop over filters
        $('#archive-filters .filter').each(function(){
            
            // vars
            var filter = $(this).data('filter'),
                vals = [];
            
            
            // find checked inputs
            $(this).find('input:checked').each(function(){
    
                vals.push( $(this).val() );
    
            });
            
            
            // append to args
            args[ filter ] = vals.join(',');
            
        });
        
        
        // update url
        url += '?';
        
        
        // loop over args
        $.each(args, function( name, value ){
            
            url += name + '=' + value + '&';
            
        });
        
        
        // remove last &
        url = url.slice(0, -1);
        
        
        // reload page
        window.location.replace( url );
        

    });

})(jQuery);
</script>

<?php

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content/content-page' );

    // If comments are open or there is at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
endwhile; // End of the loop.

get_footer();