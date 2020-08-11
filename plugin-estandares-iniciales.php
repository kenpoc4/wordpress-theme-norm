<?php
// Plugin name: Estandares iniciales
// Descripction: Reinicia todas la configuraciones establecidas nativamente en CSS y coloca un estandar como base en la libreria "Normalize".
// Version: 2.0.0
// Author: Kenny Poncio
// Author URI: https://github.com/kenpoc4

if(!defined('ABSPATH'))die();

function kmir_estandares_plugin(){
    $css_url    =   plugin_dir_url( __FILE__ );

    wp_enqueue_style('normalize'    , $css_url . '/assets/css/normalize.css'   , array(), '8.0.1');
    wp_enqueue_style('kmir_style'      , $css_url . '/assets/css/kmir_style.css'      , array(), '1.0.0');

}
add_action( 'wp_enqueue_scripts', 'kmir_estandares_plugin' );


// Habilitar Thumbnails, tamaños para img y slugs SEO

function kmir_conf_img(){
    // habilitar imagen destacada
    add_theme_support('post-thumbnails');

    // Titulos SEO
    add_theme_support('title-tag');

    // Agragando tamaño de images
    add_image_size( 'pequeño', '350', '350', true);
    add_image_size( 'm_largo', '350', '750', true);
    add_image_size( 'm_ancho', '750', '350', true);
    add_image_size( 'caja', '400', '375', true);
    add_image_size( 'mediano', '700', '400', true);
    add_image_size( 'blog', '966', '644', true);
}
add_action( 'after_setup_theme', 'kmir_conf_img');