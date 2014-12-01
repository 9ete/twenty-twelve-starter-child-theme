<?php

/*
#
#   ADD CUSTOM CONTENT TYPES 
#
*/

    /**
     * Custom Post Types, on the fly creation
     *
     **/

    // function lm_custom_post_type_creator($post_type_name, $description, $public, $menu_position, $supports, $has_archive, $irreg_plural) {
    //   if ($irreg_plural) {$plural = 's';} else {$plural = '';}
    //   $labels = array(
    //     'name'               => _x( $post_type_name, 'post type general name' ),
    //     'singular_name'      => _x( strtolower($post_type_name), 'post type singular name' ),
    //     'add_new'            => _x( 'Add New', 'book' ),
    //     'add_new_item'       => __( 'Add New '.$post_type_name),
    //     'edit_item'          => __( 'Edit '.$post_type_name ),
    //     'new_item'           => __( 'New '.$post_type_name ),
    //     'all_items'          => __( 'All '.$post_type_name.$plural ),
    //     'view_item'          => __( 'View '.$post_type_name ),
    //     'search_items'       => __( 'Search'.$post_type_name.$plural ),
    //     'not_found'          => __( 'No '.$post_type_name.$plural.' found' ),
    //     'not_found_in_trash' => __( 'No '.$post_type_name.$plural.' found in the Trash' ), 
    //     'parent_item_colon'  => '',
    //     'menu_name'          => $post_type_name
    //   );
    //   $args = array(
    //     'labels'        => $labels,
    //     'description'   => $description,
    //     'public'        => $public,
    //     'menu_position' => $menu_position,
    //     'supports'      => $supports,
    //     'has_archive'   => $has_archive,
    //   );
    //   register_post_type( $post_type_name, $args ); 
    // }
    // add_action( 'init', lm_custom_post_type_creator('Testimonials', 'Holds our testimonials', true, 4, array( 'title', 'editor', 'thumbnail' ), true, false));
    // add_action( 'init', lm_custom_post_type_creator('Staff', 'Holds our staff specific data', true, 5, array( 'title', 'editor', 'thumbnail' ), true, false));
    // add_action( 'init', lm_custom_post_type_creator('Car Care Tips', 'Holds our car care tips.', true, 6, array( 'title', 'editor', 'thumbnail', 'excerpt' ), true, false));
    // add_action( 'init', lm_custom_post_type_creator('Car Care Videos', 'Holds our car care videos.', true, 7, array( 'title', 'editor', 'thumbnail' ), true, false));

    /**
     * Adds a box to the main column on the Post and Page edit screens.
     */
    // function lm_add_meta_box() {
    //     add_meta_box(
    //         'lm_staff_position',
    //         __( 'Staff Position', 'lm_textdomain' ),
    //         'lm_meta_box_callback',
    //         'staff',//$screen
    //         'side',
    //         'high'
    //     );

    //     add_meta_box(
    //         'lm_testimonials_source',
    //         __( 'Testimonial Source', 'lm_textdomain' ),
    //         'lm_meta_box_callback',
    //         'testimonials',//$screen
    //         'side',
    //         'high'
    //     );
    // }
    // add_action( 'add_meta_boxes', 'lm_add_meta_box' );

    /**
     * Prints the box content.
     * 
     * @param WP_Post $post The object for the current post/page.
     */
    // function lm_meta_box_callback( $post ) {

    //     // Add an nonce field so we can check for it later.
    //     wp_nonce_field( 'lm_meta_box', 'lm_meta_box_nonce' );

        
    //      * Use get_post_meta() to retrieve an existing value
    //      * from the database and use the value for the form.
         
    //     $value = get_post_meta( $post->ID, '_lm_meta_value_key', true );

    //     echo '<label for="lm_new_field">';
    //     _e( '', 'lm_textdomain' );
    //     echo '</label> ';
    //     echo '<input type="text" id="lm_new_field" name="lm_new_field" value="' . esc_attr( $value ) . '" size="25" />';
    // }

    /**
     * When the post is saved, saves our custom data.
     *
     * @param int $post_id The ID of the post being saved.
     */
    // function lm_save_meta_box_data( $post_id ) {

    //     /*
    //      * We need to verify this came from our screen and with proper authorization,
    //      * because the save_post action can be triggered at other times.
    //      */

    //     // Check if our nonce is set.
    //     if ( ! isset( $_POST['lm_meta_box_nonce'] ) ) { return; }
    //     // Verify that the nonce is valid.
    //     if ( ! wp_verify_nonce( $_POST['lm_meta_box_nonce'], 'lm_meta_box' ) ) { return; }
    //     // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    //     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return; }
    //     // Check the user's permissions.
    //     if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) { if ( ! current_user_can( 'edit_page', $post_id ) ) { return; }
    //     } else { if ( ! current_user_can( 'edit_post', $post_id ) ) { return; } }

    //     /* OK, it's safe for us to save the data now. */
    //     // Make sure that it is set.
    //     if ( ! isset( $_POST['lm_new_field'] ) ) { return;  }
    //     // Sanitize user input.
    //     $my_data = sanitize_text_field( $_POST['lm_new_field'] );
    //     // Update the meta field in the database.
    //     update_post_meta( $post_id, '_lm_meta_value_key', $my_data );
    // }
    // add_action( 'save_post', 'lm_save_meta_box_data' );


