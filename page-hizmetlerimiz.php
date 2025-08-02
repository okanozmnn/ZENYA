<?php
/**
 * Template Name: Hizmetlerimiz
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="mv-hero">
        <div class="container">
            <h1 class="page-title">Hizmetlerimiz</h1>
            <div class="breadcrumb">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-grid-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Uzmanlık Alanlarımız</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">İhtiyaçlarınıza özel çözümler sunuyoruz</p>
            </div>

            <div class="services-grid">
                <!-- Hipnoz Terapisi -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Hipnoz Terapisi</h3>
                    <p>Bilinçaltınızı yeniden programlayarak kalıcı değişimler sağlayın.</p>
                    <a href="<?php echo home_url('/hipnoz-terapisi'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
                </div>

                <!-- Yaşam Koçluğu -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Yaşam Koçluğu</h3>
                    <p>Hedeflerinize ulaşmanız için size özel koçluk programları.</p>
                <a href="<?php echo home_url('/yasam-koclugu'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
            </div>

            <!-- Bilinçaltı Dönüşümü -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-magic"></i>
                </div>
                <h3>Bilinçaltı Dönüşümü</h3>
                <p>Derin bilinçaltı değişiklikler için özel programlar.</p>
                <a href="<?php echo home_url('/bilincalti-donusum'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
            </div>

            <!-- Numeroloji Danışmanlığı -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3>Numeroloji Danışmanlığı</h3>
                <p>Hayatınızın sayısal analizi ve kişisel yolculuğunuz.</p>
                <a href="<?php echo home_url('/numeroloji'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
            </div>

            <!-- Farkındalık Eğitimi -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Farkındalık Eğitimi</h3>
                <p>İçsel bilinç ve farkındalık geliştiren eğitimler.</p>
                <a href="<?php echo home_url('/farkindalik-egitimi'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
            </div>

            <!-- Kişisel Gelişim Atölyeleri -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Kişisel Gelişim Atölyeleri</h3>
                <p>Grup çalışmasıyla kişisel gelişim.</p>
                <a href="<?php echo home_url('/kisisel-gelisim-atolyeleri'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Müşteri Yorumları</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">İyi bir işin en iyi reklamı, mutlu müşteriler.</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-1.jpg" alt="Müşteri Yorumu">
                    </div>
                    <div class="testimonial-content">
                        <p>"Hipnoz terapisi sayesinde korkularımı yenmeyi başardım. Teşekkür ederim!"</p>
                        <div class="testimonial-author">
                            <h4>Ali Yılmaz</h4>
                            <span>İstanbul</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-2.jpg" alt="Müşteri Yorumu">
                    </div>
                    <div class="testimonial-content">
                        <p>"Yaşam koçluğu programı, hedeflerime ulaşmamda büyük bir destek oldu."</p>
                        <div class="testimonial-author">
                            <h4>Ayşe Demir</h4>
                            <span>Ankara</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-3.jpg" alt="Müşteri Yorumu">
                    </div>
                    <div class="testimonial-content">
                        <p>"Farkındalık eğitimi beni tamamen yeni bir kişi haline getirdi."</p>
                        <div class="testimonial-author">
                            <h4>Mehmet Öz</h4>
                            <span>Bursa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Hayatınıza Değişim Getirin</h2>
                <p>İlk adımı atmak için bizimle iletişime geçin</p>
                <a href="#" class="btn btn-primary">Randevu Al</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
                    <a href="<?php echo home_url('/yasam-koclugu'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
                </div>

                <!-- Bilinçaltı Dönüşümü -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Bilinçaltı Dönüşümü</h3>
                    <p>Bilinçaltı temizliği ile özgürleşin ve potansiyelinizi keşfedin.</p>
                    <a href="<?php echo home_url('/bilincalti-donusumu'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
                </div>

                <!-- Numeroloji Danışmanlığı -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Numeroloji Danışmanlığı</h3>
                    <p>Sayıların gizemli dünyasında kendinizi keşfedin.</p>
                    <a href="<?php echo home_url('/numeroloji-danismanligi'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
                </div>

                <!-- Farkındalık Eğitimi -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Farkındalık Eğitimi</h3>
                    <p>Anı yaşayarak iç huzurunuzu keşfedin.</p>
                    <a href="<?php echo home_url('/farkindalik-egitimi'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
                </div>

                <!-- Kişisel Gelişim Atölyeleri -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Kişisel Gelişim Atölyeleri</h3>
                    <p>Kendinizi geliştirmek için özel tasarlanmış atölye çalışmaları.</p>
                    <a href="<?php echo home_url('/kisisel-gelisim-egitimleri'); ?>" class="btn btn-outline">Detaylı Bilgi</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Size Uygun Çözümü Birlikte Bulalım</h2>
                <p>Uzman ekibimizle ücretsiz ön görüşme yaparak ihtiyaçlarınıza en uygun çözümü belirleyelim.</p>
                <a href="<?php echo home_url('/randevu'); ?>" class="btn btn-primary">Ücretsiz Görüşme Talep Et</a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Danışan Yorumları</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Danışanlarımızın deneyimlerini keşfedin</p>
            </div>

            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>Hipnoz terapisi sayesinde yıllardır kurtulamadığım fobimden kurtuldum. Kesinlikle tavsiye ederim.</p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4>Ayşe K.</h4>
                                <span>Öğretmen</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>Yaşam koçluğu sayesinde kariyer hedeflerime odaklanmayı ve başarmayı öğrendim. Teşekkürler Zenya Akademi!</p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4>Mehmet Y.</h4>
                                <span>İş İnsanı</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Modern Hero Styles - Reusable across pages */
