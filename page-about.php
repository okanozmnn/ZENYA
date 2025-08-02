<?php
/**
 * Template Name: Hakkımızda
 * Template Post Type: page
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="about-page">
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

        <!-- Hakkımızda İçerik -->
        <section class="about-content-section">
            <div class="container">
                <div class="about-content-wrapper">
                    <div class="about-text">
                        <h2>Zenya Academy'ye Hoş Geldiniz</h2>
                        <p class="lead">Zenya Academy, içsel dönüşümün bilgeliğini taşıyan, yargısız, güvenli ve kapsayıcı bir alandır.</p>
                        
                        <p>Burası; kim olduğunu hatırlamak, geçmişini onurlandırmak, geleceğini bilinçle şekillendirmek isteyen herkes için bir durak değil, bir yolculuktur.</p>
                        
                        <p>Biz, Zenya'da şuna inanıyoruz:<br>
                        <em>"Her insan kendi cevabını kendi içinde taşır."</em><br>
                        Ama bazen o cevaba ulaşmak için bir alan, bir destek, bir yoldaş gerekir. İşte Zenya Academy tam da bu ihtiyaçtan doğdu.</p>
                        
                        <p>Farklı yollardan gelip aynı niyette buluşan iki insanın, Okan Özmen ve Enes Demirci'nin içsel dönüşüm yolculuklarında karşılaştıkları sorular, farkındalıklar ve kalpten gelen çağrılar sayesinde şekillendi bu alan. Kurumsal dünyanın dinamiklerinden geçerken iç seslerini duyan bu iki yol arkadaşı, Zenya'yı yalnızca bir kişisel gelişim platformu değil, ruha dokunan, insanı insanca karşılayan bir bilinç alanı olarak tasarladı.</p>
                        
                        <p><strong>Zenya, "doğru" ya da "yanlış" aramaz.<br>
                        Yargılamaz, kıyaslamaz, etiketlemez.</strong><br>
                        Çünkü biz inanıyoruz ki her ruh, kendi hızında, kendi zamanında açılır.</p>
                        
                        <p>Sunduğumuz her eğitim, seans ve içerik, insanın kendine doğru attığı bir adımda rehber, aynalanan bir durak ve çoğu zaman bir hatırlatmadır:</p>
                        
                        <p class="quote">"Sen, zaten bütünsün. Sadece hatırlıyorsun."</p>
                        
                        <p>Hipnoz, yaşam koçluğu, numeroloji, bilinçaltı dönüşüm yöntemleri… Her biri sadece bir araç. Asıl dönüşüm, sen kendine dürüstçe bakabildiğinde başlar. Biz ise sadece o bakışta sana ışık tutmak için buradayız.</p>
                        
                        <p>Zenya Academy, hiçbir yargının olmadığı, her duygunun kabul gördüğü, kimsenin dışarıda bırakılmadığı bir alandır.</p>
                        
                        <p>Ve eğer buradaysan, bu alan artık senin de alanın.</p>
                        
                        <p class="signature">Kalpten bağla,<br>
                        Birlikte dönüşmek dileğiyle…</p>
                        
                        <div class="founders">
                            <div class="founder">
                                <strong>Okan Özmen</strong><br>
                                Zenya Academy Kurucu Ortağı
                            </div>
                            <div class="founder">
                                <strong>Enes Demirci</strong><br>
                                Zenya Academy Kurucu Ortağı
                            </div>
                        </div>
                    </div>
                    <div class="about-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-image.jpg" alt="Zenya Academy Hakkında">
                    </div>
                </div>
            </div>
        </section>


        <!-- Özellikler -->
        <section class="features-section">
            <div class="container">
                <h2 class="section-title">Neden Biz?</h2>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Uzman Eğitmenler</h3>
                        <p>Alanlarında deneyimli ve uzman eğitmenlerimizle çalışıyoruz.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Güncel İçerikler</h3>
                        <p>Sektördeki gelişmeleri takip eden güncel eğitim içerikleri sunuyoruz.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Topluluk</h3>
                        <p>Geniş bir öğrenci ve profesyonel ağına katılma fırsatı.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ekip Üyeleri -->
        <section class="team-section">
            <div class="container">
                <h2 class="section-title">Kurucularımız</h2>
                <div class="team-grid">
                    <!-- Enes Demirci -->
                    <div class="team-member" onclick="openModal('enes-demirci')">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-1.jpg" alt="Enes Demirci">
                        </div>
                        <h3>ENES DEMİRCİ</h3>
                        <p class="position">KURUCU ORTAK</p>
                        <div class="social-links">
                            <a href="#" onclick="event.stopPropagation();"><i class="fab fa-linkedin"></i></a>
                            <a href="#" onclick="event.stopPropagation();"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    
                    <!-- Okan Özmen -->
                    <div class="team-member" onclick="openModal('okan-ozmen')">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-2.jpg" alt="Okan Özmen">
                        </div>
                        <h3>OKAN ÖZMEN</h3>
                        <p class="position">KURUCU ORTAK</p>
                        <div class="social-links">
                            <a href="#" onclick="event.stopPropagation();"><i class="fab fa-linkedin"></i></a>
                            <a href="#" onclick="event.stopPropagation();"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    
                    <!-- Nur Erbaş -->
                    <div class="team-member" onclick="openModal('nur-erbasi')">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-3.jpg" alt="Nur Erbaş">
                        </div>
                        <h3>NUR ERBAŞ</h3>
                        <p class="position">GENEL MÜDÜR</p>
                        <div class="social-links">
                            <a href="#" onclick="event.stopPropagation();"><i class="fab fa-linkedin"></i></a>
                            <a href="#" onclick="event.stopPropagation();"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Modal HTML -->
                <div id="teamModal" class="team-modal">
                    <div class="modal-content">
                        <span class="close-modal" onclick="closeModal()">&times;</span>
                        <div id="modalContent">
                            <!-- Modal içeriği JavaScript ile doldurulacak -->
                        </div>
                    </div>
                </div>
                
                <!-- Team Member Biyografileri -->
                <div id="biyografiler" style="display: none;">
                    <!-- Enes Demirci Biyografi -->
                    <div id="enes-demirci" class="team-bio">
                        <div class="bio-header">
                            <div class="bio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-1.jpg" alt="Enes Demirci">
                            </div>
                            <div class="bio-info">
                                <h2>ENES DEMİRCİ</h2>
                                <p class="position">KURUCU ORTAK</p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bio-content">
                            <h3>Enes Demirci Kimdir?</h3>
                            <p>Enes Demirci, 28 Kasım 1997 tarihinde Kahramanmaraş'ın Elbistan ilçesinde dünyaya geldi. Çocukluk yıllarından itibaren gözlem yeteneği, derin sezgileri ve insan doğasına olan merakıyla dikkat çekti. Eğitim hayatına akademik disiplini ve sosyal becerileri harmanlayarak devam etti. Gazi Üniversitesi İşletme bölümünden mezun olduktan sonra, Anadolu Üniversitesi'nde Siyaset Bilimi bölümünü tamamlayarak analitik düşünce yapısını daha da güçlendirdi.</p>
                            
                            <h4>Dönüşümün Başlangıcı</h4>
                            <p>Genç yaşta iş hayatına atılan Enes, Türkiye'nin önde gelen giyim markalarında ve alışveriş merkezlerinde yönetici pozisyonlarında görev aldı. Bu süreçte, özellikle insan ilişkilerindeki doğallığı, güçlü iletişim yetenekleri ve liderlik becerileriyle öne çıktı.</p>
                            
                            <p>Kariyer yolculuğu boyunca pek çok başarıya imza atsa da Enes için asıl başarı, kişinin kendini tanıması ve içsel gücünü fark etmesiydi. Bu farkındalıkla birlikte kendi dönüşüm yolculuğuna daha derin bir şekilde adım attı.</p>
                            
                            <p>Bu süreçte yolları Okan Özmen ile kesişti. Onun da benzer bir içsel arayışta olduğunu gören Enes, enerjisi ve vizyonu ile Okan'ı kişisel gelişim ve spiritüel alanlara yönlendirdi. Bu güçlü birliktelik, Zenya Academy'nin temellerini oluşturdu.</p>
                            
                            <h4>Zenya Academy'deki Rolü</h4>
                            <p>Enes Demirci, Zenya Academy'nin kurucu ortaklarından biri olarak, özellikle topluluk yönetimi, bireysel danışmanlık, eğitmen rehberliği ve ilham verici içerik üretimi konularında aktif rol üstlenmektedir. Gerek birebir seanslarında gerekse grup çalışmalarında, bireylerin içsel rehberlikleriyle bağlantıya geçmelerine yardımcı olur.</p>
                            
                            <p>Onun liderliğinde Zenya Academy, sadece bilgi sunan bir platform değil, aynı zamanda insan ruhuna dokunan, güvenli ve kapsayıcı bir dönüşüm alanına dönüşmüştür.</p>
                        </div>
                    </div>
                    
                    <!-- Okan Özmen Biyografi -->
                    <div id="okan-ozmen" class="team-bio">
                        <div class="bio-header">
                            <div class="bio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-2.jpg" alt="Okan Özmen">
                            </div>
                            <div class="bio-info">
                                <h2>OKAN ÖZMEN</h2>
                                <p class="position">KURUCU ORTAK</p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bio-content">
                            <h3>Okan Özmen Kimdir?</h3>
                            <p>Okan Özmen, 7 Aralık 1992 tarihinde Eskişehir'in Tepebaşı ilçesinde dünyaya geldi. Hayatının ilk yıllarını sakin ama gözlemci bir ruh haliyle geçirdi. Eğitim yolculuğu onu önce İzmir'e, Ege Üniversitesi İşletme bölümüne götürdü. Ardından Anadolu Üniversitesi Siyaset Bilimi bölümünü de tamamlayarak, analitik düşünme becerilerini ve geniş perspektifini akademik olarak da pekiştirdi.</p>
                            
                            <h4>Kurumsal Geçmişten İçsel Yolculuğa</h4>
                            <p>Üniversite sonrası iş dünyasına adım atan Okan Özmen, Türkiye'nin önde gelen beyaz eşya ve otomotiv üreticilerinde beyaz yaka olarak profesyonel kariyerine başladı. Kurumsal hayatta edindiği deneyimler, ona sistemli çalışma alışkanlıkları, ekip yönetimi, çözüm odaklı yaklaşım ve organizasyonel düşünme gibi beceriler kazandırdı.</p>
                            
                            <p>Hayatındaki dönüm noktalarından biri, yakın dostu Enes Demirci ile yollarının kişisel gelişim ve spiritüel alanlarda kesişmesi oldu. Enes'in ısrarlı yönlendirmeleri ve teşvikleri sayesinde, Okan özüne yönelme cesareti gösterdi. Bu yöneliş, yalnızca kişisel bir dönüşümle sınırlı kalmadı; aynı zamanda başkalarına da ışık tutabilecek bir yola evrildi.</p>
                            
                            <h4>Zenya Academy'deki Rolü</h4>
                            <p>Okan Özmen, Zenya Academy'de özellikle yapısal zeminlerin kurulması, stratejik planlama, eğitim içeriklerinin sistematiği ve katılımcı deneyimlerinin iyileştirilmesi alanlarında aktif rol almaktadır. Kendi yolculuğundan edindiği içgörüleri, şimdi başkalarının dönüşümüne vesile olacak şekilde paylaşmaktadır.</p>
                            
                            <p>Akademik geçmişi ile spiritüel dünyayı dengeli bir şekilde harmanlayan Okan, zihinsel netliği ve duygusal farkındalığı bir araya getiren yaklaşımlarıyla tanınır. Zenya Academy'de hem eğitmen hem de vizyoner bir lider olarak, bilinçli yaşamı seçen herkesin içsel yolculuğuna eşlik etmektedir.</p>
                        </div>
                    </div>
                    
                    <!-- Nur Erbaş Biyografi -->
                    <div id="nur-erbasi" class="team-bio">
                        <div class="bio-header">
                            <div class="bio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-3.jpg" alt="Nur Erbaş">
                            </div>
                            <div class="bio-info">
                                <h2>NUR ERBAŞ</h2>
                                <p class="position">GENEL MÜDÜR</p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bio-content">
                            <p>Nur Erbaş, Zenya Academy'nin genel müdürü olarak kurumun stratejik yönetiminden sorumludur. İşletme yönetimi alanında uzman olan Erbaş, daha önce çeşitli eğitim kurumlarında yöneticilik yapmıştır.</p>
                            <p>Ekip yönetimi ve kurumsal iletişim konularında deneyimli olan Erbaş, Zenya Academy'nin büyüme stratejisinin belirlenmesinde önemli bir rol oynamaktadır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- İstatistikler -->
        <section class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number" data-count="1000">3750</div>
                        <div class="stat-label">Mutlu Öğrenci</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="50">10</div>
                        <div class="stat-label">Uzman Eğitmen</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="100">  100</div>
                        <div class="stat-label">Tamamlanan Kurs</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="95">95</div>
                        <div class="stat-label">Memnuniyet Oranı</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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

<?php
get_footer();
?>

<script>
// Modal işlevleri
function openModal(memberId) {
    const modal = document.getElementById('teamModal');
    const modalContent = document.getElementById('modalContent');
    const bioContent = document.getElementById(memberId).innerHTML;
    
    modalContent.innerHTML = bioContent;
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
    
    // ESC tuşu ile kapatma
    document.addEventListener('keydown', handleEscape);
    
    // Dışarı tıklayarak kapatma
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
}

function closeModal() {
    const modal = document.getElementById('teamModal');
    modal.classList.remove('show');
    document.body.style.overflow = 'auto';
    document.removeEventListener('keydown', handleEscape);
}

function handleEscape(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
}
</script>
