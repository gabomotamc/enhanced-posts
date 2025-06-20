<?php
##########
# Callbacks
##########
add_shortcode( 'bpp_render_posts', 'bpp_render_posts_shortcode' );

##########
# Functions
##########
//Create the shortcode [bpp_render_posts]
function bpp_render_posts_shortcode( $atts ) {

    // Enqueue styles only when this shortcode is executed
    wp_enqueue_style('bpp-render-posts', BPP_PLUGIN_URL . 'assets/css/public/render-posts.css', array(), BPP_VERSION, 'all');

    // Allow overriding the posts_per_page attribute (default: -1 which means all posts).
    $atts = shortcode_atts( array(
        'posts_per_page' => -1,
    ), $atts, 'better_posts' );

    // Start output buffering.
    ob_start();
    
    // Query all posts (or limit using posts_per_page attribute).
    $query_args = array(
        'post_type'      => 'post',
        'posts_per_page' => intval( $atts['posts_per_page'] ),
    );

    $query = new WP_Query( $query_args );
    
    if( $query->have_posts() ) {
        echo '<div class="bp-grid-container">';
            while ( $query->have_posts() ) {
            $query->the_post();
            $post_slug = get_post_field('post_name', get_the_ID());
            require_once(BPP_PLUGIN_PATH.'templates/render-posts-card.php');
            }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>No posts found.</p>';
    }

    // Return all buffered content.
    return ob_get_clean();
}//bpp_render_posts_shortcode