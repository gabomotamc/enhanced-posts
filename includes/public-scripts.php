<?php
function epp_public_render_posts() {
    wp_enqueue_style(
        'epp-render-posts', 
        EPP_PLUGIN_URL . 'assets/public/css/'.EPP_PLUGIN_CURRENT_MAIN_STYLE.'.css', 
        array(), 
        EPP_VERSION, 
        'all'
    );

    if ( is_single() ) {
        wp_enqueue_style( 
            'epp-render-posts-single-post-style', 
            EPP_PLUGIN_URL . 'assets/public/css/'.EPP_PLUGIN_CURRENT_POST_STYLE.'.css', 
        );
    }    
}
add_action( 'wp_enqueue_scripts', 'epp_public_render_posts' );