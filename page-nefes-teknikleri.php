<?php
/**
 * Template Name: Nefes Teknikleri Atölyesi
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="workshop-hero nefes-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <p class="hero-subtitle">Doğru nefesle hayatınızı değiştirin</p>
                <div class="hero-cta" style="display: flex !important; gap: 1rem !important; flex-wrap: wrap !important; justify-content: flex-start !important; margin: 0 !important; padding: 0 !important;">
                    <a href="#kayit" class="btn btn-primary" style="margin: 0 !important; min-width: 150px !important; flex: 0 0 auto !important;">Hemen Kayıt Olun</a>
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
                <p class="section-subtitle">Nefesin gücünü keşfedin</p>
            </div>

            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <h3>Tarih & Saat</h3>
                    <p>29 Haziran 2025<br>19:00 - 21:30</p>
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
                    <p>899 TL<br><small>(Erken kayıt avantajı: 699 TL)</small></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Workshop Content -->
    <section class="workshop-content">
        <div class="container">
            <div class="content-grid">
                <div class="content-text">
                    <h2>Bu Atölyede Neler Öğreneceksiniz?</h2>
                    <p>Nefes Teknikleri Atölyemizde, doğru nefes almanın yaşam kalitenizi nasıl artırabileceğini keşfedeceksiniz. Stres yönetiminden enerji seviyenizi yükseltmeye kadar birçok konuda pratik teknikler öğreneceksiniz.</p>
                    
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Diyafram nefesi teknikleri</li>
                        <li><i class="fas fa-check"></i> Stres ve kaygı yönetimi için nefes çalışmaları</li>
                        <li><i class="fas fa-check"></i> Enerji arttırıcı nefes teknikleri</li>
                        <li><i class="fas fa-check"></i> Uyku kalitesini artırma yöntemleri</li>
                        <li><i class="fas fa-check"></i> Günlük yaşamda nefes farkındalığı</li>
                    </ul>

                    <div class="cta-box">
                        <h3>Erken Kayıt Avantajı</h3>
                        <p>22 Haziran'a kadar kayıt yaptıranlara özel %20 indirim!</p>
                        <a href="#kayit" class="btn btn-secondary">Hemen Kayıt Ol</a>
                    </div>
                </div>
                
                <div class="content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workshop/nefes-teknikleri.jpg" alt="Nefes Teknikleri Atölyesi">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Nefesin Faydaları</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Stres Azaltma</h3>
                    <p>Doğru nefes teknikleri ile stres seviyenizi düşürün ve sakinleşin.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-battery-three-quarters"></i>
                    </div>
                    <h3>Enerji Artışı</h3>
                    <p>Nefesinizle vücudunuza daha fazla oksijen alın ve enerjinizi yükseltin.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-moon"></i>
                    </div>
                    <h3>Daha İyi Uyku</h3>
                    <p>Nefes çalışmaları ile uyku kalitenizi artırın.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Odaklanma</h3>
                    <p>Zihninizi berraklaştırın ve odaklanma sürenizi uzatın.</p>
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
            </div>
            
            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Nefes teknikleri sayesinde günlük stresim büyük ölçüde azaldı. Artık kendimi çok daha sakin ve huzurlu hissediyorum."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user7.jpg" alt="Deniz K.">
                        </div>
                        <div class="author-info">
                            <h4>Deniz K.</h4>
                            <p>Katılımcı</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Uyku problemim vardı, nefes tekniklerini öğrendikten sonra çok daha rahat uyumaya başladım. Teşekkürler!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user8.jpg" alt="Mehmet A.">
                        </div>
                        <div class="author-info">
                            <h4>Mehmet A.</h4>
                            <p>Mühendis</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"Eğitmenin anlatımı çok net ve uygulamalıydı. Öğrendiğim teknikleri günlük hayatımda kolayca uygulayabiliyorum."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/user9.jpg" alt="Zeynep T.">
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
                    <p>Nefesin gücünü keşfetmek için şimdi kayıt olun. Sınırlı kontenjanımız dolmadan yerinizi ayırtın!</p>
                    
                    <div class="pricing">
                        <div class="price-box">
                            <h4>Erken Kayıt</h4>
                            <div class="price">899 TL <span>yerine 699 TL</span></div>
                            <p class="deadline">Son Gün: 22 Haziran 2025</p>
                        </div>
                        
                        <div class="price-box featured">
                            <h4>Çift Katılım</h4>
                            <div class="price">1.798 TL <span>yerine 1.199 TL</span></div>
                            <p class="deadline">Arkadaşınızla birlikte %25 indirim</p>
                        </div>
                    </div>
                    
                    <div class="features">
                        <h4>Bu Atölyeye Özel Avantajlar:</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> 2.5 saatlik uygulamalı eğitim</li>
                            <li><i class="fas fa-check"></i> Nefes egzersizleri PDF rehberi</li>
                            <li><i class="fas fa-check"></i> Eğitim kaydına erişim</li>
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
                                <label for="ticket-type">Bilet Türü*</label>
                                <select id="ticket-type" name="ticket-type" required>
                                    <option value="">Seçiniz</option>
                                    <option value="early-bird">Erken Kayıt - 699 TL</option>
                                    <option value="duo">Çift Katılım - 1.199 TL</option>
                                    <option value="regular">Normal Bilet - 899 TL</option>
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
                    <button class="faq-question">Bu atölyeye katılmak için herhangi bir ön bilgi gerekli mi?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Hayır, herhangi bir ön bilgi veya deneyim gerekmiyor. Her seviyeden katılımcıya uygun şekilde tasarlanmıştır.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Atölye sırasında yanımda bulundurmam gereken bir şey var mı?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Rahat kıyafetler giymenizi ve yanınızda bir şişe su bulundurmanızı öneririz. Ayrıca, not almak için bir defter ve kalem bulundurabilirsiniz.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Hamileyim, katılabilir miyim?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Hamileliğinizin ilk üç ayındaysanız veya herhangi bir riskli gebelik durumunuz varsa katılmadan önce doktorunuza danışmanızı öneririz.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Ödememi nasıl yapabilirim?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Kredi kartı ile tek çekim veya taksitli ödeme yapabilirsiniz. Ayrıca havale/EFT seçeneği de mevcuttur.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">İptal ve iade politikası nedir?<i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Etkinlik tarihinden en az 48 saat öncesine kadar yapılan iptallerde ücretin %90'ı iade edilir. Daha sonraki iptallerde iade yapılmamaktadır.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Nefesin Gücünü Keşfedin</h2>
                <p>Hayatınızı değiştirecek bu deneyime katılmak için geç kalmayın. Hemen kayıt olun!</p>
                <a href="#kayit" class="btn btn-primary btn-lg">Hemen Kayıt Olun</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