/*
#
#   REGISTER JS AND CSS
#
*/

    function lowermedia_scripts() {
        // wp_enqueue_script(
        //     'continent-map',
        //     get_stylesheet_directory_uri() . '/continentmap.js',
        //     array( 'jquery' )
        // );
        //     wp_enqueue_script(
        //     'map-data',
        //     get_stylesheet_directory_uri() . '/mapdata.js',
        //     array( 'jquery' )
        // );
    }
    add_action( 'wp_enqueue_scripts', 'lowermedia_scripts' );

    function lowermedia_enqueue_parent_style() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'lowermedia_enqueue_parent_style' );

/*
#
#   Make Archives.php Include Custom Post Types
#   http://css-tricks.com/snippets/wordpress/make-archives-php-include-custom-post-types/
#
*/

    function namespace_add_custom_types( $query ) {
      if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array(
         'post', 'products'
            ));
          return $query;
        }
    }
    add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

/*
#
#   Define what post types to search
#   The hook needed to search ALL content
#
*/

    function searchAll( $query ) {
        if ( $query->is_search ) {
            $query->set( 'post_type', array( 'post', 'page', 'feed', 'products', 'people'));
        }
        return $query;
    }
    add_filter( 'the_search_query', 'searchAll' );

/*
#
#   PHONENUMBER
#   
#
*/
    function format_phonenumber( $arg ) {
        $data = '+'.$arg;
        if(  preg_match( '/^\+\d(\d{3})(\d{3})(\d{4})$/', $data,  $matches ) )
        {
            $result = $matches[1] . '-' .$matches[2] . '-' . $matches[3];
            return $result;
        }

    }

    // Add [phonenumber] shortcode
    function phonenumber_shortcode( $atts ){
        //retrieve phone number from database
        $lm_array = get_option('lowermedia_phone_number');

        //check if user is on mobile if so make the number a link
        if (wp_is_mobile())
        {
            return '<a href="tel:+'.$lm_array["id_number"].'">'.format_phonenumber($lm_array["id_number"]).'</a>';
        } else {
            return format_phonenumber($lm_array["id_number"]);
        }
    }
    add_shortcode( 'phonenumber', 'phonenumber_shortcode' );


    class lowermedia_phonenumber_settings
    {
        /**
         * Holds the values to be used in the fields callbacks
         */
        private $options;

        /**
         * Start up
         */
        public function __construct()
        {
            add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
            add_action( 'admin_init', array( $this, 'page_init' ) );
        }

        /**
         * Add options page
         */
        public function add_plugin_page()
        {
            // This page will be under "Settings"
            add_options_page(
                'Settings Admin', 
                'Phone Number', 
                'manage_options', 
                'lowermedia-setting-admin', 
                array( $this, 'create_admin_page' )
            );
        }

        /**
         * Options page callback
         */
        public function create_admin_page()
        {
            // Set class property
            $this->options = get_option( 'lowermedia_phone_number' );
            ?>
            <div class="wrap">
                <?php screen_icon(); ?>
                <h2>Phone Number</h2>           
                <form method="post" action="options.php">
                <?php
                    // This prints out all hidden setting fields
                    settings_fields( 'lowermedia_phone_options' );   
                    do_settings_sections( 'lowermedia-setting-admin' );
                    submit_button(); 
                ?>
                </form>
            </div>
            <?php
        }

        /**
         * Register and add settings
         */
        public function page_init()
        {        
            register_setting(
                'lowermedia_phone_options', // Option group
                'lowermedia_phone_number', // Option name
                array( $this, 'sanitize' ) // Sanitize
            );

            add_settings_section(
                'setting_section_id', // ID
                'My Custom Settings', // Title
                array( $this, 'print_section_info' ), // Callback
                'lowermedia-setting-admin' // Page
            );  

            add_settings_field(
                'id_number', // ID
                'ID Number', // Title 
                array( $this, 'id_number_callback' ), // Callback
                'lowermedia-setting-admin', // Page
                'setting_section_id' // Section           
            );      
       
        }

        /**
         * Sanitize each setting field as needed
         *
         * @param array $input Contains all settings fields as array keys
         */
        public function sanitize( $input )
        {
            $new_input = array();
            if( isset( $input['id_number'] ) )
                $new_input['id_number'] = absint( $input['id_number'] );

            return $new_input;
        }

        /** 
         * Print the Section text
         */
        public function print_section_info()
        {
            print 'Enter your settings below:';
        }

        /** 
         * Get the settings option array and print one of its values
         */
        public function id_number_callback()
        {
            printf(
                '<input type="text" id="id_number" name="lowermedia_phone_number[id_number]" value="%s" />',
                isset( $this->options['id_number'] ) ? esc_attr( $this->options['id_number']) : ''
            );
        }

    }

    if( is_admin() ) { $lowermedia_phonenumber_settings = new lowermedia_phonenumber_settings(); }

/*
#
#   END
#   
#
*/