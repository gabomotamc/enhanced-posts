<div class="bp-grid-container">
    <div class="bp-card">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="bp-card-image">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="bp-card-content">
            <h2 class="bp-card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="bp-card-excerpt">
                <?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
            </div>
            <a class="bp-card-button" href="<?php the_permalink(); ?>">Ver mais</a>
        </div>
    </div>
</div>    