<?php
/**
 * Template Name: Randevu
 * Description: Randevu formu sayfası
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="service-hero randevu-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title">RANDEVU AL</h1>
                <p class="hero-subtitle">Hipnoz Terapisi için randevunuzu oluşturun</p>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Randevu Formu -->
    <section class="appointment-section">
        <div class="container">
            <div class="appointment-container">
                <div class="appointment-form">
                    <?php 
                    // Randevu formu gönderildi mi kontrol et
                    if (isset($_POST['randevu_submit'])) {
                        $ad_soyad = sanitize_text_field($_POST['ad_soyad']);
                        $email = sanitize_email($_POST['email']);
                        $telefon = sanitize_text_field($_POST['telefon']);
                        $tarih = sanitize_text_field($_POST['tarih']);
                        $saat = sanitize_text_field($_POST['saat']);
                        $mesaj = sanitize_textarea_field($_POST['mesaj']);
                        $hizmet = sanitize_text_field($_POST['hizmet']);
                        
                        // E-posta bilgileri
                        $to = get_option('admin_email'); // WordPress yönetici e-posta adresi
                        $subject = 'Yeni Randevu Talebi: ' . $ad_soyad;
                        
                        $message = "
                            <h2>Yeni Randevu Talebi</h2>
                            <p><strong>Ad Soyad:</strong> {$ad_soyad}</p>
                            <p><strong>E-posta:</strong> {$email}</p>
                            <p><strong>Telefon:</strong> {$telefon}</p>
                            <p><strong>Tarih:</strong> {$tarih}</p>
                            <p><strong>Saat:</strong> {$saat}</p>
                            <p><strong>Hizmet:</strong> {$hizmet}</p>
                            <p><strong>Mesaj:</strong> {$mesaj}</p>
                        ";
                        
                        // E-posta başlıkları
                        $headers = array(
                            'Content-Type: text/html; charset=UTF-8',
                            'From: ' . $ad_soyad . ' <' . $email . '>',
                            'Reply-To: ' . $ad_soyad . ' <' . $email . '>'
                        );
                        
                        // E-posta gönder
                        $mail_sent = wp_mail($to, $subject, $message, $headers);
                        
                        if ($mail_sent) {
                            echo '<div class="alert alert-success">
                                    <i class="fas fa-check-circle"></i>
                                    <h3>Randevu Talebiniz Alındı!</h3>
                                    <p>En kısa sürede sizinle iletişime geçeceğiz. Teşekkür ederiz.</p>
                                  </div>';
                        } else {
                            echo '<div class="alert alert-error">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <h3>Bir Hata Oluştu!</h3>
                                    <p>Lütfen daha sonra tekrar deneyiniz veya bizi telefonla arayınız.</p>
                                  </div>';
                        }
                    }
                    ?>
                    
                    <form id="randevu-form" method="post" action="">
                        <div class="form-group">
                            <label for="ad_soyad">Ad Soyad <span class="required">*</span></label>
                            <input type="text" id="ad_soyad" name="ad_soyad" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-posta Adresi <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="telefon">Telefon Numarası <span class="required">*</span></label>
                            <input type="tel" id="telefon" name="telefon" required>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="tarih">Tercih Ettiğiniz Tarih <span class="required">*</span></label>
                                <input type="date" id="tarih" name="tarih" required min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="saat">Tercih Ettiğiniz Saat <span class="required">*</span></label>
                                <select id="saat" name="saat" required>
                                    <option value="">Saat Seçiniz</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="hizmet">İlgilendiğiniz Hizmet <span class="required">*</span></label>
                            <select id="hizmet" name="hizmet" required>
                                <option value="">Hizmet Seçiniz</option>
                                <option value="Hipnoz Terapisi">Hipnoz Terapisi</option>
                                <option value="Bireysel Koçluk">Bireysel Koçluk</option>
                                <option value="Eğitim ve Seminerler">Eğitim ve Seminerler</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="mesaj">Mesajınız (Varsa)</label>
                            <textarea id="mesaj" name="mesaj" rows="4"></textarea>
                        </div>
                        
                        <div class="form-submit">
                            <button type="submit" name="randevu_submit" class="btn btn-primary">Randevu Talebini Gönder</button>
                        </div>
                    </form>
                </div>
                
                <div class="appointment-info">
                    <div class="info-box">
                        <h3><i class="fas fa-info-circle"></i> Randevu Bilgileri</h3>
                        <p>Randevu talebiniz alındıktan sonra en kısa sürede sizinle iletişime geçilecektir.</p>
                        
                        <div class="contact-info">
                            <h4>İletişim Bilgileri</h4>
                            <ul>
                                <li><i class="fas fa-phone"></i> <a href="tel:+905555555555">+90 555 555 55 55</a></li>
                                <li><i class="fas fa-envelope"></i> <a href="mailto:info@zenyaakademi.com">info@zenyaakademi.com</a></li>
                                <li><i class="fas fa-map-marker-alt"></i> İstanbul, Türkiye</li>
                            </ul>
                        </div>
                        
                        <div class="working-hours">
                            <h4>Çalışma Saatleri</h4>
                            <ul>
                                <li>Pazartesi - Cuma: 09:00 - 18:00</li>
                                <li>Cumartesi: 10:00 - 15:00</li>
                                <li>Pazar: Kapalı</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
