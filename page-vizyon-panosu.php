<?php
/**
 * Template Name: Vizyon Panosu Atölyesi
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="workshop-hero vizyon-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <p class="hero-subtitle">Hayallerinizi gerçeğe dönüştürün</p>
                <div class="hero-cta" style="display: flex !important; gap: 1rem !important; flex-wrap: wrap !important; justify-content: flex-start !important; margin: 0 !important; padding: 0 !important;">
                    <a href="#kayit" class="btn btn-primary" style="margin: 0 !important; min-width: 150px !important; flex: 0 0 auto !important;">Hemen Katılın</a>
                    <a href="#detaylar" class="btn btn-outline" style="margin: 0 !important; min-width: 150px !important; flex: 0 0 auto !important;">Detayları Gör</a>
                </div>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Workshop Details -->
    <section id="detaylar" class="workshop-details">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Atölye Detayları</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Hayallerinizi görselleştirin, hedeflerinize ulaşın</p>
            </div>

            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <h3>Tarih & Saat</h3>
                    <p>6 Temmuz 2025<br>14:00 - 17:00</p>
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
                    <p>1.299 TL<br><small>(Malzeme dahil)</small></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Workshop Content -->
    <section class="workshop-content">
        <div class="container">
            <div class="content-grid">
                <div class="content-text">
                    <h2>Bu Atölyede Neler Yapacağız?</h2>
                    <p>Vizyon Panosu Atölyemizde, hayallerinizi ve hedeflerinizi görselleştireceğiniz kişisel bir vizyon panosu oluşturacaksınız. Bu panoyu evinizde veya ofisinizde görebileceğiniz bir yere asarak, hedeflerinize her gün odaklanacak ve onları gerçekleştirme yolunda ilerleyeceksiniz.</p>
                    
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Kendi vizyon panonuzu oluşturma</li>
                        <li><i class="fas fa-check"></i> Hedef belirleme teknikleri</li>
                        <li><i class="fas fa-check"></i> Görselleştirme çalışmaları</li>
                        <li><i class="fas fa-check"></i> Motivasyon stratejileri</li>
                        <li><i class="fas fa-check"></i> Tüm malzemeler bizden</li>
                    </ul>

                    <div class="cta-box">
                        <h3>Erken Kayıt Avantajı</h3>
                        <p>30 Haziran'a kadar kayıt yaptıranlara %20 indirim!</p>
                        <a href="#kayit" class="btn btn-secondary">Hemen Kayıt Ol</a>
                    </div>
                </div>
                
                <div class="content-image">
                    <div class="youtube-placeholder" data-video-id="Cs0Sw7YIzrw">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workshop/vizyon-panosu-preview.jpg" alt="Vizyon Panosu Örnek">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hizmetlerimiz Bölümü -->
    <section class="services-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Hizmetlerimiz</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">İhtiyaçlarınıza uygun çözümler sunuyoruz</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Bireysel Danışmanlık</h3>
                    <p>Kişiye özel danışmanlık hizmetleri ile hedeflerinize ulaşın.</p>
                    <a href="#randevu" class="service-link">Randevu Al <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Grup Atölyeleri</h3>
                    <p>Uzman eğitmenler eşliğinde grup çalışmalarına katılın.</p>
                    <a href="#randevu" class="service-link">Hemen Katıl <i class="fas fa-arrow-right"></i></a>
                    <div class="featured-badge">Popüler</div>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <h3>Online Eğitimler</h3>
                    <p>İstediğiniz yerden katılabileceğiniz online eğitim programları.</p>
                    <a href="#randevu" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Vizyon Panosu Nedir?</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Neden bir vizyon panosu oluşturmalısınız?</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Hedef Odaklılık</h3>
                    <p>Hedeflerinizi sürekli göz önünde tutarak odaklanmanızı artırır.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Bilinçaltı Programlama</h3>
                    <p>Bilinçaltınızı hedeflerinize yönlendirir ve onları gerçekleştirmenize yardımcı olur.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Motivasyon</h3>
                    <p>Görsel hatırlatıcılar sayesinde motivasyonunuzu yüksek tutarsınız.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3>Yaratıcılık</h3>
                    <p>Yaratıcı süreçlerinizi harekete geçirir ve ilham verir.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Materials Section -->
    <section class="materials-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Atölye Malzemeleri</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Tüm malzemeler tarafımızdan karşılanacaktır</p>
            </div>
            
            <div class="materials-grid">
                <div class="material-item">
                    <div class="material-icon">
                        <i class="fas fa-thumbtack"></i>
                    </div>
                    <h3>Panolar</h3>
                    <p>Farklı boyutlarda kaliteli pano seçenekleri</p>
                </div>
                
                <div class="material-item">
                    <div class="material-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Makas ve Yapıştırıcı</h3>
                    <p>Kolay kullanım için gerekli tüm malzemeler</p>
                </div>
                
                <div class="material-item">
                    <div class="material-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3>Süsleme Malzemeleri</h3>
                    <p>Renkli kağıtlar, boyalar, simler ve daha fazlası</p>
                </div>
                
                <div class="material-item">
                    <div class="material-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Kaynak Kitaplar</h3>
                    <p>İlham alabileceğiniz görsel kaynaklar</p>
                </div>
            </div>
            
            <div class="delivery-info">
                <div class="delivery-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <p>Malzemeler atölye öncesinde adresinize kargolanacaktır. Kargo ücreti dahildir.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Katılımcı Yorumları</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Vizyon panom sayesinde hedeflerime daha odaklı ilerliyorum. Her sabah ona bakarak güne başlamak inanılmaz motive edici!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user10.jpg" alt="Ayşe K.">
                        </div>
                        <div class="author-info">
                            <h4>Ayşe K.</h4>
                            <p>Girişimci</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Atölye sırasında öğrendiğim teknikler ve oluşturduğum vizyon panosu sayesinde kariyer hedeflerime çok daha hızlı ulaştım."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user11.jpg" alt="Mehmet Y.">
                        </div>
                        <div class="author-info">
                            <h4>Mehmet Y.</h4>
                            <p>Pazarlama Uzmanı</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Sadece bir atölye değil, hayatımı değiştiren bir deneyimdi. Vizyon panom sayesinde hayallerim gerçek oldu!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user12.jpg" alt="Zeynep T.">
                        </div>
                        <div class="author-info">
                            <h4>Zeynep T.</h4>
                            <p>Öğretmen</p>
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
                    <p>Hayallerinizi gerçeğe dönüştürme yolculuğuna çıkmak için hemen kayıt olun. Sınırlı kontenjanımız dolmadan yerinizi ayırtın!</p>
                    
                    <div class="pricing">
                        <div class="price-box">
                            <h4>Erken Kayıt</h4>
                            <div class="price">1.299 TL <span>yerine 1.039 TL</span></div>
                            <p class="deadline">Son Gün: 30 Haziran 2025</p>
                        </div>
                        
                        <div class="price-box featured">
                            <h4>Çift Katılım</h4>
                            <div class="price">2.598 TL <span>yerine 1.799 TL</span></div>
                            <p class="deadline">Arkadaşınızla birlikte %30 tasarruf edin</p>
                        </div>
                    </div>
                    
                    <div class="features">
                        <h4>Bu Atölyeye Özel Avantajlar:</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Tüm malzemeler kargonuzda (kargo ücretsiz)</li>
                            <li><i class="fas fa-check"></i> 3 saatlik uygulamalı eğitim</li>
                            <li><i class="fas fa-check"></i> Vizyon panosu hazırlama rehberi</li>
                            <li><i class="fas fa-check"></i> Eğitim sonrası destek</li>
                            <li><i class="fas fa-check"></i> Katılım sertifikası</li>
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
                                <label for="address">Adres (Kargo İçin)*</label>
                                <textarea id="address" name="address" rows="3" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="ticket-type">Bilet Türü*</label>
                                <select id="ticket-type" name="ticket-type" required>
                                    <option value="">Seçiniz</option>
                                    <option value="early-bird">Erken Kayıt - 1.039 TL</option>
                                    <option value="duo">Çift Katılım - 1.799 TL</option>
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
                    <button class="faq-question">Vizyon panosu nedir, nasıl çalışır?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Vizyon panosu, hedeflerinizi ve hayallerinizi temsil eden görsellerin ve yazıların yer aldığı bir görsel temsilidir. Beyninizin sağ lobunu (yaratıcılık) harekete geçirerek hedeflerinize odaklanmanızı sağlar ve bilinçaltınızı bu hedeflere yönlendirir.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Atölye sırasında neler yapacağız?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Atölye sırasında önce hedef belirleme tekniklerini öğrenecek, ardından kendinize özel bir vizyon panosu oluşturacaksınız. Eğitmenimiz size rehberlik edecek ve tüm sorularınızı yanıtlayacaktır.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Malzemeler ne zaman elime ulaşır?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Kayıt olduktan sonraki 2 iş günü içinde kargoya verilecektir. Kargo süresi adresinize göre değişiklik gösterebilir, ancak genellikle 2-3 iş günü içerisinde elinizde olur.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Online atölyeye nasıl katılacağım?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Atölye gününden önce e-posta adresinize gelen bağlantı üzerinden Zoom platformuna katılabilirsiniz. Tek ihtiyacınız internet bağlantısı olan bir bilgisayar, tablet veya akıllı telefon.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">İptal ve iade politikası nedir?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Atölye tarihinden en az 72 saat öncesine kadar yapılan iptallerde ücretin %90'ı iade edilir. Daha sonraki iptallerde iade yapılmamaktadır. Malzemeler kargolanmışsa, kargo ücreti ve malzeme bedeli iade edilmez.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Hayallerinizi Gerçeğe Dönüştürün</h2>
                <p>Vizyon Panosu Atölyesi ile hedeflerinize bir adım daha yaklaşın. Hemen kayıt olun, geleceğinizi şekillendirin!</p>
                <a href="#kayit" class="btn btn-primary btn-lg">Hemen Kayıt Olun</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
