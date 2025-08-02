<?php
/**
 * Front page template
 */
get_header(); ?>

<div class="container">
    <section class="hero-section">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/hero-image.jpg" alt="Zenya Akademi">
                </div>
                <div class="welcome-message">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/welcome-message.png" alt="Merhaba, seni bekliyorduk...">
                </div>
            </div>
        </div>
    </section>

    <section class="section-container">
        <div class="container">
            <div class="content-wrapper">
                <div class="buttons-section">
                    <div class="button-wrapper">
                        <a href="<?php echo esc_url(home_url('/etkinlikler')); ?>" class="button-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>ETKİNLİKLER</span>
                        </a>
                    </div>
                    <div class="button-wrapper">
                        <a href="<?php echo esc_url(home_url('/randevu')); ?>" class="button-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>RANDEVU TAKVİMİ</span>
                        </a>
                    </div>
                    <div class="button-wrapper">
                        <a href="<?php echo esc_url(home_url('/numeroloji')); ?>" class="button-item">
                            <i class="fas fa-calculator"></i>
                            <span>NUMEROLOJİNİ HESAPLA</span>
                        </a>
                    </div>
                    <div class="button-wrapper">
                        <a href="<?php echo esc_url(home_url('/egitimler')); ?>" class="button-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>EĞİTİM TAKVİMİ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container">
        <div class="container">
            <div class="content-wrapper">
                <div class="content-columns">
                    <div class="left-column">
                        <h2>Etkinlikler & Eğitimler</h2>
                        <div class="event-item">
                            <h3>Vizyon Panosu Atölyesi</h3>
                            <p>Hayallerinizi somutlaştırın ve geleceğinize yön verin. Bu atölye ile içsel gücünüzü keşfedin.</p>
                        </div>
                        <div class="event-item">
                            <h3>Kişisel Gelişim ve Yaşam Becerileri</h3>
                            <p>Günlük yaşamınızı zenginleştirecek, iletişim ve farkındalık becerilerinizi geliştirecek eğitimler.</p>
                        </div>
                        <div class="event-item">
                            <h3>Nefes Teknikleri Çalıştayı</h3>
                            <p>Doğru nefes alıp verme teknikleriyle stresi azaltın, enerjinizi yükseltin ve dinginliği bulun.</p>
                        </div>
                        <div class="event-item">
                            <h3>Meditasyon Pratikleri</h3>
                            <p>Zihninizi susturun, iç huzuru bulun. Farklı meditasyon teknikleriyle anı yaşayın.</p>
                        </div>
                    </div>
                    <div class="right-column">
                        <h2>Etkinliklerimizden Görseller</h2>
                        <div class="slider-container">
                            <?php
                            $slide_dir = get_template_directory() . '/assets/images/slide/';
                            $slide_url = get_template_directory_uri() . '/assets/images/slide/';
                            $slides = glob($slide_dir . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                            $active = ' active';
                            
                            if (!empty($slides)) {
                                foreach ($slides as $index => $slide) {
                                    $slide_name = basename($slide);
                                    $slide_url_full = $slide_url . $slide_name;
                                    $alt_text = 'Etkinlik görseli ' . ($index + 1);
                                    ?>
                                    <div class="slide<?php echo $active; ?>">
                                        <img src="<?php echo esc_url($slide_url_full); ?>" 
                                             alt="<?php echo esc_attr($alt_text); ?>"
                                             loading="lazy">
                                    </div>
                                    <?php
                                    $active = ''; // Sadece ilk slayt için active sınıfını ekle
                                }
                            } else {
                                // Eğer hiç slayt yoksa varsayılan bir görsel göster
                                ?>
                                <div class="slide active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" 
                                         alt="Gösterilecek görsel bulunamadı"
                                         loading="lazy">
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="slider-nav">
                            <button onclick="changeSlide(-1)">&#10094;</button>
                            <button onclick="changeSlide(1)">&#10095;</button>
                        </div>
                    </div>
    </section>

    <section class="section-container">
        <div class="container">
            <div class="content-wrapper">
                <div class="modern-events">
                    <div class="section-header">
                        <h2 class="section-title">Yaklaşan <span>Etkinlikler</span></h2>
                        <p class="section-subtitle">Keşfetmek için etkinliklerimize göz atın</p>
                        <a href="/etkinlikler" class="view-all">Tümünü Gör <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="events-container">
                        <?php
                        // Varsayılan etkinlikler
                        $default_events = array(
                            array(
                                'title' => 'Vizyon Panosu Atölyesi',
                                'desc' => 'Hayallerinizi somutlaştırın ve hedeflerinize ulaşmak için güçlü bir araç olan vizyon panonuzu oluşturun.',
                                'day' => '15',
                                'month' => 'HAZ',
                                'time' => '14:00',
                                'location' => 'İstanbul',
                                'image' => get_template_directory_uri() . '/assets/images/events/event1.jpg',
                                'price' => 'Ücretsiz',
                                'category' => 'Atölye'
                            ),
                            array(
                                'title' => 'Kişisel Gelişim Eğitimi',
                                'desc' => 'Günlük yaşamınızı zenginleştirecek, iletişim ve farkındalık becerilerinizi geliştirecek eğitimler.',
                                'day' => '22',
                                'month' => 'HAZ',
                                'time' => '19:00',
                                'location' => 'İstanbul',
                                'image' => get_template_directory_uri() . '/assets/images/events/event2.jpg',
                                'price' => 'Ücretsiz',
                                'category' => 'Eğitim'
                            ),
                            array(
                                'title' => 'Nefes Teknikleri',
                                'desc' => 'Doğru nefes alıp verme teknikleriyle stresi azaltın, enerjinizi yükseltin.',
                                'day' => '29',
                                'month' => 'HAZ',
                                'time' => '11:00',
                                'location' => 'Ankara',
                                'image' => get_template_directory_uri() . '/assets/images/events/event3.jpg',
                                'price' => 'Ücretsiz',
                                'category' => 'Çalıştay'
                            )
                        );

                        // Etkinlikleri döngüye al
                        foreach ($default_events as $event) : ?>
                            <div class="event-card">
                                <div class="event-image">
                                    <img src="<?php echo esc_url($event['image']); ?>" alt="<?php echo esc_attr($event['title']); ?>" loading="lazy">
                                    <div class="event-date">
                                        <span class="day"><?php echo esc_html($event['day']); ?></span>
                                        <span class="month"><?php echo esc_html($event['month']); ?></span>
                                    </div>
                                    <div class="event-category"><?php echo esc_html($event['category']); ?></div>
                                </div>
                                <div class="event-content">
                                    <div class="event-meta">
                                        <span class="event-location"><i class="fas fa-map-marker-alt"></i> <?php echo esc_html($event['location']); ?></span>
                                        <span class="event-time"><i class="far fa-clock"></i> <?php echo esc_html($event['time']); ?></span>
                                    </div>
                                    <h3 class="event-title"><?php echo esc_html($event['title']); ?></h3>
                                    <p class="event-excerpt"><?php echo esc_html($event['desc']); ?></p>
                                    <div class="event-footer">
                                        <a href="/etkinlikler" class="btn-event">Detaylar <i class="fas fa-arrow-right"></i></a>
                                        <div class="event-price"><?php echo esc_html($event['price']); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="text-center mt-5">
                        <a href="/etkinlikler" class="btn btn-primary">Tüm Etkinlikleri Görüntüle</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <h2>Hizmetlerimiz</h2>
        <div class="service-grid">
            <div class="service-item">
                <i class="fas fa-brain"></i>
                <h3>HİPNOZ SEANSI</h3>
                <p>Zihninin derinliklerine nazikçe yolculuk et. Bilinçaltındaki sınırlayıcı inançları keşfet ve dönüştür. Daha özgür, daha hafif bir "sen" için…</p>
            </div>
            <div class="service-item">
                <i class="fas fa-seedling"></i>
                <h3>YAŞAM KOÇLUĞU</h3>
                <p>Kendi cevaplarına ulaşmak için sana bir yoldaşlık sunuyoruz. Hedeflerine odaklan, potansiyelini açığa çıkar.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-hand-holding-heart"></i>
                <h3>BİLİNÇALTI DÖNÜŞÜMÜ</h3>
                <p>Geçmişin yüklerinden arın, bilinçaltının gücünü lehindeyle kullan. Kendi içindeki şifacıyı uyandır.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-chart-pie"></i>
                <h3>NUMEROLOJİ DANIŞMANLIĞI</h3>
                <p>Sayıların gizemli dünyasıyla kendini tanı. Yaşam yolunu, potansiyellerini ve fırsatlarını keşfet.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-book-open"></i>
                <h3>FARKINDALIK EĞİTİMLERİ</h3>
                <p>Anı yaşamanın bilgeliğini öğren. Zihinsel dinginlik ve duygusal denge ile tam bir varoluşa adım at.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-lightbulb"></i>
                <h3>KİŞİSEL GELİŞİM ATÖLYELERİ</h3>
                <p>Pratik uygulamalarla kendini geliştir, yeni beceriler kazan ve içsel dönüşüm yolculuğuna başla.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-paint-brush"></i>
                <h3>YAKINDA YENİ HİZMET</h3>
                <p>Biraz bizler, Biraz Sizler için, yakında yeni hizmetler sunacağız.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-magic"></i>
                <h3>YAKINDA YENİ HİZMET</h3>
                <p>Biraz bizler, Biraz Sizler için, yakında yeni hizmetler sunacağız.</p>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <i class="bg-icon fas fa-star star"></i>
        <i class="bg-icon fas fa-comment message"></i>
        <i class="bg-icon fas fa-quote-left quote-left"></i>
        <i class="bg-icon fas fa-quote-right quote-right"></i>
        <h2>Katılımcılarımızdan Geri Bildirimler</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Zenya Academy sayesinde hayatıma yeni bir yön verdim. Gerçekten dönüştürücü bir deneyimdi!"</p>
                </div>
                <span class="author">- Ayşe D.</span>
            </div>
            <div class="testimonial-card">
                <p>"Okan ve Enes'in rehberliğiyle kendimi yeniden keşfettim. Bu yolculuk için minnettarım."</p>
                <span class="author">- Can E.</span>
            </div>
            <div class="testimonial-card">
                <p>"Hipnoz seansı beklentimin çok üzerindeydi. Zihnimde büyük bir rahatlama hissettim. Kesinlikle tavsiye ederim."</p>
                <span class="author">- Elif G.</span>
            </div>
            <div class="testimonial-card">
                <p>"Numeroloji danışmanlığı ile kendimi daha iyi anladım. Sayıların gücüne inanamadım!"</p>
                <span class="author">- Mert K.</span>
            </div>
            <div class="testimonial-card">
                <p>"Aldığım kişisel gelişim eğitimleri sayesinde hem iş hem de özel hayatımda çok daha dengeli ve mutluyum."</p>
                <span class="author">- Zeynep B.</span>
            </div>
            <div class="testimonial-card">
                <p>"Zenya, ruhuma iyi gelen bir liman oldu. Güvenli ve destekleyici ortam için teşekkürler."</p>
                <span class="author">- Deniz A.</span>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>Hemen Randevu Alın</h2>
            <p>Kendiniz için bir adım atın ve hayatınızda pozitif değişimlere imza atın.</p>
            <a href="/randevu" class="cta-button">RANDEVU AL</a>
        </div>
    </section>

    <?php get_footer(); ?>
    
    <script>
    // Slider functionality
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slider-container .slide');
    const totalSlides = slides.length;
    let slideInterval;

    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Show the current slide
        slides[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    // Auto slide every 5 seconds
    function startSlider() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    // Pause on hover
    const slider = document.querySelector('.slider-container');
    if (slider) {
        slider.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        slider.addEventListener('mouseleave', () => {
            startSlider();
        });
    }

    // Initialize slider
    document.addEventListener('DOMContentLoaded', () => {
        showSlide(currentSlide);
        startSlider();
    });

    // Expose functions to global scope for button clicks
    window.changeSlide = function(direction) {
        if (direction > 0) {
            nextSlide();
        } else {
            prevSlide();
        }
        // Reset auto-slide timer
        clearInterval(slideInterval);
        startSlider();
    };
    </script>