<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://segurospromo.com.br
 * @since      1.0.0
 *
 * @package    Seguros_Promo
 * @subpackage Seguros_Promo/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Seguros_Promo
 * @subpackage Seguros_Promo/public
 * @author     2XT <plugins@2xt.com.br>
 */
class Seguros_Promo_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**     *
     * @since    1.0.0
     * @access   private
     * @var      string    $options
     */
    private $options;

    /**     *
     * @since    1.0.0
     * @access   private
     * @var      string    $option_name
     */
    private $option_name = 'seguros_promo';

    /**     *
     * @since    1.0.0
     * @access   private
     * @var      string    $api_url
     */

    private $api_url = 'https://www.segurospromo.com.br/emitir-seguros/v0';

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {
        $this->options = get_option('seguros_promo');

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/public.css', array(), $this->version, 'all');
    }

    public function seguros_promo_public_add_shortcodes()
    {
        add_shortcode('seguros_promo_shortcode', array($this, $this->option_name . '_display_shortcode'));
        add_shortcode('seguros_promo_chip_shortcode', array($this, $this->option_name . '_chip_display_shortcode'));
    }

    function seguros_promo_chip_display_shortcode($attrs = array())
    {

        $seguros_promo_public_path = plugin_dir_url(__FILE__);

        $tags = isset($attrs['tags']) ? $attrs['tags'] : '';
        $coupon = isset($attrs['coupon']) ? $attrs['coupon'] : '';
        $chip_destinos = isset($attrs['chip_destinos']) ? $attrs['chip_destinos'] : 'estados-unidos';
        $chip_destinos_lbl = isset($attrs['chip_destinos_lbl']) ? $attrs['chip_destinos_lbl'] : 'Estados Unidos';
        $affiliate_id = (isset($this->options['affiliate_id']) ? $this->options['affiliate_id'] : '');

        $begin_date = date('Y-m-d', strtotime('tomorrow'));
        $end_date = date('Y-m-d', strtotime('+1 week'));

        $api_url = 'https://gochip.amopromo.com/products/' . $chip_destinos . '/' . $begin_date . '/' . $end_date;
        $access_token = '449f2754-e70f-46b1-bdc7-d89e1956bd57';

        $response = wp_remote_get($api_url, array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $access_token,
            ),
        ));

        ob_start();

        include 'partials/seguros-promo-public-display-chip.php';
         

        $content = ob_get_clean();
        return $content;
    }

    public function seguros_promo_display_shortcode($attrs = array())
    {
        global $post;

        $seguros_promo_options = $this->options;
        $seguros_promo_public_path = plugin_dir_url(__FILE__);
        $seguros_promo_show_logo = isset($attrs['show_logo']) ? $attrs['show_logo'] : true;
        $seguros_promo_theme = isset($attrs['theme']) && $attrs['theme'] != '' ? $attrs['theme'] : 'default';
        $seguros_promo_header_text = isset($attrs['header_text']) && $attrs['header_text'] != '' ? $attrs['header_text'] : '';

        $requisition_url = $this->api_url . '/quotations';
        $begin_date = date('Y-m-d', strtotime('tomorrow'));;
        $end_date = date('Y-m-d', strtotime('+1 week'));

        $requisition_headers = array(
            'Authorization' => 'Basic c2VndXJvc3Byb21vOnNlZ3Vyb3Nwcm9tbw==',
            'Content-Type' => 'application/json',
        );

        $requisition_body = array(
            "begin_date" => $begin_date,
            "end_date" => $end_date,
            "greatfor" => (isset($attrs['ideal_para']) ? intval($attrs['ideal_para']) : 9),
            "benefits" => array("51", "42"),
        );

        $requisition = array(
            'body' => json_encode($requisition_body),
            'headers' => $requisition_headers,
        );

        $post_req = json_decode(wp_remote_retrieve_body(wp_remote_post($requisition_url, $requisition)));
        if (is_array($post_req)) {
            for ($i = 0; $i < count($post_req); $i++) {
                $post_req[$i]->saindo_de = 'brasil';
                $post_req[$i]->ideal_para = (isset($requisition_body['greatfor']) ? $requisition_body['greatfor'] : '9');
                $post_req[$i]->ideal_para_lbl = (isset($attrs['ideal_para_lbl']) ? $attrs['ideal_para_lbl'] : 'Brasil');
                $post_req[$i]->afilliate_id = (isset($this->options['affiliate_id']) ? $this->options['affiliate_id'] : '');
                $post_req[$i]->coupon = (isset($attrs['coupon']) ? $attrs['coupon'] : '');
                $post_req[$i]->tags = (isset($attrs['tags']) ? $attrs['tags'] : '');
            }

            $data = $post_req;

            ob_start();
            if (isset($attrs['theme']) && $attrs['theme'] == 'widget') {
                include 'partials/seguros-promo-public-amp-custom-style.php';
                include 'partials/seguros-promo-public-display-widget.php';
            } else {
                include 'partials/seguros-promo-public-amp-custom-style.php';
                include 'partials/seguros-promo-public-display-card.php';
            }

            $content = ob_get_clean();

            return $content;
        }
    }

    public function seguros_promo_public_add_button()
    {
        $affiliate_id = (isset($this->options['affiliate_id']) ? $this->options['affiliate_id'] : '');
        $seguros_promo_public_path = plugin_dir_url(__FILE__);
        include 'partials/seguros-promo-public-popup.php';
    }

    private function transform_month_pt_br($month_number)
    {
        if ($month_number >= 1 && $month_number <= 12) {
            $month_name = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');
            return $month_name[$month_number - 1];
        } else {
            return '';
        }
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        wp_register_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/public.js');

        wp_localize_script(
            $this->plugin_name . '-public',
            'seguros_promo',
            array('plugin_dir' => plugin_dir_url(__FILE__))
        );

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/public.js', array(), $this->version, 'all');
    }

    private function is_popup_enabled()
    {
        $options = get_option('seguros_promo');
        return isset($options['popup_enabled']) && $options['popup_enabled'] == 1;
    }
}
