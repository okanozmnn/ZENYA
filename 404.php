<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="error-404 not-found">
        <div class="container">
            <div class="row">
                <div class="error-content">
                    <h1 class="error-code">404</h1>
                    <h2 class="error-title"><?php esc_html_e('Sayfa Bulunamadı', 'zenya'); ?></h2>
                    <p class="error-message">
                        <?php esc_html_e('Üzgünüz, aradığınız sayfa bulunamadı. Ana sayfaya dönmek için aşağıdaki bağlantıyı kullanabilirsiniz.', 'zenya'); ?>
                    </p>
                    <div class="error-actions">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                            <?php esc_html_e('Ana Sayfaya Dön', 'zenya'); ?>
                        </a>
                        <a href="#" onclick="window.history.back();" class="btn btn-outline">
                            <?php esc_html_e('Geri Dön', 'zenya'); ?>
                        </a>
                    </div>
                    
                    <div class="error-search">
                        <p><?php esc_html_e('Veya aradığınızı bulalım:', 'zenya'); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
