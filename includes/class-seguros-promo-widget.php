<?php
function wp_load_widget_spromo()
{
    register_widget('wp_widget_spromo');
}
add_action('widgets_init', 'wp_load_widget_spromo');

class wp_widget_spromo extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            // Base ID of widget
            'wp_widget',
            // Widget name will appear in UI
            __('Seguros Promo', 'wp_widget_seguros_promo'),
            // Widget description
            array('description' => __('Widget made to build Seguros Promo Shortcode inside the lateral menus.', 'wp_widget_seguros_promo'))
        );
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['greatfor'] = (!empty($new_instance['greatfor'])) ? strip_tags($new_instance['greatfor']) : '';
        $instance['theme'] = (!empty($new_instance['theme'])) ? strip_tags($new_instance['theme']) : '';
        $instance['coupon'] = (!empty($new_instance['coupon'])) ? strip_tags($new_instance['coupon']) : '';
        return $instance;
    }

    public function form($instance)
    {
        $greatfor = (isset($instance['greatfor']) ? $instance['greatfor'] : __('', 'wp_widget_seguros_promo'));
        $theme = (isset($instance['theme']) ? $instance['theme'] : __('card-large', 'wp_widget_seguros_promo'));
        $coupon = (isset($instance['coupon']) ? $instance['coupon'] : __('', 'wp_widget_seguros_promo'));


?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('greatfor')); ?>"><?php echo esc_html('Ideal Para:'); ?></label>
            <select class="widefat spromo-select-widget-greatfor" id="<?php echo esc_attr($this->get_field_id('greatfor')); ?>" name="<?php echo esc_attr($this->get_field_name('greatfor')); ?>" type="text">
            </select>
        </p>
        <p>
            <!-- <label for="<?php //echo $this->get_field_id('theme'); 
                                ?>"><?php //_e('Tema:');
                                                                            ?></label>
    <select class="widefat" id="<?php //echo $this->get_field_id('theme'); 
                                ?>" name="<?php //echo $this->get_field_name('theme'); 
                                                                                        ?>" type="text" >
        <option value="card-large">Card Grande (3 ofertas)</option>
        <option value="card-medium">Card Médio (2 ofertas)</option>
    </select>
</p> -->
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('coupon')); ?>"><?php echo esc_html('Cupom:'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('coupon')); ?>" name="<?php echo esc_attr($this->get_field_name('coupon')); ?>" type="text" value="<?php echo esc_attr($coupon); ?>" />
        </p>
<?php
        // echo '<script>$("#' . $this->get_field_id('theme') . '").val("' . $theme . '");</script>';
        echo '<script>$("#' . $this->get_field_id('greatfor') . '").html(spromo_options_widget_html)</script>';
        echo '<script>$("#' . $this->get_field_id('greatfor') . '").val("' . $greatfor . '");</script>';
        echo '<script>setTimeout(function(){$("#' . $this->get_field_id('greatfor') . '").val("' . $greatfor . '");},1000);</script>';
    }

    // Creating widget front-end
    public function widget($args, $instance)
    {
        $greatfor = apply_filters('widget_greatfor', $instance['greatfor']);
        // $theme = apply_filters('widget_theme', $instance['theme']);
        $coupon = apply_filters('widget_coupon', $instance['coupon']);
        $greatfor_arr = explode("||", $greatfor);

        $attrs_v = array(
            // "theme" => (isset($theme) && $theme != "" ? $theme : 'card-large'),
            "theme" => 'widget',
            "ideal_para" => (isset($greatfor_arr[0]) && $greatfor_arr[0] != "" ? $greatfor_arr[0] : ''),
            "ideal_para_lbl" => (isset($greatfor_arr[1]) && $greatfor_arr[1] != "" ? $greatfor_arr[1] : ''),
            "coupon" => (isset($coupon) && $coupon != "" ? $coupon : ''),
            "tags" => 'widget',
        );

        // echo __('[seguros_promo_shortcode ideal_para="1" ideal_para_lbl="Europa" theme="card-large" coupon="PROMO5"/]', 'wp_widget_seguros_promo');
        $spromo = new Seguros_Promo_Public('', '');
        echo esc_html($spromo->seguros_promo_display_shortcode($attrs_v));
    }
}

