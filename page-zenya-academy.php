<?php
/**
 * Template Name: Zenya Academy
 * Template Post Type: page
 */

get_header(); ?>

<style>
/* Modern ve optimize Zenya Academy sayfa stili */
.zenya-hero {
  min-height: 420px;
  background: linear-gradient(120deg, #e6f0f7 0%, #f9e7e1 60%, #fdf6e3 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  padding: 60px 0 40px;
  overflow: hidden;
  box-shadow: 0 8px 40px rgba(43,103,140,0.08);
}
.zenya-hero::before {
  content: '';
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: url('https://www.transparenttextures.com/patterns/diamond-upholstery.png') repeat;
  opacity: 0.08;
  z-index: 1;
  pointer-events: none;
}
.zenya-hero > * {
  position: relative;
  z-index: 2;
}
.zenya-hero-title {
  font-size: 2.8rem;
  font-weight: 800;
  color: #2b678c;
  margin-bottom: 18px;
  letter-spacing: 0.5px;
}
.zenya-hero-title span {
  color: #c0562f;
  background: linear-gradient(90deg, #c0562f 0%, #e07a5f 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.zenya-hero-subtitle {
  font-size: 1.2rem;
  color: #4a5568;
  margin-bottom: 32px;
}
.zenya-hero-buttons {
  display: flex;
  gap: 18px;
  flex-wrap: wrap;
  justify-content: center;
}
.btn-primary {
  background: #c0562f;
  color: #fff;
  border-radius: 50px;
  font-weight: 600;
  padding: 14px 35px;
  border: none;
  font-size: 1rem;
  transition: all 0.3s;
}
.btn-primary:hover {
  background: #a8431e;
  color: #fff;
  box-shadow: 0 6px 20px rgba(192, 86, 47, 0.18);
}
.btn-outline {
  background: transparent;
  color: #2b678c;
  border: 2px solid #2b678c;
  border-radius: 50px;
  font-weight: 600;
  padding: 14px 30px;
  font-size: 1rem;
  transition: all 0.3s;
}
.btn-outline:hover {
  background: #2b678c;
  color: #fff;
}
.section-header h1 {
  font-size: 2.5rem;
  font-weight: 800;
  background: linear-gradient(90deg, #c0562f 0%, #e07a5f 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 18px;
  position: relative;
  display: inline-block;
  letter-spacing: 0.5px;
}
.section-header .accent-line {
  width: 80px; height: 4px;
  background: linear-gradient(90deg, #c0562f, #e07a5f);
  border-radius: 2px;
  margin: 0 auto 10px;
}
.section-header .subtitle {
  color: #2b678c;
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 0;
}
.section-intro {
  max-width: 800px;
  margin: 0 auto 60px;
  text-align: center;
  font-size: 1.2rem;
  color: #5D6D81;
  line-height: 1.8;
}
.feature-grid, .features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  margin-bottom: 60px;
}
.feature-card {
  background: #fff;
  border-radius: 15px;
  padding: 36px 24px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  transition: all 0.3s cubic-bezier(.4,1,.7,1);
  position: relative;
  overflow: hidden;
  z-index: 1;
  border: 1px solid #f0f0f0;
  text-align: center;
}
.feature-card:before {
  content: '';
  position: absolute;
  top: 0; left: 0; width: 100%; height: 5px;
  background: linear-gradient(90deg, #c0562f, #e07a5f);
  opacity: 0;
  transition: all 0.3s cubic-bezier(.4,1,.7,1);
}
.feature-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 15px 40px rgba(0,0,0,0.10);
  border-color: #e07a5f;
}
.feature-card:hover:before {
  opacity: 1;
}
.feature-icon {
  font-size: 2.5rem;
  color: #c0562f;
  margin-bottom: 20px;
  transition: all 0.3s cubic-bezier(.4,1,.7,1);
}
.feature-card:hover .feature-icon {
  transform: scale(1.1);
  color: #e07a5f;
}
.feature-title, .feature-card h3 {
  font-size: 1.3rem;
  color: #1a202c;
  margin-bottom: 12px;
  font-weight: 700;
}
.feature-text, .feature-card p {
  color: #4a5568;
  line-height: 1.7;
  font-size: 1.05rem;
}
.quote-section {
  max-width: 800px;
  margin: 0 auto 60px;
  text-align: center;
  position: relative;
  padding: 40px 24px;
  background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(248,250,252,0.95) 100%);
  border-radius: 15px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.05);
  border: 1px solid rgba(0,0,0,0.03);
}
.quote-icon {
  font-size: 3rem;
  color: #c0562f;
  opacity: 0.18;
  position: absolute;
  top: 20px;
  left: 30px;
}
.quote-text {
  font-size: 1.3rem;
  color: #1a202c;
  font-style: italic;
  line-height: 1.6;
  margin-bottom: 20px;
  position: relative;
  z-index: 1;
}
.quote-author {
  color: #c0562f;
  font-weight: 600;
  font-size: 1.1rem;
}
.stats-section {
  margin: 60px 0;
  text-align: center;
}
.stats-section h2 {
  font-size: 1.8rem;
  color: #1a202c;
  margin-bottom: 40px;
  font-weight: 700;
}
.stats-section .stat-card {
  background: #fff;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 5px 25px rgba(0,0,0,0.05);
  width: 200px;
  transition: all 0.3s ease;
  display: inline-block;
  margin: 0 10px 20px 10px;
}
.stats-section .stat-card .stat-value {
  font-size: 2.5rem;
  font-weight: 800;
  color: #c0562f;
  margin-bottom: 10px;
  line-height: 1;
}
.stats-section .stat-card .stat-label {
  font-size: 1rem;
  color: #4a5568;
  font-weight: 500;
}
.founders-section {
  padding: 80px 0;
  background: #f9fafb;
}
.founders-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 0px;
  margin-top: 40px;
  justify-items: center;
  justify-content: center;
}
.founder-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: box-shadow 0.3s, transform 0.3s;
  min-width: 260px;
  max-width: 320px;
  width: 100%;
  margin: 0;
  padding: 0;
}
.founder-card:hover {
  box-shadow: 0 15px 40px rgba(0,0,0,0.10);
  transform: translateY(-6px) scale(1.02);
}
.founder-photo {
  width: 100%;
  height: 380px;
  object-fit: cover;
  border-radius: 18px 18px 0 0;
  display: block;
}
.founder-info {
  padding: 32px 24px 24px 24px;
  text-align: center;
  width: 100%;
}
.founder-info h3 {
  font-size: 1.5rem;
  color: #1a202c;
  margin: 0 0 8px 0;
  font-weight: 800;
}
.founder-info p {
  color: #c0562f;
  font-weight: 500;
  margin-bottom: 18px;
}
.view-more {
  color: #c0562f;
  font-weight: 700;
  font-size: 1.05rem;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  margin-top: 10px;
  cursor: pointer;
  transition: color 0.2s;
}
.view-more i {
  margin-left: 4px;
  transition: transform 0.3s;
}
.founder-card:hover .view-more i {
  transform: translateX(5px);
}
.founder-modal::-webkit-scrollbar {
  width: 8px;
}
.founder-modal::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}
.founder-modal::-webkit-scrollbar-thumb {
  background: #c0562f;
  border-radius: 10px;
}
.close-modal {
  transition: all 0.3s ease;
}
.close-modal:hover {
  transform: rotate(90deg);
  color: #c0562f !important;
}
.zenya-manifesto-section {
  padding: 60px 0 40px;
  background: linear-gradient(90deg, #f9fafb 0%, #f3f7fa 100%);
}
.zenya-manifesto-container {
  max-width: 900px;
  margin: 0 auto;
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 32px rgba(43,103,140,0.07);
  padding: 48px 32px 32px 32px;
  position: relative;
  text-align: center;
}
.zenya-manifesto-text p {
  font-size: 1.18rem;
  color: #2b678c;
  font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.85;
  margin-bottom: 22px;
  font-weight: 500;
}
.zenya-manifesto-text strong {
  color: #c0562f;
  font-weight: 700;
}
.zenya-manifesto-signature {
  margin-top: 38px;
}
.manifesto-sign {
  font-family: 'Dancing Script', cursive, 'Poppins', sans-serif;
  font-size: 1.25rem;
  color: #c0562f;
  font-weight: 600;
  margin-bottom: 18px;
}
.manifesto-sign span {
  display: block;
  font-size: 1.05rem;
  color: #2b678c;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  margin-top: 6px;
}
.manifesto-founders {
  display: flex;
  justify-content: center;
  gap: 60px;
  margin-top: 10px;
  flex-wrap: wrap;
}
.manifesto-founders div {
  text-align: center;
}
.manifesto-founders strong {
  font-size: 1.08rem;
  color: #1a202c;
  font-weight: 700;
}
.manifesto-founders span {
  font-size: 0.98rem;
  color: #4a5568;
  font-weight: 500;
}
@media (max-width: 600px) {
  .zenya-manifesto-container { padding: 24px 8px; }
  .manifesto-founders { gap: 18px; }
  .zenya-manifesto-text p { font-size: 1rem; }
}
.about-box {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 24px rgba(43,103,140,0.08);
  padding: 40px 32px 32px 32px;
  max-width: 700px;
  margin: 0 auto 40px auto;
  text-align: center;
}
.about-box h2 {
  color: #2b678c;
  font-size: 2rem;
  font-weight: 800;
  margin-bottom: 18px;
  letter-spacing: 0.5px;
}
.about-box p {
  color: #4a5568;
  font-size: 1.15rem;
  line-height: 1.8;
  font-weight: 500;
}
@media (max-width: 600px) {
  .about-box { padding: 20px 8px; }
  .about-box h2 { font-size: 1.3rem; }
  .about-box p { font-size: 1rem; }
}
.about-description {
  max-width: 700px;
  margin: 0 auto 40px auto;
  text-align: center;
  color: #4a5568;
  font-size: 1.15rem;
  line-height: 1.8;
  font-weight: 500;
}
@media (max-width: 600px) {
  .about-description { font-size: 1rem; }
}
.about-message-box {
  background: linear-gradient(120deg, #f9fafb 0%, #f3f7fa 100%);
  border-radius: 18px;
  box-shadow: 0 6px 32px rgba(43,103,140,0.07);
  padding: 48px 32px 32px 32px;
  max-width: 800px;
  margin: 0 auto 48px auto;
  position: relative;
  text-align: center;
  overflow: hidden;
}
.about-message-icon {
  position: absolute;
  top: 24px;
  left: 24px;
  font-size: 2.2rem;
  color: #c0562f;
  opacity: 0.18;
  z-index: 2;
}
.about-message-content p {
  font-size: 1.15rem;
  color: #2b678c;
  font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.85;
  margin-bottom: 18px;
  font-weight: 500;
}
.about-message-content strong {
  color: #2b678c;
  font-weight: 700;
}
.about-message-content strong.zenya-orange {
  color: #c0562f;
}
.about-message-quote {
  font-size: 1.18rem;
  color: #c0562f;
  font-style: italic;
  background: rgba(192,86,47,0.07);
  border-left: 4px solid #c0562f;
  margin: 28px auto 22px auto;
  padding: 16px 24px;
  border-radius: 8px;
  max-width: 600px;
  font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.about-message-final {
  font-size: 1.13rem;
  color: #2b678c;
  font-weight: 600;
  margin-top: 18px;
}
.about-message-final span {
  color: #c0562f;
  font-weight: 700;
}
@media (max-width: 600px) {
  .about-message-box { padding: 24px 8px; }
  .about-message-icon { top: 12px; left: 12px; font-size: 1.4rem; }
  .about-message-content p, .about-message-quote, .about-message-final { font-size: 1rem; }
}

/* Tüm ana container ve section'lar için max-width */
.about-message-box,
.zenya-manifesto-container,
.contact-section .container,
.founders-section .container {
  max-width: 1500px;
  margin-left: auto;
  margin-right: auto;
}
@media (max-width: 1550px) {
  .about-message-box,
  .zenya-manifesto-container,
  .contact-section .container,
  .founders-section .container {
    max-width: 98vw;
    padding-left: 12px;
    padding-right: 12px;
  }
}
.limited-width {
  max-width: 800px;
  margin: 0 auto;
}
</style>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="zenya-hero">
        <div class="zenya-hero-container">
            <h1 class="zenya-hero-title">
                İçsel Dönüşüm Yolculuğunuza <span>Adım Atın</span>
            </h1>
            <p class="zenya-hero-subtitle">
                Zenya Academy ile kendinizi keşfedin, potansiyelinizi ortaya çıkarın.
            </p>
        </div>
        <div class="zenya-hero-overlay"></div>
    </section>

    <!-- Modern About Section -->
    <section class="modern-section">
        <div class="modern-container">
            <!-- section-header kaldırıldı, about-message-box'a taşındı -->
            <div class="about-message-box">
              <div class="section-header" data-aos="fade-up">
                <h1>Hakkımızda</h1>
                <div class="accent-line"></div>
              </div>
              <div class="about-message-icon">
                <i class="fas fa-seedling"></i>
              </div>
              <div class="about-message-content limited-width">
                <p><strong class="zenya-orange">Zenya Academy</strong> olarak, her bireyin doğuştan gelen, keşfedilmeyi bekleyen <strong>benzersiz bir potansiyele</strong> sahip olduğuna yürekten inanıyoruz. Yaşamın hızla değişen dinamikleri içerisinde yönünü kaybetmiş, içsel rehberliğe ihtiyaç duyan bireylere; kendilerini tanımaları, güçlenmeleri ve yaşamlarını anlamlı bir şekilde yeniden inşa edebilmeleri için <strong>güvenli bir alan</strong> sunuyoruz.</p>
                <p>Kuruluş amacımız; yalnızca bilgi aktaran bir yapı olmanın ötesinde, bireylere <strong>ilham veren</strong>, onlara temas eden, <strong>içsel dönüşümlerine eşlik eden</strong> bir yol arkadaşı olmaktır. Bu yolculukta, <strong>yargılamadan</strong>, <strong>koşulsuz bir kabulle</strong> yaklaşır; her bireyin özündeki ışığı fark etmesine, kendi iç sesini duymasına ve yaşamına bütünsel bir denge getirmesine destek oluruz.</p>
                <p>Deneyimli eğitmen kadromuz ve uzman rehberlerimiz eşliğinde sunduğumuz hizmetlerde; <strong>bilimsel temelli tekniklerle spiritüel anlayışı birleştiriyor</strong>, zihinsel, duygusal ve ruhsal bütünlüğü esas alıyoruz. Kişisel gelişim, mindfulness, nefes teknikleri, meditasyon, enerji çalışmaları ve koçluk yaklaşımlarımızla; katılımcılarımıza sadece öğrenme değil, aynı zamanda gerçek bir <strong>içsel dönüşüm alanı</strong> sağlıyoruz.</p>
                <p><strong class="zenya-orange">Zenya Academy</strong>’de inanıyoruz ki, <strong>gerçek değişim</strong>; birinin size inandığını hissettiğinizde başlar. İç sesinizi duyduğunuzda, kendi değerinizin farkına vardığınızda ve yaşamınıza farklı bir bakış açısıyla yaklaşabildiğinizde, dönüşüm kaçınılmaz olur. Bizler de bu dönüşüm yolculuğunda, bireylerin kendi potansiyellerini gerçekleştirmelerine rehberlik etmek için buradayız.</p>
                <p>Sunduğumuz her eğitim, her atölye, her seans; sadece teknik bilgi aktarımı değil, aynı zamanda <strong>kalpten gelen bir paylaşım</strong>, bir uyanış ve <strong>birlikte büyümenin davetidir</strong>. <strong class="zenya-orange">Zenya Academy</strong>’de katılımcılarımızı yalnızca bir birey olarak değil, tüm varoluşlarıyla bir bütün olarak kabul eder; her temasın, her deneyimin kalıcı bir etki yaratmasını amaçlarız.</p>
                <p>Hayatın zorluklarında yönünü kaybetmiş, içsel sesiyle bağlantısını koparmış ya da sadece daha derin bir anlam arayışında olan herkese, <strong class="zenya-orange">Zenya Academy</strong>; sıcak, güvenilir ve ilham verici bir yol arkadaşıdır. Sizi, kendinizi yeniden keşfetmeye, yaşamınıza yeni bir anlam katmaya ve özünüze dönerek gerçek potansiyelinizi ortaya çıkarmaya davet ediyoruz.</p>
                <p class="about-message-final"><strong class="zenya-orange">Zenya Academy</strong> — Huzura olan yolculuğunuzda, yanınızdayız.</p>
              </div>
            </div>
            <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3>Uzman Eğitmenler</h3>
                            <p>Alanında uzman ve deneyimli eğitmen kadromuzla hizmetinizdeyiz.</p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Bireysel Yaklaşım</h3>
                            <p>Her katılımcıya özel bireysel yaklaşım ve danışmanlık hizmeti.</p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Kanıtlanmış Yöntemler</h3>
                            <p>Bilimsel ve kanıtlanmış yöntemlerle kişisel gelişim sürecinizi yönetiyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zenya Manifesto Bölümü -->
    <section class="zenya-manifesto-section">
      <div class="zenya-manifesto-container">
        <div class="section-header" style="text-align:center; margin-bottom: 24px;">
          <h2 style="font-size:2rem; font-weight:800; color:#2b678c; margin-bottom:8px;">Değerli, Yol Arkadaşımız</h2>
          <div class="accent-line" style="width:80px; height:4px; background:linear-gradient(90deg,#c0562f,#e07a5f); border-radius:2px; margin:0 auto;"></div>
        </div>
        <div class="zenya-manifesto-text manifesto-centered">
          <p>Zenya, "doğru" ya da "yanlış" aramaz. Yargılamaz, kıyaslamaz, etiketlemez. Çünkü biz inanıyoruz ki <strong>her ruh, kendi hızında, kendi zamanında açılır.</strong></p>
          <p>Sunduğumuz her eğitim, seans ve içerik, insanın kendine doğru attığı bir adımda <strong>rehber</strong>, <strong>aynalanan bir durak</strong> ve çoğu zaman <strong>bir hatırlatmadır</strong>. Hipnoz, yaşam koçluğu, numeroloji, bilinçaltı dönüşüm yöntemleri... Her biri sadece bir araç. Asıl dönüşüm, sen kendine dürüstçe bakabildiğinde başlar. Biz ise sadece o bakışta sana ışık tutmak için buradayız.</p>
          <p>Zenya Academy, hiçbir yargının olmadığı, her duygunun kabul gördüğü, kimsenin dışarıda bırakılmadığı bir alandır. Ve eğer buradaysan, bu alan artık senin de alanın.</p>
        </div>
        <div class="zenya-manifesto-signature">
          <div class="manifesto-sign">Kalpten bağla,<br><span>Birlikte dönüşmek dileğiyle…</span></div>
          <div class="manifesto-founders">
            <div>
              <strong>Okan Özmen</strong><br>
              <span>Zenya Academy Kurucu Ortağı</span>
            </div>
            <div>
              <strong>Enes Demirci</strong><br>
              <span>Zenya Academy Kurucu Ortağı</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kurucular Bölümü -->
    <section class="founders-section section-padding">
      <div class="container">
        <div class="section-header text-center" style="margin-bottom: 60px;">
          <span class="section-subtitle" style="display: block; font-size: 1.1rem; color: #c0562f; font-weight: 600; margin-bottom: 15px; letter-spacing: 2px; text-transform: uppercase;">Uzman Ekip</span>
          <h2 class="section-title" style="font-size: 2.5rem; color: #1a202c; margin-bottom: 20px; font-weight: 800; line-height: 1.2;">Kurucularımız</h2>
          <p class="section-description" style="font-size: 1.1rem; color: #64748b; max-width: 700px; margin: 0 auto; line-height: 1.7;">Zenya Academy'yi hayata geçiren deneyimli ve uzman kadromuzla tanışın.</p>
        </div>
        <div class="founders-grid">
          <!-- Kurucu 1 -->
          <div class="founder-card" data-founder="okan">
            <img class="founder-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/okanbey.png" alt="Okan Özmen">
            <div class="founder-info">
              <h3>Okan Özmen</h3>
              <p>Kurucu & Hipnoterapist</p>
              <div class="view-more founder-detail-btn">Detaylı Bilgi <i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
          <!-- Kurucu 2 -->
          <div class="founder-card" data-founder="enes">
            <img class="founder-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/ENESBEY.png" alt="Enes Demirci">
            <div class="founder-info">
              <h3>Enes Demirci</h3>
              <p>Kurucu & Yaşam Koçu</p>
              <div class="view-more founder-detail-btn">Detaylı Bilgi <i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
          <!-- Kurucu 3: Nur Erbaş -->
          <div class="founder-card" data-founder="nur">
            <img class="founder-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/nur-erbasi.jpg" alt="Nur Erbaş">
            <div class="founder-info">
              <h3>Nur Erbaş</h3>
              <p>Genel Müdür</p>
              <div class="view-more founder-detail-btn">Detaylı Bilgi <i class="fas fa-arrow-right"></i></div>
            </div>
          </div>
          <!-- Diğer kurucular aynı şekilde eklenebilir -->
        </div>
      </div>
    </section>

<!-- Founder Modal -->
<div id="founderModal" class="founder-modal" style="display:none;">
  <div class="founder-modal-content wide">
    <button class="close-founder-modal" aria-label="Kapat">&times;</button>
    <div id="founderModalInner"></div>
  </div>
</div>

<style>
.founder-modal {
  position: fixed;
  top: 0; left: 0; width: 100vw; height: 100vh;
  background: rgba(43,103,140,0.18);
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.2s;
}
.founder-modal-content.wide {
  background: #fff;
  border-radius: 18px;
  max-width: 800px;
  width: 96vw;
  padding: 40px 36px 36px 36px;
  box-shadow: 0 8px 40px rgba(43,103,140,0.13);
  position: relative;
  text-align: left;
  display: flex;
  gap: 40px;
  align-items: flex-start;
  animation: founderModalIn 0.25s cubic-bezier(.4,1,.7,1);
}
@keyframes founderModalIn {
  from { opacity: 0; transform: translateY(40px) scale(0.98); }
  to { opacity: 1; transform: none; }
}
.close-founder-modal {
  position: absolute;
  top: 18px; right: 24px;
  background: none;
  border: none;
  font-size: 2rem;
  color: #c0562f;
  cursor: pointer;
  z-index: 2;
  transition: color 0.2s;
}
.close-founder-modal:hover { color: #2b678c; }
.founder-modal-img {
  width: 180px;
  min-width: 140px;
  height: 180px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 2px 18px rgba(43,103,140,0.10);
  margin-bottom: 18px;
  display: block;
}
.founder-modal-details {
  flex: 1;
  min-width: 0;
}
.founder-modal-details h2 {
  font-size: 1.7rem;
  color: #1a202c;
  font-weight: 800;
  margin-bottom: 8px;
}
.founder-modal-title {
  color: #c0562f;
  font-weight: 600;
  font-size: 1.08rem;
  margin-bottom: 18px;
}
.founder-modal-bio {
  color: #4a5568;
  font-size: 1.08rem;
  margin-bottom: 18px;
  line-height: 1.7;
}
.founder-modal-social {
  display: flex;
  gap: 18px;
  margin-bottom: 18px;
}
.founder-modal-social a {
  color: #c0562f;
  font-size: 1.5rem;
  transition: color 0.2s;
}
.founder-modal-social a:hover { color: #2b678c; }
.founder-modal-expertise {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 18px;
}
.founder-modal-expertise span {
  background: #f3f4f6;
  color: #4a5568;
  padding: 8px 15px;
  border-radius: 50px;
  font-size: 0.95rem;
  font-weight: 500;
}
@media (max-width: 700px) {
  .founder-modal-content.wide {
    flex-direction: column;
    align-items: center;
    gap: 18px;
    padding: 18px 6px 16px 6px;
    max-width: 98vw;
  }
  .founder-modal-img { width: 120px; height: 120px; }
  .close-founder-modal { top: 8px; right: 10px; font-size: 1.5rem; }
}
</style>

<script>
const founderData = {
  okan: {
    name: 'Okan Özmen',
    title: 'Kurucu & Hipnoterapist',
    bio: '15 yılı aşkın süredir hipnoterapi alanında hizmet veren Okan Özmen, binlerce danışanın hayatında pozitif değişimlere öncülük etmiştir. Uzmanlık alanları arasında bilişsel davranışçı terapi, regresyon terapisi ve bilinçaltı yeniden yapılandırma yer almaktadır. Uluslararası Hipnoz Federasyonu (IHF) onaylı eğitmen olan Özmen, aynı zamanda klinik hipnoz alanında yüksek lisans yapmıştır.',
    img: '<?php echo get_template_directory_uri(); ?>/assets/images/hero/okanbey.png',
    social: {
      twitter: '#',
      instagram: '#'
    },
    expertise: ['Hipnoterapi', 'Bilinçaltı Temizliği', 'Regresyon Terapisi']
  },
  enes: {
    name: 'Enes Demirci',
    title: 'Kurucu & Yaşam Koçu',
    bio: '10 yılı aşkın süredir kişisel gelişim ve koçluk alanında çalışan Enes Demirci, bireylerin potansiyellerini keşfetmelerine ve hedeflerine ulaşmalarına yardımcı olmaktadır. Uzmanlık alanları arasında özgüven geliştirme, kariyer koçluğu ve ilişki danışmanlığı bulunmaktadır. Uluslararası Koçluk Federasyonu (ICF) akrediteli bir koç olan Demirci, aynı zamanda çeşitli şirketlere kurumsal eğitimler vermektedir.',
    img: '<?php echo get_template_directory_uri(); ?>/assets/images/hero/ENESBEY.png',
    social: {
      twitter: '#',
      instagram: '#'
    },
    expertise: ['Yaşam Koçluğu', 'Kariyer Koçluğu', 'Özgüven Geliştirme']
  },
  nur: {
    name: 'Nur Erbaş',
    title: 'Genel Müdür',
    bio: '8 yıldır iletişim ve kişisel gelişim alanında hizmet veren Nur Erbaş, NLP uzmanı ve yaşam koçu olarak çalışmaktadır. Pozitif psikoloji ve nörolojik dil programlama (NLP) konularında uzmanlaşan Erbaş, katılımcıların potansiyellerini ortaya çıkarmalarına yardımcı olmaktadır. Aynı zamanda etkili iletişim ve beden dili konularında eğitimler vermekte ve çeşitli kurumlara danışmanlık hizmeti sunmaktadır.',
    img: '<?php echo get_template_directory_uri(); ?>/assets/images/nur-erbasi.jpg',
    social: {
      twitter: '#',
      instagram: '#'
    },
    expertise: ['NLP Uzmanlığı', 'İletişim Becerileri', 'Pozitif Psikoloji']
  }
};

function openFounderModal(founderKey) {
  const data = founderData[founderKey];
  if (!data) return;
  const modalInner = document.getElementById('founderModalInner');
  modalInner.innerHTML = `
    <img src="${data.img}" alt="${data.name}" class="founder-modal-img">
    <div class="founder-modal-details">
      <h2>${data.name}</h2>
      <div class="founder-modal-title">${data.title}</div>
      <div class="founder-modal-bio">${data.bio}</div>
      <div class="founder-modal-social">
        <a href="${data.social.twitter}" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="${data.social.instagram}" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      </div>
      <div class="founder-modal-expertise">
        ${data.expertise.map(e => `<span>${e}</span>`).join('')}
      </div>
    </div>
  `;
  document.getElementById('founderModal').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}
function closeFounderModal() {
  document.getElementById('founderModal').style.display = 'none';
  document.body.style.overflow = '';
}
setTimeout(() => {
  document.querySelectorAll('.founder-detail-btn').forEach(btn => {
    btn.onclick = function() {
      const card = btn.closest('.founder-card');
      openFounderModal(card.getAttribute('data-founder'));
    };
  });
  document.querySelector('.close-founder-modal').onclick = closeFounderModal;
  document.getElementById('founderModal').onclick = function(e) {
    if (e.target === this) closeFounderModal();
  };
}, 100);
</script>

            <style>
            .founder-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 40px rgba(0,0,0,0.1) !important;
            }
            .founder-card:hover .view-more i {
                transform: translateX(5px);
            }
            .founder-card img {
                transition: transform 0.5s ease;
            }
            .founder-card:hover img {
                transform: scale(1.05);
            }
            .founder-modal::-webkit-scrollbar {
                width: 8px;
            }
            .founder-modal::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 10px;
            }
            .founder-modal::-webkit-scrollbar-thumb {
                background: #c0562f;
                border-radius: 10px;
            }
            .close-modal {
                transition: all 0.3s ease;
            }
            .close-modal:hover {
                transform: rotate(90deg);
                color: #c0562f !important;
            }
            </style>
            </div>
        </div>
    </section>

    <!-- İletişim Bölümü -->
    <section class="contact-section section-padding" style="padding: 100px 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="contact-wrapper" style="background: #fff; border-radius: 15px; box-shadow: 0 15px 50px rgba(0,0,0,0.05); overflow: hidden; display: flex; flex-wrap: wrap;">
                <!-- İletişim Bilgileri -->
                <div class="contact-info" style="flex: 1; min-width: 300px; padding: 60px; background: linear-gradient(135deg, #c0562f 0%, #e07a3f 100%); color: #fff; position: relative; overflow: hidden;">
                    <div style="position: relative; z-index: 2;">
                        <h2 style="font-size: 2.2rem; margin-bottom: 30px; position: relative; padding-bottom: 15px; font-weight: 800;">
                            <span style="position: relative;">Bize Ulaşın</span>
                        </h2>
                        <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 40px; opacity: 0.9;">
                            Size en kısa sürede dönüş yapabilmemiz için iletişim formunu doldurabilir veya aşağıdaki bilgilerden bize ulaşabilirsiniz.
                        </p>
                        
                        <div class="contact-method" style="display: flex; align-items: flex-start; margin-bottom: 25px;">
                            <div style="background: rgba(255,255,255,0.15); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0;">
                                <i class="fas fa-map-marker-alt" style="font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.1rem; margin: 0 0 5px; font-weight: 600;">Adres</h3>
                                <p style="margin: 0; opacity: 0.9; font-size: 0.95rem;">Meşrutiyet Mah. Meşrutiyet Cad. No: 8/1 Şişli/İstanbul</p>
                            </div>
                        </div>
                        
                        <div class="contact-method" style="display: flex; align-items: flex-start; margin-bottom: 25px;">
                            <div style="background: rgba(255,255,255,0.15); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0;">
                                <i class="fas fa-envelope" style="font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.1rem; margin: 0 0 5px; font-weight: 600;">E-posta</h3>
                                <p style="margin: 0; opacity: 0.9; font-size: 0.95rem;">info@zenya.com.tr</p>
                            </div>
                        </div>
                        
                        <div class="contact-method" style="display: flex; align-items: flex-start; margin-bottom: 25px;">
                            <div style="background: rgba(255,255,255,0.15); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0;">
                                <i class="fas fa-phone-alt" style="font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.1rem; margin: 0 0 5px; font-weight: 600;">Telefon</h3>
                                <p style="margin: 0; opacity: 0.9; font-size: 0.95rem;">+90 555 123 45 67</p>
                            </div>
                        </div>
                        
                        <div class="social-links" style="display: flex; gap: 15px; margin-top: 40px;">
                            <a href="#" style="color: #fff; background: rgba(255,255,255,0.15); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" style="color: #fff; background: rgba(255,255,255,0.15); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; border-radius: 50%; background: rgba(255,255,255,0.05);"></div>
                    <div style="position: absolute; bottom: -80px; right: -30px; width: 200px; height: 200px; border-radius: 50%; background: rgba(255,255,255,0.05);"></div>
                </div>
                
                <!-- İletişim Formu -->
                <div class="contact-form" style="flex: 1.5; min-width: 300px; padding: 60px;">
                    <h2 style="font-size: 2.2rem; margin-bottom: 30px; color: #1a202c; font-weight: 800; position: relative; padding-bottom: 15px;">
                        <span style="position: relative;">Bize Yazın</span>
                    </h2>
                    <form id="contactForm" style="margin-top: 30px;">
                        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;">
                            <div style="flex: 1; min-width: 200px;">
                                <label for="name" style="display: block; margin-bottom: 8px; font-weight: 500; color: #4a5568;">Ad Soyad *</label>
                                <input type="text" id="name" name="name" required style="width: 100%; padding: 12px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease;" placeholder="Adınız Soyadınız">
                            </div>
                            <div style="flex: 1; min-width: 200px;">
                                <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500; color: #4a5568;">E-posta Adresi *</label>
                                <input type="email" id="email" name="email" required style="width: 100%; padding: 12px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease;" placeholder="email@example.com">
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 20px;">
                            <label for="subject" style="display: block; margin-bottom: 8px; font-weight: 500; color: #4a5568;">Konu</label>
                            <input type="text" id="subject" name="subject" style="width: 100%; padding: 12px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease;" placeholder="Konu başlığı">
                        </div>
                        
                        <div style="margin-bottom: 25px;">
                            <label for="message" style="display: block; margin-bottom: 8px; font-weight: 500; color: #4a5568;">Mesajınız *</label>
                            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 12px 15px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 1rem; transition: all 0.3s ease; resize: vertical; min-height: 120px;" placeholder="Mesajınızı buraya yazın..."></textarea>
                        </div>
                        
                        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                            <div style="flex: 1; min-width: 200px;">
                                <button type="submit" style="background: #c0562f; color: #fff; border: none; padding: 14px 30px; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; width: 100%;">
                                    <i class="fas fa-paper-plane" style="margin-right: 8px;"></i> Mesajı Gönder
                                </button>
                            </div>
                            <div style="flex: 1; min-width: 200px; text-align: right;">
                                <p style="margin: 0; font-size: 0.85rem; color: #718096;">* İşaretli alanlar zorunludur.</p>
                            </div>
                        </div>
                    </form>
                    
                    <div id="formSuccess" style="display: none; margin-top: 20px; padding: 15px; background: #e6ffed; border-left: 4px solid #52c41a; border-radius: 4px; color: #135200;">
                        <i class="fas fa-check-circle" style="margin-right: 8px;"></i> Mesajınız başarıyla gönderildi. En kısa sürede sizinle iletişime geçeceğiz.
                    </div>
                    
                    <div id="formError" style="display: none; margin-top: 20px; padding: 15px; background: #fff1f0; border-left: 4px solid #ff4d4f; border-radius: 4px; color: #a8071a;">
                        <i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i> Bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <style>
        /* Buton Hover Efektleri */
        .btn-primary {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
        }
        .btn-primary:hover {
            background: #a8431e !important;
            border-color: #a8431e !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(192, 86, 47, 0.4) !important;
        }
        
        .btn-outline {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
        }
        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1) !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.2) !important;
        }
        
        /* Mobil uyumluluk */
        @media (max-width: 768px) {
            .zenya-hero {
                height: 350px !important;
                max-width: 95% !important;
                margin: 20px auto !important;
            }
            .zenya-hero h1 {
                font-size: 1.8rem !important;
                margin-bottom: 0.8rem !important;
            }
            .zenya-hero p {
                font-size: 0.95rem !important;
                margin-bottom: 1.2rem !important;
                max-width: 90% !important;
            }
            .hero-buttons {
                flex-direction: column !important;
                gap: 10px !important;
            }
            .btn-primary, .btn-outline {
                width: 100% !important;
                max-width: 100% !important;
                padding: 10px 15px !important;
                font-size: 0.9rem !important;
            }
        }
    </style>

    <!-- Sayfa yüklendikten sonra çalışacak ek animasyonlar -->
