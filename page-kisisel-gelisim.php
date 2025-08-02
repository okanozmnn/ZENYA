<?php
/**
 * Template Name: Kişisel Gelişim ve Yaşam Becerileri
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="workshop-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <p class="hero-subtitle">Potansiyelinizi keşfedin, sınırlarınızı aşın</p>
                <div class="hero-cta" style="display: flex !important; gap: 1rem !important; flex-wrap: wrap !important; justify-content: flex-start !important; margin: 0 !important; padding: 0 !important;">
                    <a href="#program" class="btn btn-primary" style="margin: 0 !important; min-width: 150px !important; flex: 0 0 auto !important;">Program Detayları</a>
                    <a href="#kayit" class="btn btn-outline" style="margin: 0 !important; min-width: 150px !important; flex: 0 0 auto !important;">Hemen Kayıt Olun</a>
                </div>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Workshop Details -->
    <section id="detaylar" class="workshop-details">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Eğitim Detayları</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Kendinizi geliştirmek için mükemmel bir fırsat</p>
            </div>

            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <h3>Tarih & Saat</h3>
                    <p>22 Haziran 2025<br>19:00 - 21:30</p>
                </div>

                <div class="detail-card">
                    <div class="detail-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Konum</h3>
                    <p>Zenya Academy<br>Online Canlı Yayın</p>
                </div>

                <div class="detail-card">
                    <div class="detail-icon">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <h3>Katılım Ücreti</h3>
                    <p>1.299 TL<br><small>(Erken kayıt avantajı: 999 TL)</small></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Workshop Content -->
    <section class="workshop-content">
        <div class="container">
            <div class="content-grid">
                <div class="content-text">
                    <h2>Bu Eğitimde Neler Öğreneceksiniz?</h2>
                    <p>Kişisel Gelişim ve Yaşam Becerileri eğitimimiz, katılımcıların kendilerini keşfetmelerine, potansiyellerini ortaya çıkarmalarına ve daha mutlu, başarılı bir yaşam sürmelerine yardımcı olmak için tasarlanmıştır.</p>
                    
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Kendini tanıma ve kişisel farkındalık geliştirme</li>
                        <li><i class="fas fa-check"></i> Etkili iletişim ve ilişki yönetimi</li>
                        <li><i class="fas fa-check"></i> Zaman ve stres yönetimi teknikleri</li>
                        <li><i class="fas fa-check"></i> Özgüven geliştirme ve karar verme becerileri</li>
                        <li><i class="fas fa-check"></i> Hedef belirleme ve motivasyon stratejileri</li>
                    </ul>

                    <div class="cta-box">
                        <h3>Erken Kayıt Avantajı</h3>
                        <p>15 Haziran'a kadar kayıt yaptıranlara özel %20 indirim!</p>
                        <a href="#kayit" class="btn btn-secondary">Hemen Kayıt Ol</a>
                    </div>
                </div>
                
                <div class="content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workshop/kisisel-gelisim.jpg" alt="Kişisel Gelişim Eğitimi">
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Katılımcı Yorumları</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Eğitimlerimizden memnun kalan katılımcılarımızın yorumları</p>
            </div>

            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Hayatımın dönüm noktası oldu. Kendimi ve potansiyelimi keşfetmemi sağladı. Eğitmenlerin bilgisi ve enerjisi muhteşemdi."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user4.jpg" alt="Ayşe K.">
                        </div>
                        <div class="author-info">
                            <h4>Ayşe K.</h4>
                            <p>Öğretmen</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"İletişim becerilerim inanılmaz gelişti. Artık kendimi daha iyi ifade edebiliyor, ilişkilerimde daha mutluyum."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user5.jpg" alt="Mehmet Y.">
                        </div>
                        <div class="author-info">
                            <h4>Mehmet Y.</h4>
                            <p>Mühendis</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Zaman yönetimi konusunda öğrendiklerim sayesinde iş ve özel yaşam dengesini kurabildim. Teşekkürler Zenya Academy!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user6.jpg" alt="Zeynep T.">
                        </div>
                        <div class="author-info">
                            <h4>Zeynep T.</h4>
                            <p>Yönetici Asistanı</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section id="kayit" class="registration">
        <div class="container">
            <div class="registration-grid">
                <div class="registration-info">
                    <h2>Hemen Kayıt Olun</h2>
                    <p>Kendinizi geliştirmek ve hayatınızda pozitif değişimler yapmak için hemen kayıt olun. Sınırlı kontenjanımız dolmadan yerinizi ayırtın!</p>
                    
                    <div class="pricing">
                        <div class="price-box">
                            <h4>Erken Kayıt</h4>
                            <div class="price">1.299 TL <span>yerine 999 TL</span></div>
                            <p class="deadline">Son Gün: 15 Haziran 2025</p>
                        </div>
                        
                        <div class="price-box featured">
                            <h4>Öğrenci İndirimi</h4>
                            <div class="price">1.299 TL <span>yerine 799 TL</span></div>
                            <p class="deadline">Öğrenci belgesi ile geçerlidir</p>
                        </div>
                    </div>
                    
                    <div class="features">
                        <h4>Bu Eğitimde Neler Var?</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Toplam 8 saatlik interaktif eğitim</li>
                            <li><i class="fas fa-check"></i> Uygulamalı çalışma materyalleri</li>
                            <li><i class="fas fa-check"></i> Sertifika</li>
                            <li><i class="fas fa-check"></i> Ömür boyu erişim</li>
                        </ul>
                    </div>
                </div>
                
                <div class="registration-form">
                    <div class="form-container">
                        <h3>Kayıt Formu</h3>
                        <form class="workshop-form">
                            <div class="form-group">
                                <label for="name">Ad Soyad*</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">E-posta Adresi*</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Telefon Numarası*</label>
                                <input type="tel" id="phone" name="phone" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="ticket-type">Bilet Türü*</label>
                                <select id="ticket-type" name="ticket-type" required>
                                    <option value="">Seçiniz</option>
                                    <option value="early-bird">Erken Kayıt - 999 TL</option>
                                    <option value="student">Öğrenci - 799 TL (Belge gereklidir)</option>
                                    <option value="regular">Normal Bilet - 1.299 TL</option>
                                </select>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <input type="checkbox" id="terms" name="terms" required>
                                <label for="terms"><a href="#" target="_blank">Kullanım koşullarını</a> okudum ve kabul ediyorum*</label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block">Kaydı Tamamla</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Sıkça Sorulan Sorular</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question">Bu eğitime kimler katılabilir?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>18 yaş ve üzeri, kendini geliştirmek isteyen herkes bu eğitime katılabilir. Herhangi bir ön koşul veya ön bilgi gerektirmez.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Eğitim nasıl gerçekleşecek?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Eğitimlerimiz Zoom üzerinden canlı olarak gerçekleşmektedir. Kayıt olduktan sonra size özel katılım bağlantısı e-posta adresinize iletilecektir.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Eğitim sonunda sertifika alacak mıyım?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Evet, eğitimi tamamlayan tüm katılımcılarımıza dijital katılım sertifikası verilecektir.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Eğitimi kaçırdığımda telafisi olacak mı?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Evet, eğitimlerimiz kayıt altına alınmakta ve tüm katılımcılarımızla paylaşılmaktadır. Böylece kaçırdığınız dersleri dilediğiniz zaman izleyebilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Kendinize Yatırım Yapın</h2>
                <p>Hayatınızı değiştirecek bu fırsatı kaçırmayın. Hemen kayıt olun ve kendinizi geliştirmeye başlayın!</p>
                <a href="#kayit" class="btn btn-primary btn-lg">Hemen Kayıt Olun</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