function wp_load_widget_spromo_chip()
{
    register_widget('wp_widget_spromo_chip');
}
add_action('widgets_init', 'wp_load_widget_spromo_chip');

class wp_widget_spromo_chip extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            // Base ID of widget
            'wp_widget',
            // Widget name will appear in UI
            __('Seguros Promo Chip', 'wp_widget_seguros_promo_chip'),
            // Widget description
            array('description' => __('Widget made to build Seguros Promo Shortcode inside the lateral menus.', 'wp_widget_seguros_promo_chip'))
        );
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['chip_destinos'] = (!empty($new_instance['chip_destinos'])) ? strip_tags($new_instance['chip_destinos']) : '';
        $instance['coupon'] = (!empty($new_instance['coupon'])) ? strip_tags($new_instance['coupon']) : '';
        return $instance;
    }

    public function form($instance)
    {
        $chip_destinos = (isset($instance['chip_destinos']) ? $instance['chip_destinos'] : __('', 'wp_widget_seguros_promo_chip'));
        $coupon = (isset($instance['coupon']) ? $instance['coupon'] : __('', 'wp_widget_seguros_promo_chip'));


?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('chip_destinos')); ?>"><?php echo esc_html('Destinos:'); ?></label>
            <select class="widefat spromo-select-widget-destino" id="<?php echo esc_attr($this->get_field_id('chip_destinos')); ?>" name="<?php echo esc_attr($this->get_field_name('chip_destinos')); ?>" type="text">
            </select>
        </p>
        <p>
            <!-- <label for="<?php //echo $this->get_field_id('theme'); 
                                ?>"><?php //_e('Tema:');
                                                                            ?></label>
    <select class="widefat" id="<?php //echo $this->get_field_id('theme'); 
                                ?>" name="<?php //echo $this->get_field_name('theme'); 
                                                                                        ?>" type="text" >
        <option value="card-large">Card Grande (3 ofertas)</option>
        <option value="card-medium">Card Médio (2 ofertas)</option>
    </select>
</p> -->
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('coupon')); ?>"><?php echo esc_html('Cupom:'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('coupon')); ?>" name="<?php echo esc_attr($this->get_field_name('coupon')); ?>" type="text" value="<?php echo esc_attr($coupon); ?>" />
        </p>
<?php
        // echo '<script>$("#' . $this->get_field_id('theme') . '").val("' . $theme . '");</script>';
        echo '<script>$("#' . $this->get_field_id('chip_destinos') . '").html(spromo_chip_options_widget_html)</script>';
        echo '<script>$("#' . $this->get_field_id('chip_destinos') . '").val("' . $chip_destinos . '");</script>';
        echo '<script>setTimeout(function(){$("#' . $this->get_field_id('chip_destinos') . '").val("' . $chip_destinos . '");},1000);</script>';
    }

    // Creating widget front-end
    public function widget($args, $instance)
    {
        $chip_destinos = apply_filters('widget_chip_destinos', $instance['chip_destinos']);
        // $theme = apply_filters('widget_theme', $instance['theme']);
        $coupon = apply_filters('widget_coupon', $instance['coupon']);
        $chip_destinos_arr = explode("||", $chip_destinos);

        $attrs_v = array(
            // "theme" => (isset($theme) && $theme != "" ? $theme : 'card-large'),
            "theme" => 'widget',
            "chip_destinos" => (isset($chip_destinos_arr[0]) && $chip_destinos_arr[0] != "" ? $chip_destinos_arr[0] : ''),
            "chip_destinos_lbl" => (isset($chip_destinos_arr[1]) && $chip_destinos_arr[1] != "" ? $chip_destinos_arr[1] : ''),
            "coupon" => (isset($coupon) && $coupon != "" ? $coupon : ''),
            "tags" => 'widget',
        );

        // echo __('[seguros_promo_shortcode ideal_para="1" ideal_para_lbl="Europa" theme="card-large" coupon="PROMO5"/]', 'wp_widget_seguros_promo');
        $spromo = new Seguros_Promo_Public('', '');
        echo esc_html($spromo->seguros_promo_chip_display_shortcode($attrs_v));
    }
}

