<?php
function epp_public_render_posts() {
    wp_enqueue_style(
        'epp-render-posts', 
        EPP_PLUGIN_URL . 'assets/public/css/'.EPP_PLUGIN_CURRENT_MAIN_STYLE.'.css', 
        array(), 
        EPP_VERSION, 
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'epp_public_render_posts' );