<script>
// Sayfa yüklendikten sonra çalışacak animasyonlar
window.addEventListener('load', function() {
    // Hero bölümüne yükleme animasyonu ekle
    const heroSection = document.querySelector('.zenya-hero');
    if (heroSection) {
        heroSection.style.opacity = '0';
        heroSection.style.transform = 'translateY(20px)';
        heroSection.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        
        setTimeout(() => {
            heroSection.style.opacity = '1';
            heroSection.style.transform = 'translateY(0)';
        }, 300);
    }
    
    // Bölüm başlıklarına animasyon ekle
    const sectionTitles = document.querySelectorAll('.section-title-custom, .section-title');
    sectionTitles.forEach((title, index) => {
        title.style.opacity = '0';
        title.style.transform = 'translateY(20px)';
        title.style.transition = `opacity 0.6s ease ${index * 0.2}s, transform 0.6s ease ${index * 0.2}s`;
        
        setTimeout(() => {
            title.style.opacity = '1';
            title.style.transform = 'translateY(0)';
        }, 500 + (index * 100));
    });
    
    // Kartlara animasyon ekle
    const cards = document.querySelectorAll('.founder-card, .service-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        
        // Görünür alana geldiğinde animasyonu tetikle
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(card);
    });
});
</script>

<?php get_footer(); ?>
