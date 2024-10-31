<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.segurospromo.com.br
 * @since      1.0.0
 *
 * @package    Seguros_Promo
 * @subpackage Seguros_Promo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Seguros_Promo
 * @subpackage Seguros_Promo/admin
 * @author     2XT <plugins@2xt.com.br>
 */
class Seguros_Promo_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**     *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $options    Plugin options.
	 */
	private $options;
	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      $plugin_screen_hook_suffix
	 */
	private $plugin_screen_hook_suffix;

	private $option_name = 'seguros_promo';

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{
		$this->options = get_option($this->option_name);
		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{
		wp_enqueue_style($this->plugin_name . '-choices-css', plugin_dir_url(__FILE__) . 'lib/choices/choices.css', array(), $this->version, 'all');
		wp_enqueue_style($this->plugin_name . '-typeahead-css', plugin_dir_url(__FILE__) . 'lib/typeahead/typeahead.css', array(), $this->version, 'all');
		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/admin.css', array($this->plugin_name . '-typeahead-css', $this->plugin_name . '-choices-css'), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{
		global $wp_version;
		$this->enqueue_admin_tinymce_scripts();

		if ((function_exists( 'is_gutenberg_page' ) && is_gutenberg_page()) || $wp_version >= 5)
			$this->enqueue_admin_gutenberg_blocks();
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.4.2
	 */
	public function enqueue_admin_tinymce_scripts() {
		wp_enqueue_script($this->plugin_name . '-choices-js', plugin_dir_url(__FILE__) . 'lib/choices/choices.min.js', array(), $this->version, false);
		wp_enqueue_script($this->plugin_name . '-typeahead-js', plugin_dir_url(__FILE__) . 'lib/typeahead/typeahead.js', array(), $this->version, false);

		wp_enqueue_script($this->plugin_name . '-admin', plugin_dir_url(__FILE__) . 'js/admin.js', array('jquery', $this->plugin_name . '-choices-js', $this->plugin_name . '-typeahead-js'), $this->version, false);
		wp_enqueue_script($this->plugin_name . '-quicktags', plugin_dir_url(__FILE__) . 'js/quicktags.js', array($this->plugin_name . '-admin', 'quicktags'), $this->version, false);
	}

	/**
	 * Register the JavaScript for the gutenberg blocks.
	 *
	 * @since    1.4.2
	 */
	public function enqueue_admin_gutenberg_blocks() {
		wp_register_script(
			$this->plugin_name . '-blocks',
			plugins_url( 'js/blocks.js', __FILE__ ),
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor' )
		);

		wp_localize_script(
			$this->plugin_name . '-blocks',
			'conf',
			array(
				'iconPath' => plugins_url( 'assets/seguros_promo_icon.svg', __FILE__ ),
				'assetsPath' => plugins_url( 'assets', __FILE__ )
			)
		);

		wp_enqueue_script(
			$this->plugin_name . '-blocks',
			plugins_url( 'js/blocks.js', __FILE__ ),
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor' ),
			$this->version,
			'all'
		);

		register_block_type( $this->plugin_name . '/shortcode-block', array(
			'editor_script' => $this->plugin_name . '-blocks',
		) );
	}

// ADMIN PAGE

	/**
	 * Creates settings page and adds to the settings menu
	 */
	public function seguros_promo_admin_add_options_page()
	{
		$this->plugin_screen_hook_suffix = add_options_page(
			__('Seguros Promo', 'seguros-promo'),
			__('Seguros Promo', 'seguros-promo'),
			'manage_options',
			$this->plugin_name,
			array($this, $this->option_name . '_display_options_page')
		);
	}

	public function seguros_promo_display_options_page()
	{
		include_once 'partials/seguros-promo-admin-display.php';
	}

	public function seguros_promo_admin_register_setting()
	{
		register_setting(
			$this->plugin_name,
			$this->option_name,
			array($this, $this->option_name . '_sanitize_options')
		);

		add_settings_section(
			$this->option_name . '_general',
			__('Geral', 'seguros-promo'),
			array($this, $this->option_name . '_general_cb'),
			$this->plugin_name
		);

		add_settings_field(
			$this->option_name . '_affiliate_id',
			__('Id de Afiliado', 'seguros-promo'),
			array($this, $this->option_name . '_affiliate_id_cb'),
			$this->plugin_name,
			$this->option_name . '_general',
			array('label_for' => $this->option_name . '[affiliate_id]')
		);

		add_settings_field(
			$this->option_name . '_popup_enabled',
			__('Ativar Popup', 'seguros-promo'),
			array($this, $this->option_name . '_popup_enabled_cb'),
			$this->plugin_name,
			$this->option_name . '_general',
			array('label_for' => $this->option_name . '[popup_enabled]')
		);
	}

	public function seguros_promo_sanitize_options($input)
	{
		$output = $this->options;

		if (isset($input['affiliate_id'])) {
			$output['affiliate_id'] = sanitize_text_field($input['affiliate_id']);
		}

		$output['popup_enabled'] = isset($input['popup_enabled']) ? 1 : 0;

		return $output;
	}

	public function seguros_promo_general_cb()
	{
		echo esc_html('<p>' . __('Configure o seu Id de Afiliado disponibilizado no momento do Cadastro', 'seguros-promo') . ' </p>');
	}

	public function seguros_promo_popup_enabled_cb()
	{
		echo '<fieldset>';
		echo '<label>';
		echo '<input type="checkbox" name="' . esc_attr($this->option_name . '[popup_enabled]') . '" ' . checked(1, $this->options['popup_enabled'], false) . '>';
		echo __('Ativar Popup', 'seguros-promo');
		echo '</label>';
		echo '</fieldset>';
	}

	public function seguros_promo_affiliate_id_cb()
	{
		?>
			<fieldset>
				<label>
					<input type="text"
						   name="<?php echo esc_attr($this->option_name . '[affiliate_id]'); ?>"
						   id="<?php echo esc_attr($this->option_name . '_affiliate_id') ?>"
						   value="<?php echo esc_attr((isset($this->options['affiliate_id'])) ? $this->options['affiliate_id'] : '') ?>" >
				</label>
			</fieldset>
		<?php
	}

	public function seguros_promo_admin_add_settings_link($links)
	{
		$settings_link = '<a href="' . admin_url('options-general.php?page=seguros-promo') . '">' . __('Settings') . '</a>';
		array_unshift($links, $settings_link);
		return $links;
	}

	// END ADMIN PAGE

	// PLUGIN TINYMCE

	public function seguros_promo_add_buttons($plugin_array)
	{
		$plugin_array['SegurosPromoButtons'] = plugin_dir_url(__FILE__) . 'js/tinymce.js';
		return $plugin_array;
	}

	public function seguros_promo_register_buttons($buttons)
	{
		array_push($buttons, 'SegurosPromoButtons');
		return $buttons;
	}

	public function seguros_promo_chip_add_buttons($plugin_array)
	{
		$plugin_array['SegurosPromoButtonsChip'] = plugin_dir_url(__FILE__) . 'js/tinymce.js';
		return $plugin_array;
	}

	public function seguros_promo_chip_register_buttons($buttons)
	{
		array_push($buttons, 'SegurosPromoButtonsChip');
		return $buttons;
	}
	// END PLUGIN TINYMCE
}
