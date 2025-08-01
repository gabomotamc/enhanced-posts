<?php
##########
# Callbacks
##########
add_shortcode( 'epp_render_posts', 'epp_render_posts_shortcode' );

##########
# Functions
##########
//Create the shortcode [epp_render_posts]
function epp_render_posts_shortcode( $atts ) {

    // Allow overriding the posts_per_page attribute (default: -1 which means all posts).
    $atts = shortcode_atts( array(
        'posts_per_page' => -1,
    ), $atts, 'epp_render_posts' );

    // Start output buffering.
    ob_start();
    
    // Query all posts (or limit using posts_per_page attribute).
    $query_args = array(
        'post_type'      => 'post',
        'posts_per_page' => intval( $atts['posts_per_page'] ),
    );

    $query = new WP_Query( $query_args );
    $html = '';

    if( $query->have_posts() ) {
        $html .='<div class="ep-grid-container">';
            while ( $query->have_posts() ) {

                $query->the_post();
                $post_slug = get_post_field('post_name', get_the_ID());

                $html .='<div class="ep-card">';
                    if ( has_post_thumbnail() ) {
                        $html .='<div class="ep-card-image">';
                            $html .='<a href="'.get_permalink().'">';
                                $html .= get_the_post_thumbnail(get_the_ID(), 'medium');
                            $html .='</a>';
                        $html .='</div>';
                    }
                    $html .='<div class="ep-card-content">';
                        $html .='<h2 class="ep-card-title">';
                            $html .='<a href="'.get_permalink().'">';
                            $html .= get_the_title();
                            $html .='</a>';
                        $html .='</h2>';
                        $html .='<div class="ep-card-excerpt">';
                            $html .= wp_trim_words( get_the_excerpt(), 15, '...' );
                        $html .='</div>';//excerpt
                        $html .='<a class="ep-card-button" href="'.get_permalink().'">View</a>';
                    $html .='</div>';//card-content
                $html .='</div>';//card

            }//while
        $html .= '</div>';//container
        wp_reset_postdata();
    } else {
        $html .= '<p>No posts found.</p>';
    }
    
    return $html;
    // Return all buffered content.
    return ob_get_clean();
}//bpp_render_posts_shortcode