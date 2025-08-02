<?php
/**
 * Template Name: Kimdir?
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="mv-hero">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="breadcrumb">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Founders Section -->
    <section class="founders-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Kurucularımız</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Zenya Academy'nin arkasındaki deneyimli ekip</p>
            </div>

            <!-- Enes Demirci -->
            <div class="founder-card">
                <div class="founder-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/ENESBEY.png" alt="Enes Demirci">
                </div>
                <div class="founder-content">
                    <div class="founder-header">
                        <h3>Enes Demirci</h3>
                        <span class="founder-title">Kurucu Ortak & Eğitmen</span>
                    </div>
                    <div class="founder-bio">
                        <p>Enes Demirci, 1995 yılında Kahramanmaraş'ta dünyaya geldi. Gazi Üniversitesi İşletme bölümünden mezun olduktan sonra, insan psikolojisi ve bilinçaltı alanlarında uzmanlaşmak üzere eğitimlerine devam etti. 2023 yılında Hipnoterapi Uzmanı, 2024'de NLP Uzman Eğitmeni ve 2025'de Yaşam Koçu Eğitmeni olarak binlerce kişiye ulaştı.</p>
                        
                        <p>Kendini "ruhun şifalanmasına aracılık eden bir rehber" olarak tanımlayan Demirci, 2020 yılında Okan Özmen ile birlikte Zenya Academy'yi kurdu. Burada, bireylerin içsel dönüşümlerine ve farkındalık yolculuklarına rehberlik ediyor.</p>
                        
                        <div class="founder-quote">
                            <blockquote>"Her insan kendi içinde mükemmel bir bütünlüğe sahiptir. Ben sadece bu bütünlüğü hatırlamanıza yardımcı oluyorum."</blockquote>
                        </div>
                        
                        <div class="founder-expertise">
                            <h4>Uzmanlık Alanları:</h4>
                            <ul class="expertise-list">
                                <li>Hipnoterapi</li>
                                <li>NLP Uygulayıcısı</li>
                                <li>Bilinçaltı Dönüşüm Teknikleri</li>
                                <li>Bireysel Koçluk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Okan Özmen -->
            <div class="founder-card">
                <div class="founder-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/okanbey.png" alt="Okan Özmen">
                </div>
                <div class="founder-content">
                    <div class="founder-header">
                        <h3>Okan Özmen</h3>
                        <span class="founder-title">Kurucu Ortak & Yaşam Koçu</span>
                    </div>
                    <div class="founder-bio">
                        <p>1993 Eskişehir doğumlu Okan Özmen, Ege Üniversitesi İşletme bölümü ve Anadolu Üniversitesi Siyaset Bilimi ve Kamu Yönetimi bölümünden mezun olduktan sonra, kişisel gelişim ve farkındalık alanında uzmanlaştı. 4 yılı aşkın süredir bireysel koçluk yapan Özmen, özellikle iş dünyasındaki profesyonellerin performanslarını artırmalarına yardımcı oluyor.</p>
                        
                        <p>2020 yılında tanıştığı Enes Demirci ile birlikte, geleneksel öğretileri modern yaşamla buluşturan Zenya Academy'yi kurdu. Özellikle "Bilinçli Liderlik" ve "İçsel Dönüşüm" programlarıyla tanınıyor.</p>
                        
                        <div class="founder-quote">
                            <blockquote>"Gerçek değişim, kendinle yüzleşme cesaretini gösterdiğinde başlar. Bu yolculukta her adımda yanınızdayım."</blockquote>
                        </div>
                        
                        <div class="founder-expertise">
                            <h4>Uzmanlık Alanları:</h4>
                            <ul class="expertise-list">
                                <li>Profesyonel Yaşam Koçluğu</li>
                                <li>Bilinçli Liderlik Eğitmenliği</li>
                                <li>Mindfulness ve Meditasyon</li>
                                <li>İş Dünyasında Dönüşüm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="our-story-section section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Hikayemiz</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Zenya Academy nasıl kuruldu?</p>
            </div>
            <div class="story-content">
                <p>Zenya Academy, 2020 yılında Enes Demirci ve Okan Özmen tarafından, insanların içsel potansiyellerini keşfetmelerine ve daha bilinçli bir yaşam sürmelerine yardımcı olmak amacıyla kuruldu. İki kurucu ortak, kendi uzmanlık alanlarını birleştirerek, bütüncül bir kişisel dönüşüm yaklaşımı geliştirdiler.</p>
                
                <p>Kuruluşundan bu yana binlerce kişinin hayatına dokunan Zenya Academy, modern terapi teknikleri ile kadim öğretileri harmanlayan benzersiz bir metodoloji geliştirmiştir. Her bireyin kendi içsel yolculuğunda güvenle ilerleyebileceği bir alan yaratmayı hedefleyen akademi, sürekli gelişen ve genişleyen bir ekibe sahiptir.</p>
                
                <p>Bugün Zenya Academy, sadece bir eğitim merkezi değil, aynı zamanda bir dönüşüm topluluğudur. Bu toplulukta herkes kendini güvende hisseder, kabul görür ve desteklenir.</p>
            </div>
            
            <div class="mission-vision-cards">
                <div class="mv-card">
                    <div class="mv-card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Misyonumuz</h3>
                    <p>Bireylerin kendi içsel potansiyellerini keşfetmelerine ve gerçekleştirmelerine yardımcı olmak için güvenli, kapsayıcı ve dönüştürücü bir alan sunmak.</p>
                </div>
                <div class="mv-card">
                    <div class="mv-card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Vizyonumuz</h3>
                    <p>Bilinçli bireylerden oluşan, birbirine bağlı ve uyum içinde yaşayan bir toplum yaratmak ve bu dönüşüme öncülük etmek.</p>
                </div>
                <div class="mv-card">
                    <div class="mv-card-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Değerlerimiz</h3>
                    <p>Şefkat, bütünlük, dürüstlük, sürekli gelişim ve topluluk ruhu temel değerlerimizi oluşturur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Uzman Ekibimiz</h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">Deneyimli ve uzman kadromuzla yanınızdayız</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-1.jpg" alt="Uzman Psikolog">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Dr. Ayşe Yılmaz</h3>
                        <span>Klinik Psikolog</span>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-2.jpg" alt="Nefes Koçu">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Mehmet Kaya</h3>
                        <span>Nefes Koçu</span>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-3.jpg" alt="Meditasyon Eğitmeni">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Zeynep Arslan</h3>
                        <span>Meditasyon Eğitmeni</span>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-4.jpg" alt="Yaşam Koçu">
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>Can Demir</h3>
                        <span>Yaşam Koçu</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Dönüşüm Yolculuğunuza Başlayın</h2>
                <p>Uzman ekibimizle tanışın ve kendiniz için doğru programı keşfedin</p>
                <a href="/randevu" class="btn btn-light">Ücretsiz Danışmanlık Alın</a>
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
