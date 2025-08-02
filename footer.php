<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Zenya Academy
 * @since Zenya Academy 1.0
 */
?>
	</div>
</div>

<footer class="footer" style="background-color: #ffffff; padding: 2.5rem 0;">
    <div class="container">
        <div class="row">
            <!-- Brand Column -->
            <div class="col-lg-4 mb-4">
                <div class="footer-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logor.png" alt="Zenya Academy" class="footer-logo-img">
                    <p class="footer-description">İçsel huzur ve kişisel gelişim için rehberiniz.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-2 col-md-4 mb-4">
                <h4 class="footer-heading">Hızlı Linkler</h4>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="/">Ana Sayfa</a></li>
                    <li><a class="footer-link" href="/hizmetler">Hizmetler</a></li>
                    <li><a class="footer-link" href="/etkinlikler">Etkinlikler</a></li>
                    <li><a class="footer-link" href="/blog">Blog</a></li>
                    <li><a class="footer-link" href="/iletisim">İletişim</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div class="col-lg-2 col-md-4 mb-4">
                <h4 class="footer-heading">Hizmetlerimiz</h4>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="/hipnoz">Hipnoz Seansları</a></li>
                    <li><a class="footer-link" href="/yoga">Yoga Life</a></li>
                    <li><a class="footer-link" href="/meditasyon">Meditasyon</a></li>
                    
                    <li><a class="footer-link" href="/koçluk">Yaşam Koçluğu</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="col-lg-2 col-md-4 mb-4">
                <h4 class="footer-heading">İletişim</h4>
                <ul class="contact-info">
                    <li><i class="fas fa-envelope"></i> info@zenyaacademy.com</li>
                    <li><i class="fas fa-phone"></i> +90 5XX 000 00 00</li>
                    <li><i class="fas fa-map-marker-alt"></i> Tepebaşı | Eskişehir, Türkiye</li>
                </ul>
            </div>

            <!-- Newsletter Column -->
            <div class="col-lg-2 col-md-4 mb-4">
                <h4 class="footer-heading">Bültenimiz</h4>
                <p class="newsletter-text">Güncellemeleri kaçırmayın. Abone olun:</p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="E-posta adresiniz" required>
                        <button type="submit" class="btn btn-primary">Abone Ol</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
    <!-- Yasal Uyarı -->
    <div class="footer-legal-notice">
        <div class="container text-center">
            <p>Bu sitede yer alan tüm içerikler bilgilendirme amaçlı olup, herhangi bir tıbbi teşhis veya tedavi yöntemi önerisi içermez. Sitemizdeki içerikler, yalnızca genel bilgilendirme amacıyla sunulmuştur. Sağlık sorunlarınız için mutlaka bir uzman hekime başvurunuz.</p>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner text-center">
                <div class="footer-copyright">
                    <?php
                    $copyright_text = get_theme_mod('zenya_footer_copyright', sprintf(
                        esc_html__('%1$s © %2$s %3$s. %4$s', 'zenya'),
                        esc_html__('ZENYA ACADEMY', 'zenya'),
                        date('Y'),
                        get_bloginfo('name'),
                        esc_html__('Tüm hakları saklıdır. İçeriğin izinsiz kullanılması ve çoğaltılması yasaktır. Bu tema, Okan Özmen tarafından ZENYA ACADEMY için özel olarak tasarlanmıştır.', 'zenya')
                    ));
                    echo wp_kses_post($copyright_text);
                    ?>
                </div>
                
                <?php if (has_nav_menu('footer')) : ?>
                    <nav class="footer-navigation" aria-label="<?php esc_attr_e('Footer Menu', 'zenya'); ?>">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer-menu',
                            'container'      => false,
                            'depth'          => 1,
                        ));
                        ?>
                    </nav>
                <?php endif; ?>
                
                <div class="footer-payments">
                    <?php if (get_theme_mod('zenya_payment_visa')) : ?>
                        <span class="payment-icon payment-visa">
                            <i class="fab fa-cc-visa"></i>
                        </span>
                    <?php endif; ?>
                    
                    <?php if (get_theme_mod('zenya_payment_mastercard')) : ?>
                        <span class="payment-icon payment-mastercard">
                            <i class="fab fa-cc-mastercard"></i>
                        </span>
                    <?php endif; ?>
                    
                    <?php if (get_theme_mod('zenya_payment_paypal')) : ?>
                        <span class="payment-icon payment-paypal">
                            <i class="fab fa-cc-paypal"></i>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button (Mobile) -->
    <a href="#page" class="back-to-top-mobile" aria-label="<?php esc_attr_e('Back to top', 'zenya'); ?>">
        <i class="fas fa-arrow-up"></i>
    </a>
</footer>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay"></div>

<!-- Search Overlay -->
<div id="search-overlay" class="search-overlay">
    <div class="search-overlay-inner">
        <button class="search-close" aria-label="<?php esc_attr_e('Close search', 'zenya'); ?>">
            <i class="fas fa-times"></i>
        </button>
        <div class="search-form-wrapper">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<!-- Mobile Menu Panel -->
<nav id="mobile-menu-panel" class="mobile-menu-panel" aria-hidden="true">
    <div class="mobile-menu-panel-inner">
        <div class="mobile-menu-panel-header">
            <div class="mobile-menu-panel-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>
            <button class="mobile-menu-panel-close" aria-label="<?php esc_attr_e('Close menu', 'zenya'); ?>">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="mobile-menu-panel-content">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'mobile',
                'menu_class'     => 'mobile-menu',
                'container'      => false,
                'fallback_cb'    => false,
                'depth'          => 2,
            ));
            ?>
        </div>
        
        <div class="mobile-menu-panel-footer">
            <?php if ($phone = get_theme_mod('zenya_phone')) : ?>
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="btn btn-block btn-primary">
                    <i class="fas fa-phone-alt"></i>
                    <?php esc_html_e('Call Us', 'zenya'); ?>
                </a>
            <?php endif; ?>
            
            <div class="mobile-menu-social">
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
                
                <?php if ($linkedin = get_theme_mod('zenya_linkedin')) : ?>
                    <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('LinkedIn', 'zenya'); ?>">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<!-- Cookie Consent -->
<div id="cookieConsent" class="cookie-container">
    <div class="cookie-content">
        <p class="cookie-message">
            Bu web sitesi çerezleri kullanır. Daha fazla bilgi için <a href="/cerez-politikasi" class="cookie-link">Çerez Politikası</a> sayfamızı ziyaret edebilirsiniz.
        </p>
        <button id="acceptCookies" class="cookie-button">Kabul Et</button>
    </div>
</div>



<script>
// Cookie Consent Functionality
(function() {
    'use strict';
    
    document.addEventListener('DOMContentLoaded', function() {
        const cookieConsent = document.getElementById('cookieConsent');
        const acceptCookies = document.getElementById('acceptCookies');
        
        // Check if cookie is already accepted
        if (!document.cookie.includes('cookieAccepted=true')) {
            cookieConsent.classList.add('show');
        }
        
        // Handle cookie acceptance
        acceptCookies.addEventListener('click', function() {
            cookieConsent.style.opacity = '0';
            setTimeout(function() {
                cookieConsent.style.display = 'none';
            }, 300);
            document.cookie = 'cookieAccepted=true; path=/; max-age=31536000';
        });
    });
})();
</script>