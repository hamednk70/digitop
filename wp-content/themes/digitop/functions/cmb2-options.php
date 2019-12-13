<?php
/**
 * This snippet has been updated to reflect the official supporting of options pages by CMB2
 * in version 2.2.5.
 *
 * If you are using the old version of the options-page registration,
 * it is recommended you swtich to this method.
 */
add_action( 'cmb2_admin_init', 'ha_register_theme_options_metabox' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function ha_register_theme_options_metabox() {
    /**
     * Registers options page menu item and form.
     */
    $cmb = new_cmb2_box( array(
        'id'           => 'ha_option_metabox',
        'title'        => esc_html__( 'تنظیمات قالب', 'ha' ),
        'object_types' => array( 'options-page' ),
        /*
         * The following parameters are specific to the options-page box
         * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
         */
        'option_key'      => 'ha_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'ha' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'ha' ), // The text for the options-page save button. Defaults to 'Save'.
    ) );
    /*
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */
//    section header
    $group_field_id = $cmb->add_field( array(
        'id'          => 'header_sec',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => 'تمظیمات هدر',
             'closed'         => true,
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'متن لوگو',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'لوگو',
        'id'   => 'image',
        'type' => 'file',
    ) );
//    end section header
//    start slider scroll
    $group_slider_scroll = $cmb->add_field( array(
        'id'          => 'slider_scroll',
        'type'        => 'group',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => 'اسلایدر اصلی {#}', // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => 'افزودن',
            'remove_button'     => 'حذف',
            'sortable'          => true, // beta
             'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_slider_scroll, array(
        'name' => 'متن اسلایدر',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_slider_scroll, array(
        'name' => 'تصویر',
        'id'   => 'image',
        'type' => 'file',
    ) );
    $cmb->add_group_field( $group_slider_scroll, array(
        'name' => 'لینک',
        'id'   => 'url',
        'type' => 'text_url',
    ) );

//    end slider scroll
    //    start services
    $group_services = $cmb->add_field( array(
        'id'          => 'index_services',
        'type'        => 'group',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => ' سرویس {#}', // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => 'افزودن',
            'remove_button'     => 'حذف',
            'sortable'          => true, // beta
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_services, array(
        'name' => 'متن ',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_services, array(
        'name' => 'آیکون',
        'id'   => 'icon',
        'type' => 'text',
    ) );
//    end services
    //    start image siade
    $group_aside_image = $cmb->add_field( array(
        'id'          => 'aside_image',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => 'تنظیمات تصویر اساید',
            'closed'         => true,
        ),
    ) );
    $cmb->add_group_field( $group_aside_image, array(
        'name' => 'متن اسلایدر',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_aside_image, array(
        'name' => 'تصویر',
        'id'   => 'image',
        'type' => 'file',
    ) );
    $cmb->add_group_field( $group_aside_image, array(
        'name' => 'لینک',
        'id'   => 'url',
        'type' => 'text_url',
    ) );

//    end  image siade
//    start  cat pro
    $group_cat_pro = $cmb->add_field( array(
        'id'          => 'cat_pro',
        'type'        => 'group',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => ' گروه محصول {#}', // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => 'افزودن',
            'remove_button'     => 'حذف',
            'sortable'          => true, // beta
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_cat_pro, array(
        'name' => 'متن ',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_cat_pro, array(
        'name' => 'تصویر',
        'id'   => 'image',
        'type' => 'file',
    ) );
    $cmb->add_group_field( $group_cat_pro, array(
        'name' => 'لینک',
        'id'   => 'url',
        'type' => 'text_url',
    ) );
    //    end  cat pro
    //    start  cat offer
    $group_cat_offer = $cmb->add_field( array(
        'id'          => 'cat_offer',
        'type'        => 'group',
        'repeatable'  => true, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => ' تخفیف محصول {#}', // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => 'افزودن',
            'remove_button'     => 'حذف',
            'sortable'          => true, // beta
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_cat_offer, array(
        'name' => 'متن ',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_cat_offer, array(
        'name' => 'تصویر',
        'id'   => 'image',
        'type' => 'file',
    ) );
    $cmb->add_group_field( $group_cat_offer, array(
        'name' => 'لینک',
        'id'   => 'url',
        'type' => 'text_url',
    ) );
    //    end  cat offer
    //    start  footer text
    $group_footer_text = $cmb->add_field( array(
        'id'          => 'footer_text',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => 'تنظیمات متن فوتر',
            'closed'         => true,
        ),
    ) );
    $cmb->add_group_field( $group_footer_text, array(
        'name' => 'متن ',
        'id'   => 'title',
        'type' => 'textarea_small',
    ) );
    //    end  footer text
    //    start  slider offer
    $group_slider_offer = $cmb->add_field( array(
        'id'          => 'slider_offer',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => 'اسلایدر شمارشی', // since version 1.1.4, {#} gets replaced by row number
        ),
    ) );
    $cmb->add_group_field( $group_slider_offer, array(
        'name' => 'تاریخ شروع ',
        'id'   => 'start_time',
        'type' => 'text_date_timestamp',
    ) );
    //    end  slider offer



}
/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function ha_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option( 'ha_options', $key, $default );
    }
    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option( 'ha_options', $default );
    $val = $default;
    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }
    return $val;
}