<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(

				'woocommerce' => array(
					'slug' => 'woocommerce',
					'filename' =>'woocommerce.php',
					'class' => 'WooCommerce',
				),

				'accesspress-social-icons' => array(
					'slug' => 'accesspress-social-icons',
					'filename' => 'accesspress-social-icons.php',
					'class' => 'APS_Class'
				),

				'accesspress-social-share' => array(
					'slug' => 'accesspress-social-share',
					'filename' => 'accesspress-social-share.php',
					'class' => 'APSS_Class'
				),

				'ap-custom-testimonial' => array(
					'slug' => 'ap-custom-testimonial',
					'filename' => 'ap-custom-testimonial.php',
					'class' => 'APCT_free'
				),

				'ap-mega-menu' => array(
					'slug' => 'ap-mega-menu',
					'filename' => 'ap-mega-menu.php',
					'class' => 'APMM_Class'
				),

			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'storevilla'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'storevilla'),
			),
		

		),

		// *** Recommended Plugins
		'recommended_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
				
				'accesspress-social-share' => array(
					'slug'      => 'accesspress-social-share',
					'filename' 	=> 'accesspress-social-share.php',
					'class' 	=> 'APSS_Class',
					'info' 		=> esc_html__('Social booster for your site! A FREE plugin with premium features.', 'storevilla'),
				),

				'accesspress-social-icons' => array(
					'slug'      => 'accesspress-social-icons',
					'filename' 	=> 'accesspress-social-icons.php',
					'class' 	=> 'APS_Class',
					'info' 		=> esc_html__('Connect your website visitors to your social community in an easy way! Link up your social media profiles via great looking social buttons.', 'storevilla'),
				),

				'accesspress-twitter-feed' => array(
					'slug'      => 'accesspress-twitter-feed',
					'filename' 	=> 'accesspress-twitter-feed.php',
					'class' 	=> 'APTF_Class',
					'info' 		=> esc_html__('Showcase your Tweets (Twitter Feeds) right on the site.', 'storevilla'),
				),

				'contact-form-7' => array(
				'slug'      => 'contact-form-7',
				'filename' 	=> 'contact-form-7.php',
				'class' 	=> 'WPCF7',
				'info' => esc_html__('Contact Form 7 can manage multiple contact forms, plus you can customize the form and the mail contents flexibly with simple markup.', 'storevilla'),

			),

			),

			// Pro Plugins
			'pro_plugins' => array(

				'woo-product-grid-list-design' 	=> array(
					'slug' 		=> 'woo-product-grid-list-design',
					'name' 		=> esc_html__('WOO Product Grid/List Design- Responsive Products Showcase Extension for Woocommerce', 'storevilla'),
					'version' 	=> esc_html__( '1.0.3', 'storevilla' ),
					'author' 	=> 'AccessPress Themes',
					'filename' 	=> 'woo-product-grid-list-design.php',
					'host_type' => 'remote', // Use either bundled, remote, wordpress
					'link' 		=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Fwoo-product-gridlist-design-responsive-products-showcase-extension-for-woocommerce%2F23167226',
					'screenshot' => 'https://accesspressthemes.com/plugin-repo/woo-product-grid/woo-product-grid.jpg',
					'class' 	=> 'WOPGLD_Class',
					'info' 		=> esc_html__('Design your WooCommerce shop like never before! A complete package for your Woo shop designer.', 'storevilla'),
				),

				'woo-badge-designer' => array(
					'slug' 			=> 'woo-badge-designer',
					'name'         	=> esc_html__('Woo Badge Designer - WooCommerce Product Badge Designer WordPress Plugin', 'storevilla'),
					'version' 		=> esc_html__('1.0.1', 'storevilla'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'woo-badge-designer.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 			=> 'https://1.envato.market/LyK3o',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/woo-badge-designer/woo-badge-designer.jpg',
					'class' 		=> 'WOPGLD_Class',
					'info' 			=> esc_html__('Add some attractive badges on your product listing and single page and increase your sales upto 55%.', 'storevilla'),
				),

				'wp-admin-white-label-login' => array(
					'slug' 			=> 'wp-admin-white-label-login',
					'name'      	=> esc_html__('WP Admin White Label Login - WordPress Plugin For Advanced Customizable Login page', 'storevilla'),
					'version' 		=> esc_html__('1.3.5', 'storevilla'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'wp-admin-white-label-login.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 		=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Fwp-admin-white-label-login-wordpress-plugin-for-advanced-customizable-login-page%2F23127723',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/wp-admin-white-label-login/wp-admin-white-label-login.jpg',
					'class' 		=> 'WP_Admin_White_Label_Login',
					'info' 		=> esc_html__('Make your default wp-admin screen look like a non WP one! Choose from some great ready to use template designs and many features to boost your WordPress backend.', 'storevilla'),
				),

				'easy-side-tab-pro' => array(
					'slug' 			=> 'easy-side-tab-pro',
					'name'      	=> esc_html__('Easy Side Tab Pro - Responsive Floating Tab Plugin For Wordpress', 'storevilla'),
					'version' 		=> esc_html__('1.0.6', 'storevilla'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'easy-side-tab-pro.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'link' 			=> 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feasy-side-tab-pro-responsive-floating-tab-plugin-for-wordpress%2F22296723',
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/easy-side-tab-pro/easy-side-tab.jpg',
					'class' 		=> 'ESTP_Class',
					'info' 		=> esc_html__('Place some great designed floating tabs on your site for quick links. Increase accessibility of your site.', 'storevilla'),
				),

				'everest-timeline' => array(
					'slug' 			=> 'everest-timeline',
					'name'         	=> esc_html__('Everest Timeline - Responsive WordPress Timeline Plugin', 'storevilla'),
					'version' 		=> esc_html__('2.0.2', 'storevilla'),
					'author' 		=> 'AccessPress Themes',
					'filename' 		=> 'everest-timeline.php',
					'host_type' 	=> 'remote', // Use either bundled, remote, wordpress
					'screenshot' 	=> 'https://accesspressthemes.com/plugin-repo/everest-timeline/everest-timeline.jpg',
					'class' 		=> 'APMM_Class_Pro',
					'link'			=>'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feverest-timeline-responsive-wordpress-timeline-plugin%2F20922265',
					'info' 		=> esc_html__('A perfect timeline maker! If you\'re planning to make one go for it!', 'storevilla'),
				),
			)
		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'StoreVilla Welcome', 'storevilla' ),
		'theme_short_description' => esc_html__( 'StoreVilla is an elegantly designed free eCommerce WordPress theme. It is powered by the wonderful WooCommerce plugin and its extension to let you build a successful online store with an ease. It is a complete eCommerce package with all required features and functionalities. Its alluring and flexible design looks great on any kind of online stores such as fashion, jewelry, cosmetics, etc. The theme is inbuilt with cool customizer tool - you can easily configure the design, settings and other elements as per your wish. It features unlimited slider options, background configuration, advanced product search, multiple category display layout, 4 page layout, well organized homepage sections and much more. It\'s a perfect theme to start your online shop of any kind. Moreover, the theme comes with 10+ custom widgets - enhance the functionality of your eCommerce site and give your customers the best online shopping experience. All the WooCommerce settings are enabled in the theme - you can easily add any products in the store and feature it anywhere in any way. It is fully responsive, translation ready and SEO friendly theme. With StoreVilla - you can effortlessly create an online store of your dream, Demo: http://accesspressthemes.com/theme-demos/?theme=storevilla Support forum: https://accesspressthemes.com/support/forum/themes/free-themes/storevilla/', 'storevilla' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'storevilla'),
		'deactivate' 			=> esc_html__('Deactivate', 'storevilla'),
		'activate' 				=> esc_html__('Activate', 'storevilla'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'storevilla'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'storevilla'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/storevilla/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'storevilla' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'storevilla'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'storevilla' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'storevilla' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'storevilla' ),

		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'storevilla'),
		'installed_btn' 	=> esc_html__('Activated', 'storevilla'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'storevilla'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'storevilla'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'storevilla'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'storevilla' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'storevilla' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'storevilla' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'storevilla' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'storevilla' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Storevilla_Welcome( $plugins, $strings );