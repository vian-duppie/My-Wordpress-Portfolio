<?php

    if ( ! function_exists( 'keira_setup' ) ) {

	    function keira_setup() {

			// Enable support for Title Tag
			add_theme_support( 'title-tag' );

			// Enable support for Post Thumbnails on posts and pages
			add_theme_support('post-thumbnails');

			// This theme uses wp_nav_menu() in one location
			register_nav_menus(array(
				'navigation-menu' => 'Navigation Menu',
			));

			// Enable support for custom logo
			add_theme_support('custom-logo', array(

				'width'        => 80,
				'height'       => 50,
				'flex-width'   => true,
				'flex-height'  => true
		
			));

			if (!isset($content_width)) {
				$content_width = 1200;
			}

			add_theme_support( 'automatic-feed-links' );

	    }

	}

	add_action( 'after_setup_theme', 'keira_setup' );

	// Register Fonts	
	function keira_fonts_url() { 
		wp_enqueue_style( 'keira-google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap', [], null); 
	}

	function keira_scripts() {
		// Bootstrap css
        wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.css');
		
		// FontAwesome css
		wp_enqueue_style('fontawesomecss', get_template_directory_uri() . '/css/font-awesome.css');
		wp_enqueue_style('fontscss', get_template_directory_uri() . '/css/fonts.css');

		// Unicons
		wp_enqueue_style('uniconscss', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css');

		// Animate Css
		wp_enqueue_style('animatecss', get_template_directory_uri() . '/css/animate.css');
		
        // Hover Css
		wp_enqueue_style('hovercss', get_template_directory_uri() . '/css/hover-min.css');

		// Magnific Popup Css
		wp_enqueue_style('magnificpopupcss', get_template_directory_uri() . '/css/magnific-popup.css');
		
		// Main Style css
		wp_enqueue_style('homepages', get_template_directory_uri() . '/css/homepages.css');

		// Default Bg css
		wp_enqueue_style('bg', get_template_directory_uri() . '/css/default_bg.css');

		// Default Color css
		wp_enqueue_style('color', get_template_directory_uri() . '/css/default_color.css');

		// Light bg css
		if ( is_page("home2") ) {
            wp_enqueue_style('light', get_template_directory_uri() . '/css/light-bg.css');
        }

		// Blue bg css
		if ( is_page("home3") ) {
            wp_enqueue_style('blue', get_template_directory_uri() . '/css/blue-bg.css');
        }
		
		//Google Fonts
		wp_enqueue_style( 'keirafonts', keira_fonts_url(), array(), '1.0.0' );

		// Popper Js
		wp_enqueue_script('popperjs', get_template_directory_uri() . '/js/popper.min.js', array(), false, true);
				
		// Bootstrap Js
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
		
        // Velocity Js
		wp_enqueue_script('velocityjs', get_template_directory_uri() . '/js/velocity.min.js', array(), false, true);
		
		// Typed Js
		wp_enqueue_script('typedjs', get_template_directory_uri() . '/js/typed.js');

		// Navtoogle Js
		wp_enqueue_script('navtooglejs', get_template_directory_uri() . '/js/navtoogle.js', array(), false, true);
	
		// TweenMax Js
		wp_enqueue_script('TweenMaxjs', get_template_directory_uri() . '/js/TweenMax.min.js', array(), false, true);

		// Wow Js
		wp_enqueue_script('Wowjs', get_template_directory_uri() . '/js/wow.min.js');

		// Magnific Popup JS
		wp_enqueue_script('magnificpopupjs', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array(), false, true);
		wp_enqueue_script('popupjs', get_template_directory_uri() . '/js/maginficpopup.js', array(), false, true);
		
		// jquery.nicescroll JS
		wp_enqueue_script('nicescrolljs', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array(), false, true);

		// Main Js
		wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/custom.js', array(), false, true);
		
		// Cursor Js
		wp_enqueue_script('cursorjs', get_template_directory_uri() . '/js/cursor.js', array(), false, true);
		
		// Html5shiv Js
		wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js');
		wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
		// Respond Js
		wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js');
		wp_script_add_data('respond', 'conditional', 'lt IE 9');

		if ( is_singular() ) {
            wp_enqueue_script( 'comment-reply' );
        }

		if ( is_page('showcase-full') ) {
            wp_enqueue_script('animejs', get_template_directory_uri() . '/js/anime.min.js', array(), false, true);
        }

		if ( is_page('showcase-full') ) {
            wp_enqueue_style('showcase-fullcss', get_template_directory_uri() . '/css/showcase-full.css');
        }

		if ( is_page('showcase-parallax') ) {
            wp_enqueue_style('showcase-parallaxcss', get_template_directory_uri() . '/css/showcase-parallax.css');
        }

		if ( is_page('showcase-interactive-center') || is_page('showcase-interactive-inline') || is_page('showcase-interactive-center-inline') ) {
            wp_enqueue_style('showcase-interactive-center', get_template_directory_uri() . '/css/showcase-interactive-center.css');
        }
	}

	add_action('wp_enqueue_scripts', 'keira_scripts');

	add_action( 'customize_preview_init', 'cd_customizer' );
function cd_customizer() {
	wp_enqueue_script(
		  'cd_customizer',
		  get_template_directory_uri() . '/js/customizer.js',
		  array( 'jquery','customize-preview' ),
		  '',
		  true
	);
}

	function keira_extend_excerpt_length($length) {
		if (is_archive()) {
			return 20;
		}
		return 15;
	}

	add_filter('excerpt_length', 'keira_extend_excerpt_length');
	

	function keira_excerpt_change_dots($more) {
		return ' ...';
	}

	add_filter('excerpt_more', 'keira_excerpt_change_dots');

	// Register Sidebar
	function keira_sidebar() {

		register_sidebar(array(

			'name'           => 'MailChimp Form',
			'id'             => 'mailchimp-form',
			'description'    => '',
			'class'          => '',
			'before_widget'  => '<div id="%1$s" class="form-inline %2$s">',
			'after_widget'   => '</div>'
 
		));

		register_sidebar(array(

			'name'           => 'Blog Sidebar',
			'id'             => 'blog-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'keira' ),
			'class'          => '',
		    'before_widget' => '<section id="%1$s" class="widget %2$s">',
		    'after_widget'  => '</section>',
		    'before_title'  => '<h6 class="widget-title">',
		    'after_title'   => '</h6>'
 
		));

	}
	
	add_action('widgets_init', 'keira_sidebar');


	function keira_menu() {

		wp_nav_menu(array(

			'theme_location' => 'navigation-menu',
			'menu_class'     => 'navbar-nav list-unstyled',
			'container'      =>  false,
			'depth'          => 2,

		));

	}

	function numbering_pagination() {

		global $wp_query;

		$all_pages = $wp_query->max_num_pages;

		$current_page = max(1, get_query_var('paged'));
		
        if ($all_pages > 1) {
	  
			return paginate_links(array(

				'base'      => get_pagenum_link() . '%_%',
				'format'    => 'page/%#%',
				'current'   => $current_page,
				'mid_size'  => 3,
				'end_size'  => 1,
				'prev_text' => '<span class="fa fa-angle-left"></span>',
				'next_text' => '<span class="fa fa-angle-right"></span>'
		    ));

		}

	}

	// Remove attribute title
	add_filter('the_author_posts_link', 'opt_remove_title_attr');
    function opt_remove_title_attr($return){
        return preg_replace('` title="(.+)"`', '',$return);
	}
	
	require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
	require_once get_template_directory() . '/inc/required-plugins.php';
	require_once get_template_directory() . '/inc/demo-import.php';

	// Sanitize Range Function

	function wpse_intval( $value ) {
		return (int) $value;
	}

	// Customize Appearance Options
	function keira_customize_register( $wp_customize ) {

		// Second Logo Section

		$wp_customize->add_section( 'wp_second_logo',
			array(
				'title' => __( 'Second Logo', 'keira' ),
				'priority' => 112
			)
		);

		$wp_customize->add_setting( 'wp_second_logo_img', array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw'
		));
	 
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wp_second_logo_img_control', array(
			'label' => 'Upload Logo',
			'priority' => 20,
			'section' => 'wp_second_logo',
			'settings' => 'wp_second_logo_img',
			'button_labels' => array(// All These labels are optional
						'select' => 'Select Logo',
						'remove' => 'Remove Logo',
						'change' => 'Change Logo',
						)
		)));

		// Menu Section

        $wp_customize->add_section( 'wp_menu',
			array(
				'title' => __( 'Main Menu Style', 'keira' ),
				'priority' => 113
			)
		);  

        $wp_customize->add_setting( 
            'wp_menu_change', 
            array(
                'default' => 'overlay',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'refresh',
            )
        );
          
        $wp_customize->add_control( 
            'wp_menu_change_control', 
            array(
                'label' => esc_html__( 'Choose Main Menu Style', 'keira' ),
                'section' => 'wp_menu',
				'settings' =>  'wp_menu_change',
                'type' => 'radio',
                'choices' => array(
                    'overlay' => esc_html__('Overlay','keira'),
                    'horizontal' => esc_html__('Horizontal','keira')
                )
            )
        );

		// Main Color Section

		$wp_customize->add_section('wp_standard_colors', array(
			'title'      =>  __('Main Color', 'keira'),
			'priority'   =>  113,
		));

		$wp_customize->add_setting('wp_main_color', array(
			'default'    =>  ' #ff3d4f',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'  =>  'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'wp_main_color_control', array(
			'label'     =>  __('Main Color', 'keira'),
			'section'   =>  'wp_standard_colors',
			'settings'   =>   'wp_main_color',
		) ));

		// Preloader Section

        $wp_customize->add_section( 'wp_preloader',
			array(
				'title' => __( 'Preloader', 'keira' ),
				'priority' => 114
			)
		);  

        $wp_customize->add_setting( 
            'wp_preloader_show_hide', 
            array(
                'default' => 'show',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'refresh',
            )
        );
          
        $wp_customize->add_control( 
            'wp_preloader_show_hide_control', 
            array(
                'label' => esc_html__( 'Preloader Display', 'keira' ),
                'section' => 'wp_preloader',
				'settings' =>  'wp_preloader_show_hide',
                'type' => 'radio',
                'choices' => array(
                    'show' => esc_html__('Show','keira'),
                    'hide' => esc_html__('Hide','keira')
                )
            )
        );

		$wp_customize->add_setting( 'wp_preloader_button_text',
			array(
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_preloader_button_text_control',
			array(
				'label' => __( 'Preloader Button Text' , 'keira' ),
				'section' => 'wp_preloader',
				'settings' =>  'wp_preloader_button_text',
				'priority' => 10,
				'type' => 'text',
			)
		);

		// Logo Size Section

		$wp_customize->add_section( 'wp_logo_size',
			array(
				'title' => __( 'Logo Size', 'keira' ),
				'priority' => 115
			)
		);  

        $wp_customize->add_setting( 
            'wp_logo_size_number', 
            array(
				'default' => '100',
				'sanitize_callback' => 'wpse_intval',
				'transport' => 'postMessage',
            )
        );

		$wp_customize->add_control( 'wp_logo_size_number_control', array(
			'label' => esc_html__( 'Logo Size', 'keira' ),
			'section' => 'wp_logo_size',
			'settings' =>  'wp_logo_size_number',
			'type' => 'range',
			'description' => esc_html__( 'Select the Best Size of your Logo', 'keira' ),
			'input_attrs' => array(
			  'min' => 80,
			  'max' => 140,
			  'step' => 1,
			),
		  ) );

		// Cursor Section

        $wp_customize->add_section( 'wp_cursor',
			array(
				'title' => __( 'Cursor Effect', 'keira' ),
				'priority' => 116
			)
		);  

        $wp_customize->add_setting( 
            'wp_cursor_show_hide', 
            array(
                'default' => 'show',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_cursor_show_hide_control', 
            array(
                'label' => esc_html__( 'Cursor Effect Display', 'keira' ),
                'section' => 'wp_cursor',
				'settings' =>  'wp_cursor_show_hide',
                'type' => 'radio',
                'choices' => array(
                    'show' => esc_html__('Show','keira'),
                    'hide' => esc_html__('Hide','keira')
                )
            )
        );

		// Menu Info Section

		$wp_customize->add_section( 'wp_menu_info',
			array(
				'title' => __( 'Menu Info', 'keira' ),
				'priority' => 117
			)
		);

		$wp_customize->add_setting( 'wp_menu_info_email_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_menu_info_email_text_control',
			array(
				'label' => __( 'Email Label' , 'keira' ),
				'section' => 'wp_menu_info',
				'settings' =>  'wp_menu_info_email_text',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_menu_info_email',
			array(
				'default' => '',
				'sanitize_callback' => 'sanitize_email',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_menu_info_email_control',
			array(
				'label' => __( 'Email' , 'keira' ),
				'section' => 'wp_menu_info',
				'settings' =>  'wp_menu_info_email',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_menu_info_tel_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_menu_info_tel_text_control',
			array(
				'label' => __( 'Phone Label' , 'keira' ),
				'section' => 'wp_menu_info',
				'settings' =>  'wp_menu_info_tel_text',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_menu_info_tel',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_menu_info_tel_control',
			array(
				'label' => __( 'Phone Number', 'keira' ),
				'section' => 'wp_menu_info',
				'settings' =>  'wp_menu_info_tel',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_menu_info_address_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_menu_info_address_text_control',
			array(
				'label' => __( 'Address Label' , 'keira' ),
				'section' => 'wp_menu_info',
				'settings' =>  'wp_menu_info_address_text',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_menu_info_address',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_menu_info_address_control',
			array(
				'label' => __( 'Address', 'keira' ),
				'section' => 'wp_menu_info',
				'settings' =>  'wp_menu_info_address',
				'priority' => 10, 
				'type' => 'text', 
			)
		);

		// Follow Me Section

        $wp_customize->add_section( 'wp_follow',
			array(
				'title' => __( 'Follow Me', 'keira' ),
				'priority' => 118
			)
		);  

        $wp_customize->add_setting( 
            'wp_follow_show_hide', 
            array(
                'default' => 'show',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_follow_show_hide_control', 
            array(
                'label' => esc_html__( 'Follow Display', 'keira' ),
                'section' => 'wp_follow',
				'settings' =>  'wp_follow_show_hide',
                'type' => 'radio',
                'choices' => array(
                    'show' => esc_html__('Show','keira'),
                    'hide' => esc_html__('Hide','keira')
                )
            )
        ); 

		$wp_customize->add_setting( 'wp_follow_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_text_control',
			array(
				'label' => __( 'Follow Text', 'keira' ),
				'section' => 'wp_follow',
				'settings' =>  'wp_follow_text',
				'priority' => 10,
				'type' => 'text', 
			)
		);

		$wp_customize->add_setting( 
            'wp_follow_target', 
            array(
                'default' => 'self',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_follow_target_control', 
            array(
                'label' => esc_html__( 'Target', 'keira' ),
                'section' => 'wp_follow',
				'settings' =>  'wp_follow_target',
                'type' => 'radio',
                'choices' => array(
                    'self' => esc_html__('Open Links In The Same Tab','keira'),
                    'blank' => esc_html__('Open Links In a New Tab','keira')
                )
            )
        ); 

		$wp_customize->add_setting( 'wp_follow_icon1_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon1_text_control',
			array(
				'label' => __( 'Icon1 Name', 'keira' ),
				'section' => 'wp_follow',
				'settings' =>  'wp_follow_icon1_text',
				'priority' => 10, 
				'type' => 'text',
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon1_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon1_link_control',
			array(
				'label' => __( 'Icon1 Link', 'keira' ),
				'section' => 'wp_follow',
				'settings' =>  'wp_follow_icon1_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon2_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon2_text_control',
			array(
				'label' => __( 'Icon2 Name', 'keira' ),
				'section' => 'wp_follow',
				'settings' =>  'wp_follow_icon2_text',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon2_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon2_link_control',
			array(
				'label' => __( 'Icon2 Link', 'keira' ),
				'section' => 'wp_follow',
				'settings' =>  'wp_follow_icon2_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon3_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon3_text_control',
			array(
				'label' => __( 'Icon3 Name', 'keira' ),
				'section' => 'wp_follow',
				'settings' =>  'wp_follow_icon3_text',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon3_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon3_link_control',
			array(
				'label' => __( 'Icon3 Link', 'keira' ),
				'section' => 'wp_follow',
				'settings' =>  'wp_follow_icon3_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		// Follow Me 2 Section

        $wp_customize->add_section( 'wp_follow2',
			array(
				'title' => __( 'Follow Me 2', 'keira' ),
				'priority' => 119
			)
		);  

        $wp_customize->add_setting( 
            'wp_follow_show_hide2', 
            array(
                'default' => 'show',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_follow_show_hide_control2', 
            array(
                'label' => esc_html__( 'Follow Display', 'keira' ),
                'section' => 'wp_follow2',
				'settings' =>  'wp_follow_show_hide2',
                'type' => 'radio',
                'choices' => array(
                    'show' => esc_html__('Show','keira'),
                    'hide' => esc_html__('Hide','keira')
                )
            )
        ); 

		$wp_customize->add_setting( 'wp_follow_text2',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_text_control2',
			array(
				'label' => __( 'Follow Text', 'keira' ),
				'section' => 'wp_follow2',
				'settings' =>  'wp_follow_text2',
				'priority' => 10,
				'type' => 'text', 
			)
		);

		$wp_customize->add_setting( 
            'wp_follow_target2', 
            array(
                'default' => 'self',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_follow_target_control2', 
            array(
                'label' => esc_html__( 'Target', 'keira' ),
                'section' => 'wp_follow2',
				'settings' =>  'wp_follow_target2',
                'type' => 'radio',
                'choices' => array(
                    'self' => esc_html__('Open Links In The Same Tab','keira'),
                    'blank' => esc_html__('Open Links In a New Tab','keira')
                )
            )
        );

		$wp_customize->add_setting( 'wp_follow_icon1_text2',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon1_text_control2',
			array(
				'label' => __( 'Icon1 Name', 'keira' ),
				'section' => 'wp_follow2',
				'settings' =>  'wp_follow_icon1_text2',
				'priority' => 10, 
				'type' => 'text',
				'description' => 'ex: Facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon1_link2',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon1_link_control2',
			array(
				'label' => __( 'Icon1 Link', 'keira' ),
				'section' => 'wp_follow2',
				'settings' =>  'wp_follow_icon1_link2',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon2_text2',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon2_text_control2',
			array(
				'label' => __( 'Icon2 Name', 'keira' ),
				'section' => 'wp_follow2',
				'settings' =>  'wp_follow_icon2_text2',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: Facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon2_link2',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon2_link_control2',
			array(
				'label' => __( 'Icon2 Link', 'keira' ),
				'section' => 'wp_follow2',
				'settings' =>  'wp_follow_icon2_link2',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon3_text2',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon3_text_control2',
			array(
				'label' => __( 'Icon3 Name', 'keira' ),
				'section' => 'wp_follow2',
				'settings' =>  'wp_follow_icon3_text2',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: Facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow_icon3_link2',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow_icon3_link_control2',
			array(
				'label' => __( 'Icon3 Link', 'keira' ),
				'section' => 'wp_follow2',
				'settings' =>  'wp_follow_icon3_link2',
				'priority' => 10,
				'type' => 'text',
			)
		);

		
		// Follow Section

        $wp_customize->add_section( 'wp_follow3',
			array(
				'title' => __( 'Follow', 'keira' ),
				'priority' => 120
			)
		);  

        $wp_customize->add_setting( 
            'wp_follow3_show_hide', 
            array(
                'default' => 'show',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_follow3_show_hide_control', 
            array(
                'label' => esc_html__( 'Follow Display', 'keira' ),
                'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_show_hide',
                'type' => 'radio',
                'choices' => array(
                    'show' => esc_html__('Show','keira'),
                    'hide' => esc_html__('Hide','keira')
                )
            )
        ); 

		$wp_customize->add_setting( 'wp_follow3_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_text_control',
			array(
				'label' => __( 'Follow Text', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_text',
				'priority' => 10,
				'type' => 'text', 
			)
		);

		$wp_customize->add_setting( 
            'wp_follow3_target', 
            array(
                'default' => 'self',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_follow3_target_control', 
            array(
                'label' => esc_html__( 'Target', 'keira' ),
                'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_target',
                'type' => 'radio',
                'choices' => array(
                    'self' => esc_html__('Open Links In The Same Tab','keira'),
                    'blank' => esc_html__('Open Links In a New Tab','keira')
                )
            )
        ); 

		$wp_customize->add_setting( 'wp_follow3_icon1_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon1_text_control',
			array(
				'label' => __( 'Icon1 Name', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon1_text',
				'priority' => 10, 
				'type' => 'text',
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon1_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon1_link_control',
			array(
				'label' => __( 'Icon1 Link', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon1_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon2_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon2_text_control',
			array(
				'label' => __( 'Icon2 Name', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon2_text',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon2_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon2_link_control',
			array(
				'label' => __( 'Icon2 Link', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon2_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon3_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon3_text_control',
			array(
				'label' => __( 'Icon3 Name', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon3_text',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon3_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon3_link_control',
			array(
				'label' => __( 'Icon3 Link', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon3_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon4_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon4_text_control',
			array(
				'label' => __( 'Icon4 Name', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon4_text',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon4_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon4_link_control',
			array(
				'label' => __( 'Icon4 Link', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon4_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon5_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon5_text_control',
			array(
				'label' => __( 'Icon5 Name', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon5_text',
				'priority' => 10, 
				'type' => 'text', 
				'description' => 'ex: fa-facebook'
			)
		);

		$wp_customize->add_setting( 'wp_follow3_icon5_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_follow3_icon5_link_control',
			array(
				'label' => __( 'Icon5 Link', 'keira' ),
				'section' => 'wp_follow3',
				'settings' =>  'wp_follow3_icon5_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		// Footer Menu Section

        $wp_customize->add_section( 'wp_footer_menu',
			array(
				'title' => __( 'Footer Menu', 'keira' ),
				'priority' => 121
			)
		);  

        $wp_customize->add_setting( 
            'wp_footer_menu_show_hide', 
            array(
                'default' => 'show',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_footer_menu_show_hide_control', 
            array(
                'label' => esc_html__( 'Footer Menu Display', 'keira' ),
                'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_show_hide',
                'type' => 'radio',
                'choices' => array(
                    'show' => esc_html__('Show','keira'),
                    'hide' => esc_html__('Hide','keira')
                )
            )
        );

		$wp_customize->add_setting( 
            'wp_footer_menu_target', 
            array(
                'default' => 'self',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
            )
        );
          
        $wp_customize->add_control( 
            'wp_footer_menu_target_control', 
            array(
                'label' => esc_html__( 'Target', 'keira' ),
                'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_target',
                'type' => 'radio',
                'choices' => array(
                    'self' => esc_html__('Open Links In The Same Tab','keira'),
                    'blank' => esc_html__('Open Links In a New Tab','keira')
                )
            )
        ); 

		$wp_customize->add_setting( 'wp_footer_menu_item1_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_footer_menu_item1_text_control',
			array(
				'label' => __( 'Item1 Name', 'keira' ),
				'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_item1_text',
				'priority' => 10, 
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_footer_menu_item1_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_footer_menu_item1_link_control',
			array(
				'label' => __( 'Item1 Link', 'keira' ),
				'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_item1_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_footer_menu_item2_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_footer_menu_item2_text_control',
			array(
				'label' => __( 'Item2 Name', 'keira' ),
				'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_item2_text',
				'priority' => 10, 
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_footer_menu_item2_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_footer_menu_item2_link_control',
			array(
				'label' => __( 'Item2 Link', 'keira' ),
				'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_item2_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_footer_menu_item3_text',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_footer_menu_item3_text_control',
			array(
				'label' => __( 'Item3 Name', 'keira' ),
				'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_item3_text',
				'priority' => 10, 
				'type' => 'text',
			)
		);

		$wp_customize->add_setting( 'wp_footer_menu_item3_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_footer_menu_item3_link_control',
			array(
				'label' => __( 'Item3 Link', 'keira' ),
				'section' => 'wp_footer_menu',
				'settings' =>  'wp_footer_menu_item3_link',
				'priority' => 10,
				'type' => 'text',
			)
		);

		// Footer Section

        $wp_customize->add_section( 'wp_footer',
			array(
				'title' => __( 'Footer', 'keira' ),
				'priority' => 121
			)
		);

		$wp_customize->add_setting( 'wp_footer_copyright',
			array(
				'default' => '',
				'sanitize_callback' => 'wp_kses_post',
				'transport' => 'postMessage',
			)
		);
			
		$wp_customize->add_control( 'wp_footer_copyright_control',
			array(
				'label' => __( 'Copyright Text', 'keira' ),
				'section' => 'wp_footer',
				'settings' =>  'wp_footer_copyright',
				'priority' => 10,
				'type' => 'textarea',
			)
		);
	}

	add_action('customize_register', 'keira_customize_register');

	// Output Customize CSS
    function keira_customize_css() { ?>
		
		<style type="text/css">

            ::-webkit-scrollbar-thumb {
                background: <?php echo get_theme_mod('wp_main_color'); ?>;
			}

			::-webkit-scrollbar-thumb:hover {
                background: <?php echo get_theme_mod('wp_main_color'); ?>;
			}

			::-webkit-selection {
                background: <?php echo get_theme_mod('wp_main_color'); ?>;
			}

			::-moz-selection {
                background: <?php echo get_theme_mod('wp_main_color'); ?>;
			}

			::selection {
                background: <?php echo get_theme_mod('wp_main_color'); ?>;
			}

			a:hover,
			a:focus,
			.fa:hover,
			.navbar-header .navbar-brand span,
			.navbar-inverse .navbar-nav li a:hover,
			.navbar-inverse .navbar-nav li a:focus,
			.portfolio .portfolio-list .nav li:hover,
			.nav-styletwo .navbar .navbar-collapse .navbar-nav .nav-item .nav-link.active,
			.contact .contact-block1 .contact-block .fa,
			.counter .fullcounter h3 sup,
			.error,
			.navbar-wrapper .mainmenunav .navbar .navbar-collapse li a:hover ~ p,
			.navbar-wrapper .mainmenunav .navbar .navbar-collapse li a:hover,
			.navbar-wrapper .mainmenunav .navbar .navbar-collapse li.menu-item-has-children > a:hover:after,
			.services .cont-services .servfix:hover .read-more,
			.services .cont-services .servfix:hover .read-more i,
			.journal .journal-info .journal-txt .maintitle:hover,
			.breadcrumb-header ul li a,
			.sidebar .widget.widget_search .search-submit,
			.sidebar .widget.widget_search .search-submit i:hover,
			.sidebar .widget.widget_categories ul li,
			.sidebar .widget.widget_categories ul li a:hover,
			.sidebar .widget.widget_recent_entries_thumbnail ul .thumbnail-post-w .widget-data h4 a:hover,
			.sidebar .widget.widget_recent_entries_thumbnail ul .thumbnail-post-w .widget-data .thumbnail-post-w-date a:hover,
			.search-widget .search-submit,
			.journal.blog .journal-item .post-date,
			.journal.blog.single .comments .comments-list .reply .comment-reply-link,
			.journal.blog.single .comments .comment-respond .comment-reply-title #cancel-comment-reply-link,
			.error-404 .page-content .back a {
                color:  <?php echo get_theme_mod('wp_main_color'); ?>;
			}

			.navbar-wrapper .mainmenunav .navbar .navbar-collapse li a:hover,
			.navbar .sub-menu li:hover,
			.navbar .sub-menu li:focus,
			.navbar .sub-menu li:hover a,
			.navbar-wrapper .mainmenunav .navbar .navbar-collapse li.menu-item-has-children .sub-menu li:hover a,
			.navbar-wrapper .mainmenunav .navbar .navbar-collapse li.menu-item-has-children .sub-menu li a:hover,
			.nav-styletwo .navbar .navbar-collapse .navbar-nav .menu-item a:hover,
			.dl-fixed-sidebar .dl-menu-fixed ul li:hover a,
			.dl-fixed-sidebar .dl-menu-fixed ul li a.active,
			.services .cont-services .servfix:hover .read-more,
			.services .cont-services .servfix:hover .read-more i,
			.error {
                color:  <?php echo get_theme_mod('wp_main_color'); ?> !important;
			}
			
			@media (max-width: 991px) {
                .nav-styletwo .navbar .navbar-collapse .navbar-nav .nav-item .nav-link.active,
				.nav-styletwo .navbar .navbar-collapse .navbar-nav .nav-item a.active,
				.nav-styletwo .navbar .navbar-collapse .navbar-nav .menu-item a:hover {
                    color: <?php echo get_theme_mod('wp_main_color'); ?> !important;
                }
            }

			.about .about-blok .aboutinfo .about-img:after,
			.btn:hover,
            .btn:focus,
			.section-title h2:before,
			.section-title h2:after,
			.cd-overlay-content span,
			.nav-styletwo .navbar .menu-toggle .bar,
			.dl-burger-menu,
			.dl-fixed-sidebar .dl-menu-fixed ul li .active:after,
			.about .skills-bar-container li .bar-container .progressbar,
			.team .teamiteam .imgteam .socials-media ul li:hover,
			#contact .socials-media ul li:hover,
			.overlay-2,
			.mainicon.sidebaricon,
			.nav-styletwo .menu-toggle .bar,
			.list-color li span[data-color="default"],
			.about:before,
			.services:before,
			.portfolio:before,
			.resume:before,
			.team:before,
			.journal:before,
			.contact:before,
			.about .about-blok .aboutinfo .about-img:after,
			.res-line,
			.pagination-numbers .page-numbers.current,
            .pagination-numbers .page-numbers:hover,
			.sidebar .widget.widget_tag_cloud .tagcloud a:hover,
			.journal.blog.single .journal-item .post-footer .post-tags a:hover,
			.journal.blog.single .post-navigation .post-navigation-prev a:hover,
            .journal.blog.single .post-navigation .post-navigation-next a:hover {
                background: <?php echo get_theme_mod('wp_main_color'); ?>;
			}

			.about .about-blok .aboutinfo .about-img:after {
				background: <?php echo get_theme_mod('wp_main_color'); ?> !important;
			}

			.dl-fixed-sidebar .line:after,
			#footer .line:before {
                background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), color-stop(75%, <?php echo get_theme_mod('wp_main_color'); ?>), to(<?php echo get_theme_mod('wp_main_color'); ?>)) !important;
                background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0, <?php echo get_theme_mod('wp_main_color'); ?> 75%, <?php echo get_theme_mod('wp_main_color'); ?>) !important;
			}
			
			.form-control:focus,
            .navbar-inverse .navbar-collapse,
            .navbar-inverse .navbar-form,
			.sidebar-contet .contentsidebar .themecolor .list-sidebar li span.active,
			.mainicon.sidebaricon,
			.sidebar-contet .contentsidebar .themecolor .list-sidebar li a.active,
			.sidebar .widget.widget_search .search-field:focus,
			.search-widget .search-field:focus,
			.journal.blog.single .comments .comment-respond .comment-form input[type=text]:focus,
            .journal.blog.single .comments .comment-respond .comment-form textarea:focus {
                border-color: <?php echo get_theme_mod('wp_main_color'); ?> !important;
			}

			.draw:hover:before {
                border-top-color: <?php echo get_theme_mod('wp_main_color'); ?> !important;
                border-right-color: <?php echo get_theme_mod('wp_main_color'); ?> !important;
			}
            .draw:hover:after {
                border-bottom-color: <?php echo get_theme_mod('wp_main_color'); ?> !important;
                border-left-color: <?php echo get_theme_mod('wp_main_color'); ?> !important;
		    }

			<?php 
			    if(get_theme_mod( 'wp_preloader_show_hide') === 'show' ) { ?>
					body.home {
						overflow: hidden;
					}
					.content {
                        transform: translate(0, -54%); 
					}
				<?php } else { ?>
					body.home {
						overflow: auto;
						overflow-x: hidden;
					}
					.content {
                        transform: none;
					}
				<?php } ?>

				.navbar-wrapper .navfixed .container .fullcontainer .row .col-md-12 .mylogo img {
					width: <?php echo get_theme_mod('wp_logo_size_number') . "px" ?>;
				}

		</style>

	<?php }

	add_action('wp_head', 'keira_customize_css');