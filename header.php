
<?php
/**
 * Zenya Academy Teması için header dosyası.
 */
require_once get_template_directory() . '/inc/walker-nav-menu-description.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <!-- Font Awesome 5 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-container">
            <div class="header-content">
                <div class="logo-container">
                  <div class="logo-area">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/TEKLOG.png" id="zenya-logo-image" alt="Zenya Academy Logo">';
                    }
                    ?>
                    <a href="/" id="zenya-academy-title">ZENYA ACADEMY</a>
                  </div>
                </div>
                <div class="menu-container">
                  <div class="primary-menu-container">
                    <nav class="main-navigation" aria-label="Ana Menü">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span class="fa fa-bars" style="font-size:18px;"></span>
                            <span class="screen-reader-text"><?php esc_html_e( 'Menü', 'zenya' ); ?></span>
                        </button>
                        <ul id="primary-menu" class="menu main-menu-ul"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-57 active"><a href="http://localhost:10003/">AnaSayfa</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-has-children menu-item-65"><a href="http://localhost:10003/hakkimizda/" aria-haspopup="true" aria-expanded="false">Hakkımızda</a>
<ul class="sub-menu dropdown-menu" style="display: none;">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a href="http://localhost:10003/zenya-academy-hakkinda/">Zenya Academy Hakkında</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="http://localhost:10003/misyonumuz-vizyonumuz/">Misyonumuz &amp; Vizyonumuz</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a href="http://localhost:10003/kimdir/">Kimdir?</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-has-children menu-item-62"><a href="http://localhost:10003/etkinlikler/" aria-haspopup="true" aria-expanded="false">Etkinlikler</a>
<ul class="sub-menu dropdown-menu" style="display: none;">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a href="http://localhost:10003/hipnoz-seansi/">Hipnoz Seansı</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a href="http://localhost:10003/vizyon-panosu-etkinligi/">Vizyon Panosu Etkinliği</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a href="http://localhost:10003/kisisel-gelisim-ve-yasam-becerileri/">Kişisel Gelişim ve Yaşam Becerileri</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a href="http://localhost:10003/nefes-teknikleri/">Nefes Teknikleri</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a href="http://localhost:10003/meditasyon-pratikleri/">Meditasyon Pratikleri</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-has-children menu-item-66"><a href="http://localhost:10003/hizmetlerimiz/" aria-haspopup="true" aria-expanded="false">Hizmetlerimiz</a>
<ul class="sub-menu dropdown-menu" style="display: none;">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a href="http://localhost:10003/yasam-koclugu/">Yaşam Koçluğu</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58"><a href="http://localhost:10003/bilincalti-donusumu/">Bilinçaltı Dönüşümü</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="http://localhost:10003/numeroloji-danismanligi/">Numeroloji Danışmanlığı</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="http://localhost:10003/farkindalik-egitimleri/">Farkındalık Eğitimleri</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href="http://localhost:10003/kisisel-gelisim-atolyeleri/">Kişisel Gelişim Atölyeleri</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60"><a href="http://localhost:10003/blog/">Blog</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-has-children menu-item-61"><a href="http://localhost:10003/destek/" aria-haspopup="true" aria-expanded="false">Destek</a>
<ul class="sub-menu dropdown-menu" style="display: none;">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76"><a href="http://localhost:10003/sikca-sorulan-sorular/">Sıkça Sorulan Sorular</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a href="http://localhost:10003/sorun-bildir/">Sorun Bildir</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="http://localhost:10003/politikalarimiz/">Politikalarımız</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-59"><a href="http://localhost:10003/bize-ulasin/">Bize Ulaşın</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-56 active"><a href="http://localhost:10003/">Giriş</a></li>
</ul>
                    </nav>
                  </div>
                </div>
                <div class="header-actions">
                    <?php 
                    // Arama ikonu
                    echo '<a href="#search-modal" class="search-toggle" aria-label="' . esc_attr__('Arama', 'zenya') . '">';
                    echo '<i class="fas fa-search" style="font-size:16px;"></i>';
                    echo '</a>';
                    // Kullanıcı girişi/üyelik bağlantısı
                    if (is_user_logged_in()) {
                        echo '<a href="' . esc_url(get_edit_profile_url()) . '" class="user-account" aria-label="' . esc_attr__('Hesabım', 'zenya') . '">';
                        echo '<i class="fas fa-user" style="font-size:16px;"></i>';
                        echo '</a>';
                    } else {
                        echo '<a href="' . esc_url(wp_login_url(get_permalink())) . '" class="user-login" aria-label="' . esc_attr__('Giriş Yap', 'zenya') . '">';
                        echo '<i class="fas fa-sign-in-alt" style="font-size:16px;"></i>';
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.main-menu-ul > li > .sub-menu, .primary-menu-container .menu > li > .sub-menu').forEach(function(el) {
    el.style.display = 'none';
  });
  document.querySelectorAll('.main-menu-ul > li, .primary-menu-container .menu > li').forEach(function(li) {
    li.addEventListener('mouseenter', function() {
      var submenu = li.querySelector('.sub-menu');
      if(submenu) submenu.style.display = 'block';
    });
    li.addEventListener('mouseleave', function() {
      var submenu = li.querySelector('.sub-menu');
      if(submenu) submenu.style.display = 'none';
    });
  });
});
</script>
</body>
</html>