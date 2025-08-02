<?php
/**
 * Template Name: Misyon ve Vizyon
 */

get_header(); ?>

<style>
/* Modern Mission & Vision Page Styles */
.mv-hero {
  min-height: 400px;
  background: linear-gradient(135deg, #e6f0f7 0%, #f9e7e1 50%, #fdf6e3 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  padding: 60px 0 40px;
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
  font-size: 3.5rem;
  font-weight: 800;
  background: linear-gradient(135deg, #2b678c 0%, #c0562f 50%, #e07a5f 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 20px;
  letter-spacing: 1px;
  text-align: center;
  line-height: 1.2;
  position: relative;
  z-index: 2;
}

.mv-hero .page-title span {
  color: #c0562f;
  background: linear-gradient(90deg, #c0562f 0%, #e07a5f 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.mv-hero .breadcrumb {
  text-align: center;
  color: #4a5568;
  font-size: 1.1rem;
  font-weight: 500;
  position: relative;
  z-index: 2;
  margin-bottom: 0;
}

.mv-hero .breadcrumb a {
  color: #c0562f;
  text-decoration: none;
  transition: color 0.3s ease;
}

.mv-hero .breadcrumb a:hover {
  color: #2b678c;
}

.mv-section {
  padding: 100px 0;
  position: relative;
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
}

.mv-section.bg-light {
  background: linear-gradient(135deg, #f9fafb 0%, #f3f7fa 100%);
}

.mv-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 1400px;
  margin: 0 auto;
  text-align: center;
  padding: 0 20px;
}

.mv-text {
  padding: 0 20px;
  text-align: center;
  width: 100%;
}

.mv-image {
  display: none;
}

.section-header {
  margin-bottom: 30px;
}

.section-title {
  font-size: 3.2rem;
  font-weight: 800;
  background: linear-gradient(135deg, #c0562f 0%, #e07a5f 50%, #2b678c 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 25px;
  position: relative;
  display: inline-block;
  letter-spacing: 1px;
  text-align: center;
  line-height: 1.2;
}

.section-divider {
  display: none;
}

.mv-description p {
  font-size: 1.25rem;
  color: #4a5568;
  line-height: 1.9;
  margin-bottom: 25px;
  font-weight: 500;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}

.mv-features {
  margin-top: 50px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
  max-width: 1400px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 20px;
}

.mv-feature {
  display: flex;
  align-items: center;
  gap: 18px;
  padding: 20px 25px;
  background: linear-gradient(135deg, #fff 0%, #f8fafc 100%);
  border-radius: 20px;
  border: 3px solid transparent;
  background-clip: padding-box;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  position: relative;
  overflow: hidden;
  min-height: 80px;
  width: 100%;
}

.mv-feature:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 20px 40px rgba(192,86,47,0.2);
  border: 3px solid #c0562f;
  background: linear-gradient(135deg, #fff 0%, #fefefe 100%);
}

.mv-feature::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(192,86,47,0.1), transparent);
  transition: left 0.6s ease;
}

.mv-feature:hover::before {
  left: 100%;
}

.mv-feature i {
  color: #c0562f;
  font-size: 1.4rem;
  width: 45px;
  height: 45px;
  text-align: center;
  background: linear-gradient(135deg, rgba(192,86,47,0.15) 0%, rgba(43,103,140,0.15) 100%);
  padding: 0;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.4s ease;
  flex-shrink: 0;
}

.mv-feature span {
  color: #2b678c;
  font-weight: 700;
  font-size: 1.1rem;
  letter-spacing: 0.3px;
  line-height: 1.3;
  flex: 1;
}

.mv-goals {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  margin-top: 0;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}

.mv-goal {
  text-align: center;
  padding: 35px 20px;
  background: linear-gradient(135deg, #fff 0%, #f8fafc 100%);
  border-radius: 18px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  border: 1px solid rgba(192,86,47,0.1);
  transition: all 0.3s ease;
  min-height: 120px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.mv-goal:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 35px rgba(192,86,47,0.15);
}

.goal-number {
  font-size: 3rem;
  font-weight: 800;
  color: #c0562f;
  margin-bottom: 12px;
  line-height: 1;
}

.goal-text {
  color: #2b678c;
  font-weight: 600;
  font-size: 1.1rem;
}

.goals-section {
  background: linear-gradient(135deg, #f9fafb 0%, #f3f7fa 100%);
}

.goals-section .section-header {
  text-align: center;
  margin-bottom: 80px;
}

.values-section {
  background: linear-gradient(135deg, #f9fafb 0%, #f3f7fa 100%);
}

.values-section .section-header {
  text-align: center;
  margin-bottom: 80px;
}

.values-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  max-width: 1400px;
  margin: 0 auto;
}

.value-card {
  background: #fff;
  border-radius: 18px;
  padding: 40px 25px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  transition: all 0.3s cubic-bezier(.4,1,.7,1);
  position: relative;
  overflow: hidden;
  z-index: 1;
  border: 1px solid #f0f0f0;
  text-align: center;
  min-height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.value-card:before {
  content: '';
  position: absolute;
  top: 0; left: 0; width: 100%; height: 5px;
  background: linear-gradient(90deg, #c0562f, #e07a5f);
  opacity: 0;
  transition: all 0.3s cubic-bezier(.4,1,.7,1);
}

.value-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 15px 40px rgba(0,0,0,0.10);
  border-color: #e07a5f;
}

.value-card:hover:before {
  opacity: 1;
}

.value-icon {
  font-size: 2.5rem;
  color: #c0562f;
  margin-bottom: 20px;
  transition: all 0.3s cubic-bezier(.4,1,.7,1);
}

.value-card:hover .value-icon {
  transform: scale(1.1);
  color: #e07a5f;
}

.mv-feature:hover i {
  transform: scale(1.15) rotate(5deg);
  color: #fff;
  background: linear-gradient(135deg, #c0562f 0%, #e07a5f 100%);
  box-shadow: 0 5px 15px rgba(192,86,47,0.3);
}

.value-card h3 {
  font-size: 1.4rem;
  color: #1a202c;
  margin-bottom: 15px;
  font-weight: 700;
}

.value-card p {
  color: #4a5568;
  line-height: 1.7;
  font-size: 1.05rem;
  font-weight: 500;
}

/* Responsive Design */
@media (max-width: 768px) {
  .mv-hero {
    min-height: 350px;
    padding: 50px 0 30px;
  }
  
  .mv-hero .page-title {
    font-size: 2.5rem;
  }
  
  .mv-hero::after {
    width: 300px;
    height: 300px;
    top: -30%;
    right: -15%;
  }
  
  .mv-content {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .mv-image {
    order: -1;
  }
  
  .mv-image img {
    height: 300px;
  }
  
  .section-title {
    font-size: 2rem;
  }
  
  .mv-goals {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 800px;
  }
  
  .values-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
  }
  
  .value-card {
    padding: 35px 20px;
    min-height: 180px;
  }
  
  .value-icon {
    font-size: 2rem;
    margin-bottom: 15px;
  }
  
  .value-card h3 {
    font-size: 1.2rem;
    margin-bottom: 12px;
  }
  
  .value-card p {
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .mv-hero {
    min-height: 300px;
    padding: 40px 0 20px;
  }
  
  .mv-hero {
    min-height: 300px;
    padding: 40px 0 20px;
  }
  
  .mv-hero .page-title {
    font-size: 2rem;
  }
  
  .mv-hero::after {
    width: 250px;
    height: 250px;
    top: -20%;
    right: -10%;
  }
  
  .mv-section {
    padding: 60px 0;
  }
  
  .mv-content {
    gap: 30px;
  }
  
  .mv-text {
    padding: 0 15px;
  }
  
  .mv-description p {
    font-size: 1rem;
  }
  
  .mv-features {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 800px;
  }
  
  .mv-feature {
    padding: 18px 20px;
    min-height: 70px;
    width: 100%;
  }
  
  .mv-feature i {
    font-size: 1.2rem;
    width: 40px;
    height: 40px;
  }
  
  .mv-feature span {
    font-size: 1rem;
  }
  
  .mv-goals {
    grid-template-columns: 1fr;
    gap: 15px;
    max-width: 400px;
  }
  
  .mv-feature {
    padding: 18px 20px;
    min-height: 70px;
    width: 100%;
  }
  
  .mv-feature i {
    font-size: 1.2rem;
    width: 40px;
    height: 40px;
  }
  
  .mv-feature span {
    font-size: 1rem;
  }
}

/* Animation Classes */
.fade-in-up {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease;
}

.fade-in-up.animate {
  opacity: 1;
  transform: translateY(0);
}

.scale-in {
  opacity: 0;
  transform: scale(0.9);
  transition: all 0.5s ease;
}

.scale-in.animate {
  opacity: 1;
  transform: scale(1);
}

/* Container max-width for better layout */
.container {
  max-width: 1500px;
  margin: 0 auto;
  padding: 0 20px;
}

@media (max-width: 1550px) {
  .container {
    max-width: 98vw;
    padding: 0 15px;
  }
}
</style>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="mv-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="breadcrumb">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Misyon Section -->
    <section class="mv-section mission-section">
        <div class="container">
            <div class="mv-content">
                <div class="mv-text fade-in-up">
                    <div class="section-header">
                        <h2 class="section-title">Misyonumuz</h2>
                        <div class="section-divider"></div>
                    </div>
                    <div class="mv-description">
                        <p>Zenya Academy olarak misyonumuz; bireylerin kendi içsel potansiyellerini keşfetmelerine, geçmişlerini onurlandırarak şimdiki anı yaşamalarına ve geleceklerini bilinçli bir şekilde şekillendirmelerine olanak tanıyan, yargısız, güvenli ve kapsayıcı bir alan sunmaktır.</p>
                        
                        <p>Her bireyin kendi cevabını içinde taşıdığına inanarak, bu yolda onlara rehberlik, destek ve yoldaşlık etmek, ruhsal ve zihinsel dönüşümlerini kolaylaştırmak temel amacımızdır.</p>
                        
                        <div class="mv-features">
                            <div class="mv-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Kişisel gelişim yolculuğunda rehberlik</span>
                            </div>
                            <div class="mv-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Bilinçli farkındalık eğitimleri</span>
                            </div>
                            <div class="mv-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Bireysel koçluk ve danışmanlık</span>
                            </div>
                            <div class="mv-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Bütüncül iyileşme yaklaşımı</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mv-image scale-in">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-image.jpg" alt="Misyonumuz"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Vizyon Section -->
    <section class="mv-section vision-section bg-light">
        <div class="container">
            <div class="mv-content">
                <div class="mv-image scale-in">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision-image.jpg" alt="Vizyonumuz"> -->
                </div>
                <div class="mv-text fade-in-up">
                    <div class="section-header">
                        <h2 class="section-title">Vizyonumuz</h2>
                        <div class="section-divider"></div>
                    </div>
                    <div class="mv-description">
                        <p>Zenya Academy olarak vizyonumuz; bireylerin kendileriyle ve evrenle uyum içinde yaşadığı, farkındalık dolu bir dünya yaratmaktır. İnsanların içsel güçlerini keşfetmelerine ve potansiyellerini tam olarak gerçekleştirmelerine yardımcı olarak, daha bilinçli, sevgi dolu ve anlamlı bir yaşam sürmelerine katkıda bulunmayı hedefliyoruz.</p>
                        
                        <p>Toplumda farkındalığın artmasına, insanların birbirleriyle daha derin bağlar kurmasına ve kolektif bilincin yükselmesine hizmet eden çalışmalar yapıyoruz.</p>
                        
                        <div class="mv-features">
                            <div class="mv-feature">
                                <i class="fas fa-star"></i>
                                <span>Bilinçli toplum hedefi</span>
                            </div>
                            <div class="mv-feature">
                                <i class="fas fa-star"></i>
                                <span>Evrensel değerler</span>
                            </div>
                            <div class="mv-feature">
                                <i class="fas fa-star"></i>
                                <span>Sürdürülebilir değişim</span>
                            </div>
                            <div class="mv-feature">
                                <i class="fas fa-star"></i>
                                <span>Küresel farkındalık</span>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hedeflerimiz Section -->
    <section class="mv-section goals-section">
        <div class="mv-content">
            <div class="section-header">
                <h2 class="section-title">Hedeflerimiz</h2>
            </div>
            <div class="mv-goals">
                <div class="mv-goal">
                    <div class="goal-number">1M+</div>
                    <div class="goal-text">Kişiye Ulaşmak</div>
                </div>
                <div class="mv-goal">
                    <div class="goal-number">50+</div>
                    <div class="goal-text">Uzman Eğitmen</div>
                </div>
                <div class="mv-goal">
                    <div class="goal-number">10+</div>
                    <div class="goal-text">Ülkede Varlık</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Değerlerimiz Section -->
    <section class="mv-section values-section">
        <div class="mv-content">
            <div class="section-header">
                <h2 class="section-title">Değerlerimiz</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="values-grid">
                <div class="value-card fade-in-up">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Yargısız Alan</h3>
                    <p>Her bireyi olduğu gibi kabul ederek ve derin bir anlayışla yaklaşarak güvenli bir öğrenme ortamı sunarız; yargısız bir alan sağlarız.</p>
                </div>
                
                <div class="value-card fade-in-up">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Yenilikçilik</h3>
                    <p>Sürekli gelişen eğitim yöntemleri ve teknolojilerini takip ederek yenilikçi çözümler sunarız.</p>
                </div>
                
                <div class="value-card fade-in-up">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Topluluk</h3>
                    <p>Güçlü bir topluluk bilinciyle, birlikte büyüyen ve birbirini destekleyen bir aile olmayı hedefleriz.</p>
                </div>
                
                <div class="value-card fade-in-up">
                    <div class="value-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Dürüstlük</h3>
                    <p>Şeffaf ve etik değerlere bağlı kalarak, her zaman dürüst ve güvenilir olmayı ilke ediniriz.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Intersection Observer for animations
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.fade-in-up, .scale-in').forEach(el => {
        observer.observe(el);
    });

    // Add staggered animation to value cards
    document.querySelectorAll('.value-card').forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    // Add staggered animation to mv-features
    document.querySelectorAll('.mv-feature').forEach((feature, index) => {
        feature.style.transitionDelay = `${index * 0.05}s`;
    });
});

// Smooth scroll for better UX
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<?php get_footer(); ?>