.mv-hero {
  min-height: 500px;
  background: linear-gradient(135deg, #e6f0f7 0%, #f9e7e1 50%, #fdf6e3 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  padding: 80px 0 60px;
  overflow: hidden;
  box-shadow: 0 8px 40px rgba(43,103,140,0.08);
}

.mv-hero::before {
  content: '';
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: url('https://www.transparenttextures.com/patterns/diamond-upholstery.png') repeat;
  opacity: 0.08;
  z-index: 1;
  pointer-events: none;
}

.mv-hero::after {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(192,86,47,0.1) 0%, transparent 70%);
  border-radius: 50%;
  z-index: 1;
  pointer-events: none;
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(180deg); }
}

.mv-hero > * {
  position: relative;
  z-index: 2;
}

.mv-hero .page-title {
  font-size: 4rem;
  font-weight: 800;
  background: linear-gradient(135deg, #2b678c 0%, #c0562f 50%, #e07a5f 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 25px;
  letter-spacing: 1px;
  text-align: center;
  line-height: 1.2;
  position: relative;
  z-index: 2;
}

.mv-hero .breadcrumb {
  text-align: center;
  color: #4a5568;
  font-size: 1.2rem;
  font-weight: 500;
  position: relative;
  z-index: 2;
}

.mv-hero .breadcrumb a {
  color: #c0562f;
  text-decoration: none;
  transition: color 0.3s ease;
}

.mv-hero .breadcrumb a:hover {
  color: #2b678c;
}

/* Responsive Design */
@media (max-width: 768px) {
  .mv-hero {
    min-height: 400px;
    padding: 60px 0 40px;
  }
  
  .mv-hero .page-title {
    font-size: 2.8rem;
  }
  
  .mv-hero::after {
    width: 300px;
    height: 300px;
    top: -30%;
    right: -15%;
  }
}

@media (max-width: 480px) {
  .mv-hero {
    min-height: 350px;
    padding: 50px 0 30px;
  }
  
  .mv-hero .page-title {
    font-size: 2.2rem;
  }
  
  .mv-hero::after {
    width: 250px;
    height: 250px;
    top: -20%;
    right: -10%;
  }
}
</style>

<?php get_footer(); ?>
