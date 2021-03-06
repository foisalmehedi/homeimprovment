<?php get_header(); ?>

    <div class="featured-area">
       
        <div class="header-wrap">

            <h1 class="entry-title">
            
                <?php
                if ( is_search() ) {
                    echo __('Your Search Results for ', 'supreme-directory').get_search_query(false);
                } else {
                    echo get_the_title();
                }
                ?>
            </h1>
            <?php if (get_post_meta( 'subtitle', true)) {
                echo '<div class="entry-subtitle">' . get_post_meta('subtitle', true) . '</div>';
            } ?>

        </div>
    </div>

    <div class="container">
        <div class="content-box content-single">
            <?php if (!have_posts()) : ?>
                <div class="alert-error">
                    <p><?php _e('Sorry, no results were found.', 'supreme-directory'); ?></p>
                </div>
                <?php get_search_form(); ?>
            <?php endif; ?>
            <?php
            while (have_posts()) : the_post();

                // Include the page content template.
                get_template_part('content-blog');

                // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => __('Previous', 'supreme-directory'),
                'next_text' => __('Next', 'supreme-directory'),
            ));
            ?>
        </div>
    </div>
<?php get_footer(); ?>
