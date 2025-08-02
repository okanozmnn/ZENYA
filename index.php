<?php
/**
 * The main template file
 */

get_header();
?>

<div class="container">
    <div class="content-area">
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <header class="entry-header">
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                            
                            <div class="entry-meta">
                                <?php
                                echo '<span class="posted-on">' . get_the_date() . '</span>';
                                
                                $categories_list = get_the_category_list(esc_html__(', ', 'zenya'));
                                if ($categories_list) {
                                    echo '<span class="cat-links">' . $categories_list . '</span>';
                                }
                                ?>
                            </div>
                        </header>
                        
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                <?php esc_html_e('Devamını Oku', 'zenya'); ?>
                            </a>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '&larr; ' . esc_html__('Önceki', 'zenya'),
                'next_text' => esc_html__('Sonraki', 'zenya') . ' &rarr;',
            ));
            ?>
            
        <?php else : ?>
            <div class="no-results">
                <h2><?php esc_html_e('İçerik bulunamadı', 'zenya'); ?></h2>
                <p><?php esc_html_e('Aradığınız içerik bulunamadı. Lütfen farklı bir arama terimi deneyin.', 'zenya'); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
    
    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
