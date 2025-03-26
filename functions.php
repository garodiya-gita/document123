<?php
	session_start();
	add_theme_support('menus');
	function my_primary_menu()
	{
	 register_nav_menus(array(
	'header_menu' => _( 'Header menu' ),
    'footer_menu' =>_('Footer Menu'),
    'footer_menu2' =>_('Footer Menu2')
	 ));
	}
	add_action('init','my_primary_menu');
	add_theme_support('widgets');
	add_theme_support('custom-logo');
	add_theme_support( 'title-tag' );
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'post-thumbnails' ); 


    add_action( 'customize_register', 'theme_customize_register' );
    function theme_customize_register( $wp_customize ) {
    
         // Add a new section
        $wp_customize->add_section( 'top_header_section' , array(
                'title'      => __( 'Top Header Section', 'mytheme' ),
                'priority'   => 30, 
                ) );
                
         // Add a new setting
         $wp_customize->add_setting( 'top_header_title' , array(
                    'default'   => '',
                    
                ) );
    
        // Control for 
        $wp_customize->add_control( 'top_header_title', 
            array(
                'type'        => 'text',
                'section'     => 'top_header_section',
                'label'       => 'Top Header Title',
                
            ));

          //main Header  

           // Add a new section
     $wp_customize->add_section( 'header_section' , array(
        'title'      => __( 'Header Section', 'mytheme' ),
        'priority'   => 30, 
        ) );

            // Add a new setting
            $wp_customize->add_setting( 'header_logo' , array(
            'default'   => '',
            'sanitize_callback' => 'esc_url_raw',

            ) );

            // Control for 
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
            'label'    => __( 'Header Logo', 'themename' ),
            'section'  => 'header_section',

            ) ) );

    // Footer Section

     // Add a new section
     $wp_customize->add_section( 'footer_section' , array(
        'title'      => __( 'Footer Section', 'mytheme' ),
        'priority'   => 30, 
        ) );

        $wp_customize->add_setting("footer_address", [
            "default" => "",
            'sanitize_callback' => 'wp_kses_post',
            
        ]);
    
        $wp_customize->add_control('footer_address', array(
            'label'    => __( 'Footer Address', 'themename' ),
            'section'  => 'footer_section',
            'type'=>'textarea'
            
        ) );

        $wp_customize->add_setting( 'facebook_link' , array(
            'default'   => '',
            
        ) );
    
        // Control for 
        $wp_customize->add_control( 'facebook_link', 
            array(
                'type'        => 'text',
                'section'     => 'footer_section',
                'label'       => 'Facebook Link',
                
            ));

    
$wp_customize->add_setting( 'twitter_link' , array(
            'default'   => '',
            
        ) );
    
        // Control for 
        $wp_customize->add_control( 'twitter_link', 
            array(
                'type'        => 'text',
                'section'     => 'footer_section',
                'label'       => 'Twitter Link',
                
            ));
    
            
           
    
        $wp_customize->add_setting( 'linkedin_link' , array(
            'default'   => '',
            
        ) );
    
        // Control for 
        $wp_customize->add_control( 'linkedin_link', 
            array(
                'type'        => 'text',
                'section'     => 'footer_section',
                'label'       => 'Linkedin Link',
                
            ));
    
    
    
            
    
        $wp_customize->add_setting( 'instagram_link' , array(
            'default'   => '',
            
        ) );
    
        // Control for 
        $wp_customize->add_control( 'instagram_link', 
            array(
                'type'        => 'text',
                'section'     => 'footer_section',
                'label'       => 'Insatgram Link',
                
            ));


            $wp_customize->add_setting( 'copyright_title' , array(
                'default'   => '',
                
            ) );
        
            // Control for 
            $wp_customize->add_control( 'copyright_title', 
                array(
                    'type'        => 'textarea',
                    'section'     => 'footer_section',
                    'label'       => 'Copyright Title',
                    
                ));
        
         // Add a new setting
         $wp_customize->add_setting( 'payment_image' , array(
            'default'   => '',
            'sanitize_callback' => 'esc_url_raw',

            ) );

            // Control for 
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'payment_image', array(
            'label'    => __( 'Footer Payment Image', 'themename' ),
            'section'  => 'footer_section',

            ) ) );


        }


//svg fille uplaod
        function cc_mime_types($mimes) {
            $mimes['svg'] = 'image/svg+xml';
            return $mimes;
        }
        add_filter('upload_mimes', 'cc_mime_types');


//custom post type
function wpp_register_post_type() {
    //the label format is 'label_type' => __('label_display', 'textdomain')
    $labels = array(
        'name' => __( 'Shoes', 'plural', 'wppagebuilders' ),
        'singular_name' => __( 'Shoe', 'singular', 'wppagebuilders' ),
        'add_new' => __( 'New Shoe', 'wppagebuilders' ),
        'add_new_item' => __( 'Add New Shoe', 'wppagebuilders' ),
        'edit_item' => __( 'Edit Shoe', 'wppagebuilders' ),
        'new_item' => __( 'New Shoe', 'wppagebuilders' ),
        'view_item' => __( 'View Shoes', 'wppagebuilders' ),
        'search_items' => __( 'Search Shoes', 'wppagebuilders' ),
        'not_found' =>  __( 'No Shoes Found', 'wppagebuilders' ),
        'not_found_in_trash' => __( 'No Shoes found in Trash'),
       ); 
    
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
         'title',
         'editor',
         'excerpt',
         'custom-fields',
         'thumbnail',
         'page-attributes'
        ),
        'taxonomies' => array( 'category' ),
        'rewrite'   => array( 'slug' => 'shoe' ),
        'show_in_rest' => true
       );

       register_post_type( 'wpp_shoe', $args );

}
add_action( 'init', 'wpp_register_post_type' );


        