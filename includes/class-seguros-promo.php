<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://segurospromo.com.br
 * @since      1.0.0
 *
 * @package    Seguros_Promo
 * @subpackage Seguros_Promo/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Seguros_Promo
 * @subpackage Seguros_Promo/includes
 * @author     2XT <plugins@2xt.com.br>
 */
class Seguros_Promo {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Seguros_Promo_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'SEGUROS_PROMO_VERSION' ) ) {
			$this->version = SEGUROS_PROMO_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'seguros-promo';

		$this->load_dependencies();
		$this->set_locale();

		if(is_admin())
			$this->define_admin_hooks();
		else
			$this->define_public_hooks();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Seguros_Promo_Loader. Orchestrates the hooks of the plugin.
	 * - Seguros_Promo_i18n. Defines internationalization functionality.
	 * - Seguros_Promo_Admin. Defines all hooks for the admin area.
	 * - Seguros_Promo_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-seguros-promo-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-seguros-promo-i18n.php';

		/**
		 * This class is responsible for building the admin and the public part of plugin, everything is working
		 * by this file.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-seguros-promo-widget.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-seguros-promo-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-seguros-promo-public.php';


		

		
		$this->loader = new Seguros_Promo_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Seguros_Promo_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Seguros_Promo_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Seguros_Promo_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );


		// $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'seguros_promo_admin_enqueue_styles' );
		// $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'seguros_promo_admin_enqueue_scripts' );

		// CONFIG PAGE
        $this->loader->add_action( 'admin_menu', $plugin_admin, 'seguros_promo_admin_add_options_page');
		$this->loader->add_action( 'admin_init', $plugin_admin, 'seguros_promo_admin_register_setting' );

		$this->loader->add_filter('plugin_action_links_seguros-promo/seguros-promo.php', $plugin_admin, 'seguros_promo_admin_add_settings_link');

        // TINYMCE
		$this->loader->add_filter("mce_external_plugins", $plugin_admin, 'seguros_promo_add_buttons');
		$this->loader->add_filter('mce_buttons', $plugin_admin, 'seguros_promo_register_buttons');

		$this->loader->add_filter("mce_external_plugins", $plugin_admin, 'seguros_promo_chip_add_buttons');
		$this->loader->add_filter('mce_buttons', $plugin_admin, 'seguros_promo_chip_register_buttons');
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Seguros_Promo_Public( $this->get_plugin_name(), $this->get_version() );
        $this->loader->add_action( 'init', $plugin_public, 'seguros_promo_public_add_shortcodes' );

		if ($this->is_popup_enabled()) {
			$this->loader->add_action('wp_footer', $plugin_public, 'seguros_promo_public_add_button');
		}

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	private function is_popup_enabled()
	{
		$options = get_option('seguros_promo'); // Certifique-se de que este é o nome correto da opção
		return isset($options['popup_enabled']) && $options['popup_enabled'] == 1;
	}


	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Seguros_Promo_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
