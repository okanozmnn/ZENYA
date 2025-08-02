<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="row">
            <div class="content-area">
                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </header>
                
                <?php if (have_posts()) : ?>
                    <div class="posts-grid">
                        <?php
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            
                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part('template-parts/content', get_post_type());
                            
                        endwhile;
                        ?>
                    </div>
                    
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '&larr; ' . esc_html__('Önceki', 'zenya'),
                        'next_text' => esc_html__('Sonraki', 'zenya') . ' &rarr;',
                    ));
                    
                else :
                    
                    get_template_part('template-parts/content', 'none');
                    
                endif;
                ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
