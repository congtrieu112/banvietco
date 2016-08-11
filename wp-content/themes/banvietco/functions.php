<?php

// Apply filter
add_filter('body_class', 'multisite_body_classes');

function multisite_body_classes($classes) {
    if(is_front_page()){
        $classes[] = 'home'; 
    }
    
    return $classes;
}

add_shortcode( 'bartag', 'bartag_func' );
function bartag_func( $atts, $content = null ) { // New function parameter $content is added!
    extract( shortcode_atts( array(
        'foo' => 'something',
        'color' => '#FFF'
    ), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

    return "<div style='color:{$color};' data-foo='${foo}'>{$content}</div>";
}


add_action( 'vc_before_init', 'webnuts_bild' );
function webnuts_bild() {
    vc_map( array(
        "name" => __( "Bild", "my-text-domain" ),
        "base" => "image_url",
        "icon" => "icon-webnuts",
        'admin_enqueue_css' => array('/wp-content/themes/devdmbootstrap3-child/framework/css/admin-wn.css' ),
        "class" => "wn-bild",
        "category" => __( "Content", "my-text-domain"),
        "params" => array(
            array(
                "type" => "attach_image",
                "holder" => "img",
                "class" => "",
                "heading" => __( "Hintergrundbild", "my-text-domain" ),
                "param_name" => "image_url",
                "value" => __( "", "my-text-domain" ),
                "description" => __( "Bitte wähle hier ein Bild aus oder lade eins hoch", "my-text-domain" )
            )
        )
    ) );
}

add_shortcode( 'image_url', 'bild_func' );
function bild_func( $atts ) {
    extract( shortcode_atts( array(
        'image_url' => 'Bild wird nicht richtig angezeigt'
    ), $atts ) );
    $img = wp_get_attachment_image_src($image_url)[0];
    return "<div class='bild-wrapper'><img src='" . "{$img}" . "'/></div>";
}

add_action( 'widgets_init', 'dang_ky_widget_voi_admin' );
function dang_ky_widget_voi_admin()
{
    register_sidebar(array(
        'name' => __('san pham noi bat', 'sanphamweb'),
        'id' => 'san-pham-noi-bat',
        'description' => __('san pham noi bat ', 'sanphamweb'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}