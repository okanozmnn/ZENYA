<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="row">
            <div class="content-area">
                <?php
                while (have_posts()) :
                    the_post();
                    
                    get_template_part('template-parts/content', 'page');
                    
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    
                endwhile; // End of the loop.
                ?>
            </div>
            
            <?php 
            // Only show sidebar if it's not a full-width page template
            if (!is_page_template('templates/full-width.php')) {
                get_sidebar();
            }
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
