<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="row">
            <div class="content-area">
                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf(esc_html__('Arama Sonuçları: %s', 'zenya'), '<span>' . get_search_query() . '</span>');
                        ?>
                    </h1>
                </header>
                
                <?php if (have_posts()) : ?>
                    <div class="search-results">
                        <?php
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            
                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part('template-parts/content', 'search');
                            
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
                    ?>
                    <div class="no-results">
                        <p><?php esc_html_e('Üzgünüz, aramanızla eşleşen bir sonuç bulunamadı. Lütfen farklı anahtar kelimelerle tekrar deneyin.', 'zenya'); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
