<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Zenya
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="sidebar widget-area" role="complementary" aria-label="<?php esc_attr_e('Sidebar', 'zenya'); ?>">
    <?php if (!dynamic_sidebar('sidebar-1')) : ?>
        <!-- Default sidebar content if no widgets are active -->
        <section class="widget widget_search">
            <h2 class="widget-title"><?php esc_html_e('Search', 'zenya'); ?></h2>
            <?php get_search_form(); ?>
        </section>
        
        <section class="widget widget_recent_entries">
            <h2 class="widget-title"><?php esc_html_e('Recent Posts', 'zenya'); ?></h2>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish',
                ));
                
                foreach ($recent_posts as $post) : ?>
                    <li>
                        <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>">
                            <?php echo esc_html($post['post_title']); ?>
                        </a>
                        <span class="post-date">
                            <?php echo esc_html(get_the_date('', $post['ID'])); ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        
        <section class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e('Categories', 'zenya'); ?></h2>
            <ul class="categories-list">
                <?php
                wp_list_categories(array(
                    'title_li'    => '',
                    'show_count'  => true,
                    'hierarchical' => true,
                    'depth'       => 1,
                ));
                ?>
            </ul>
        </section>
        
        <section class="widget widget_tag_cloud">
            <h2 class="widget-title"><?php esc_html_e('Tags', 'zenya'); ?></h2>
            <div class="tagcloud">
                <?php
                $tags = get_tags(array(
                    'orderby' => 'count',
                    'order'   => 'DESC',
                    'number'  => 15,
                ));
                
                if ($tags) :
                    foreach ($tags as $tag) : ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                           class="tag-cloud-link tag-link-<?php echo absint($tag->term_id); ?>" 
                           aria-label="<?php echo esc_attr(sprintf(/* translators: %s: tag name */ __('%s (View all posts)', 'zenya'), $tag->name)); ?>">
                            <?php echo esc_html($tag->name); ?>
                        </a>
                    <?php endforeach;
                endif;
                ?>
            </div>
        </section>
        
        <section class="widget widget_archive">
            <h2 class="widget-title"><?php esc_html_e('Archives', 'zenya'); ?></h2>
            <ul>
                <?php
                wp_get_archives(array(
                    'type'            => 'monthly',
                    'show_post_count' => true,
                ));
                ?>
            </ul>
        </section>
        
        <section class="widget widget_meta">
            <h2 class="widget-title"><?php esc_html_e('Meta', 'zenya'); ?></h2>
            <ul>
                <?php wp_register('<li class="meta-item">', '</li>'); ?>
                <li class="meta-item">
                    <?php wp_loginout(); ?>
                </li>
                <li class="meta-item">
                    <a href="<?php echo esc_url(home_url('/wp-admin/')); ?>">
                        <?php esc_html_e('Site Admin', 'zenya'); ?>
                    </a>
                </li>
                <?php wp_meta(); ?>
            </ul>
        </section>
        
        <section class="widget widget_text">
            <h2 class="widget-title"><?php esc_html_e('About This Site', 'zenya'); ?></h2>
            <div class="textwidget">
                <p>
                    <?php
                    printf(
                        /* translators: 1: site name, 2: site description */
                        esc_html__('Welcome to %1$s. %2$s', 'zenya'),
                        get_bloginfo('name'),
                        get_bloginfo('description')
                    );
                    ?>
                </p>
            </div>
        </section>
        
        <section class="widget widget_calendar">
            <h2 class="widget-title"><?php esc_html_e('Calendar', 'zenya'); ?></h2>
            <?php get_calendar(); ?>
        </section>
        
        <section class="widget widget_rss">
            <h2 class="widget-title">
                <?php esc_html_e('RSS Feeds', 'zenya'); ?>
            </h2>
            <ul>
                <li>
                    <a href="<?php bloginfo('rss2_url'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Entries RSS', 'zenya'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php bloginfo('comments_rss2_url'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Comments RSS', 'zenya'); ?>
                    </a>
                </li>
            </ul>
        </section>
    <?php endif; ?>
    
    <!-- Custom Popular Posts Widget -->
    <section class="widget widget_zenya_popular_posts">
        <h2 class="widget-title">
            <span class="widget-title-icon"><i class="fas fa-fire"></i></span>
            <?php esc_html_e('Popular Posts', 'zenya'); ?>
        </h2>
        <div class="popular-posts-widget">
            <?php
            $popular_posts = new WP_Query(array(
                'posts_per_page' => 5,
                'meta_key'       => 'post_views_count',
                'orderby'        => 'meta_value_num',
                'order'          => 'DESC',
                'post_status'    => 'publish',
                'post_type'      => 'post',
            ));
            
            if ($popular_posts->have_posts()) : ?>
                <ul class="popular-posts-list">
                    <?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                        <li class="popular-post-item">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                        <?php the_post_thumbnail('thumbnail', array('alt' => get_the_title())); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="far fa-calendar-alt"></i>
                                        <?php echo esc_html(get_the_date()); ?>
                                    </span>
                                    <span class="post-views">
                                        <i class="far fa-eye"></i>
                                        <?php echo absint(get_post_meta(get_the_ID(), 'post_views_count', true) ?: 0); ?>
                                    </span>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="no-posts-found">
                    <?php esc_html_e('No popular posts found.', 'zenya'); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Custom Newsletter Widget -->
    <section class="widget widget_zenya_newsletter">
        <div class="newsletter-widget">
            <div class="newsletter-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <h2 class="widget-title"><?php esc_html_e('Newsletter', 'zenya'); ?></h2>
            <p class="newsletter-description">
                <?php esc_html_e('Subscribe to our newsletter to receive updates on new posts and special offers.', 'zenya'); ?>
            </p>
            <form class="newsletter-form" action="#" method="post">
                <div class="form-group">
                    <input type="email" name="email" placeholder="<?php esc_attr_e('Your email address', 'zenya'); ?>" required>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i>
                        <span class="btn-text"><?php esc_html_e('Subscribe', 'zenya'); ?></span>
                    </button>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="newsletter-privacy" name="privacy" required>
                    <label for="newsletter-privacy">
                        <?php
                        printf(
                            /* translators: %s: Privacy policy page link */
                            wp_kses_post(__('I agree to the <a href="%s" target="_blank">privacy policy</a>', 'zenya')),
                            esc_url(get_privacy_policy_url())
                        );
                        ?>
                    </label>
                </div>
            </form>
            <div class="newsletter-social">
                <span class="follow-us"><?php esc_html_e('Follow Us:', 'zenya'); ?></span>
                <div class="social-links">
                    <?php if ($facebook = get_theme_mod('zenya_facebook')) : ?>
                        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Facebook', 'zenya'); ?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($twitter = get_theme_mod('zenya_twitter')) : ?>
                        <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Twitter', 'zenya'); ?>">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($instagram = get_theme_mod('zenya_instagram')) : ?>
                        <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Instagram', 'zenya'); ?>">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($youtube = get_theme_mod('zenya_youtube')) : ?>
                        <a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('YouTube', 'zenya'); ?>">
                            <i class="fab fa-youtube"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</aside>
