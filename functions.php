<?php 
	 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	 function my_theme_enqueue_styles() { 
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 

// // options page
// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page(array(
// 		'page_title' 	=> 'Theme General Settings',
// 		'menu_title'	=> 'Theme Settings',
// 		'menu_slug' 	=> 'theme-general-settings',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false
// 	));
// }



// function my_acf_load_field( $field ) {
//     $field['value'] = 'blue';
//     return $field;
// }

// // Apply to all fields.
// add_filter('acf/load_field/name=color','my_acf_load_field' ) ;



// array of filters (field key => field name)
$GLOBALS['my_query_filters'] = array( 
    //'field_1'   => 'city', 
    'field_6109201af899f'   => 'bedrooms'
);


// action
add_action('pre_get_posts', 'my_pre_get_posts', 10, 1);

function my_pre_get_posts( $query ) {
    
    // bail early if is in admin
    if( is_admin() ) return;
    
    
    // bail early if not main query
    // - allows custom code / plugins to continue working
    if( !$query->is_main_query() ) return;
    
    
    // get meta query
    $meta_query = $query->get('meta_query');

    
    // loop over filters
    foreach( $GLOBALS['my_query_filters'] as $key => $name ) {
        
        // continue if not found in url
        if( empty($_GET[ $name ]) ) {
            
            continue;
            
        }
        
        
        // get the value for this filter
        // eg: http://www.website.com/events?city=melbourne,sydney
        $value = explode(',', $_GET[ $name ]);
        
        
        // append meta query
        $meta_query[] = array(
            'key'       => $name,
            'value'     => $value,
            'compare'   => 'IN',
        );
        
    } 
    
    
    // update meta query
    $query->set('meta_query', $meta_query);

}

function show_id_instead_of_title($title, $post, $field, $post_id) {
    $title =$post->ID;
    
        return $title;  
}

add_filter( 'acf/fields/post_object/result', 'show_id_instead_of_title', 10, 4 );


//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');



/**
 * A custom ACF widget.
 */
class ACF_Custom_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'acf_custom_widget', // Base ID
            __('JK | Link Widget', 'joussenkarliczek'), // Name
            array( 'description' => __( 'Fügt einen Link hinzu', 'joussenkarliczek' ), 'classname' => 'acf-custom-widget' ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        /*echo $args['before_widget'];
        if ( !empty($instance['title']) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }*/

        echo get_field('link', 'widget_' . $args['widget_id']);

        // Place your ACF code here
        /*echo $args['after_widget'];*/
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset($instance['title']) ) {
            $title = $instance['title'];
        }
        /*
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'header_action_link' ); ?>"><?php _e( 'Title' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'header_action_link' ); ?>" name="<?php echo $this->get_field_name( 'header_action_link' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
        */
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

} // class ACF_Custom_Widget

// register ACF_Custom_Widget widget
add_action( 'widgets_init', function(){
    register_widget( 'ACF_Custom_Widget' );
});

