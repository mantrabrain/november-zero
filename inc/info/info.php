<?php
/**
 * Info setup
 *
 * @package November_Zero
 */

if ( ! function_exists( 'november_zero_info_setup' ) ) :

	/**
	 * Info setup.
	 *
	 * @since 1.0.0
	 */
	function november_zero_info_setup() {

		$config = array(

			// Welcome content.
			'welcome_content' => sprintf( esc_html__( '%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'november-zero' ), 'November Zero' ),

			// Tabs.
			'tabs' => array(
				'getting-started' => esc_html__( 'Getting Started', 'november-zero' ),
				'support'         => esc_html__( 'Support', 'november-zero' ),
				'upgrade-to-pro'  => esc_html__( 'Upgrade to Pro', 'november-zero' ),
				),

			// Quick links.
			'quick_links' => array(
				'theme_url' => array(
					'text' => esc_html__( 'Theme Details', 'november-zero' ),
					'url'  => 'https://mantrabrain.com/downloads/november-zero',
					),
				'demo_url' => array(
					'text' => esc_html__( 'View Demo', 'november-zero' ),
					'url'  => 'https://demo.mantrabrain.com/november-zero/',
					),
				'documentation_url' => array(
					'text' => esc_html__( 'View Documentation', 'november-zero' ),
					'url'  => 'https://mantrabrain.com/docs-category/november-zero-wordpress-theme/',
					),
				'rating_url' => array(
					'text' => esc_html__( 'Rate This Theme','november-zero' ),
					'url'  => 'https://wordpress.org/support/theme/november-zero/reviews/#new-post',
					),
				),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__( 'Theme Documentation', 'november-zero' ),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'november-zero' ),
					'button_text' => esc_html__( 'View Documentation', 'november-zero' ),
					'button_url'  => 'https://mantrabrain.com/docs-category/november-zero-wordpress-theme/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				'two' => array(
					'title'       => esc_html__( 'Static Front Setup', 'november-zero' ),
					'icon'        => 'dashicons dashicons-admin-generic',
					'description' => esc_html__( 'To make front page first you need to create a page eg: Home. (Don\'t forget to assign Page Template as Home ). And after Making page go through this link and select home page as Home', 'november-zero' ),
					'button_text' => esc_html__( 'Static Front Page', 'november-zero' ),
					'button_url'  => admin_url( 'customize.php?autofocus[section]=static_front_page' ),
					'button_type' => 'primary',
					
					),
                'three' => array(
					'title'       => esc_html__( 'Demo Import', 'november-zero' ),
					'icon'        => 'dashicons dashicons-admin-generic',
					'description' => esc_html__( 'If you are starting new site then we have some starter ( already premade) theme demo and you can easily import those demos. To import demo make sure you have mantrabrain-starter-sites plugin installed and activated. You can check demo/starter sites on appearance->Starter Sites. If Starter Sites menu not appear on your appearance section then you have to install and activate mantrabrain-starter-sites wordpress plugin first.', 'november-zero' ),
					'button_text' => esc_html__( 'Demo Import / Starter Sites', 'november-zero' ),
					'button_url'  => admin_url( 'themes.php?page=starter-sites&browse=all' ),
					'button_type' => 'primary',

					),
				'four' => array(
					'title'       => esc_html__( 'Theme Options', 'november-zero' ),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__( 'Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'november-zero' ),
					'button_text' => esc_html__( 'Customize', 'november-zero' ),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
					),
				
				),

			// Support.
			'support' => array(
				'one' => array(
					'title'       => esc_html__( 'Contact Support', 'november-zero' ),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__( 'Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'november-zero' ),
					'button_text' => esc_html__( 'Contact Support', 'november-zero' ),
					'button_url'  => 'https://mantrabrain.com/contact-us/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				'two' => array(
					'title'       => esc_html__( 'Theme Documentation', 'november-zero' ),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'november-zero' ),
					'button_text' => esc_html__( 'View Documentation', 'november-zero' ),
					'button_url'  => 'https://mantrabrain.com/docs-category/november-zero-wordpress-theme/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				'three' => array(
					'title'       => esc_html__( 'Child Theme', 'november-zero' ),
					'icon'        => 'dashicons dashicons-admin-tools',
					'description' => esc_html__( 'For advanced theme customization, it is recommended to use child theme rather than modifying the theme file itself. Using this approach, you wont lose the customization after theme update.', 'november-zero' ),
					'button_text' => esc_html__( 'Learn More', 'november-zero' ),
					'button_url'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				),

			
			// Upgrade content.
			'upgrade_to_pro' => array(
				'description' => esc_html__( 'If you want more advanced features then you can upgrade to the premium version of the theme.', 'november-zero' ),
				'button_text' => esc_html__( 'Buy Pro ', 'november-zero' ),
				'button_url'  => 'https://mantrabrain.com/downloads/november-zero/',
				'button_type' => 'primary',
				'is_new_tab'  => true,
				),
			);

		November_Zero_Info::init( $config );
	}

endif;

add_action( 'after_setup_theme', 'november_zero_info_setup' );
