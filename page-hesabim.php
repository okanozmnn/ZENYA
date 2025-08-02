<?php
/**
 * Template Name: Hesabım
 * 
 * @package Zenya
 */

// Kullanıcı giriş kontrolü
if (!is_user_logged_in()) {
    wp_redirect(wp_login_url(get_permalink()));
    exit;
}

// Özel body sınıfı ekle
function zenya_account_page_body_class($classes) {
    $classes[] = 'page-template-page-hesabim';
    return $classes;
}
add_filter('body_class', 'zenya_account_page_body_class');

get_header();
?>

<?php
// Kullanıcı bilgilerini al
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$user_firstname = $current_user->first_name ?: $current_user->display_name;
$user_lastname = $current_user->last_name;
$user_email = $current_user->user_email;
$user_role = $current_user->roles[0] ?? 'üye';
$registered_date = date_i18n('d F Y', strtotime($current_user->user_registered));
$avatar_url = get_avatar_url($user_id, array('size' => 200));
$user_phone = get_user_meta($user_id, 'billing_phone', true) ?: 'Belirtilmemiş';
$user_bio = get_user_meta($user_id, 'description', true) ?: 'Henüz bir açıklama eklenmemiş.';

// Kullanıcı istatistikleri (örnek veriler)
$user_stats = array(
    'completed_courses' => 3,
    'active_courses' => 2,
    'certificates' => 2,
    'points' => 1240,
    'progress' => 65,
    'next_session' => 'Yarın 20:00',
    'coach' => 'Ayşe Yılmaz',
    'in_progress_courses' => 2
);

// Son etkinlikler (örnek veriler)
$recent_activity = array(
    array(
        'title' => 'Farkındalık Meditasyonu',
        'date' => '10 Haziran 2025',
        'time' => '20:00',
        'type' => 'online',
        'status' => 'completed',
        'progress' => 100,
        'location' => 'Çevrimiçi',
        'instructor' => 'Ayşe Yılmaz',
        'image' => get_template_directory_uri() . '/assets/images/course-1.jpg'
    ),
    array(
        'title' => 'Nefes Teknikleri',
        'date' => '12 Haziran 2025',
        'time' => '19:30',
        'type' => 'online',
        'status' => 'in_progress',
        'progress' => 65,
        'location' => 'Çevrimiçi',
        'instructor' => 'Mehmet Demir',
        'image' => get_template_directory_uri() . '/assets/images/course-2.jpg'
    )
);
?>

<div class="zenya-account-wrapper">
    <div class="account-container">
        <div class="account-layout">
            <!-- Yan Menü -->
            <aside class="account-sidebar">
                <div class="profile-card">
                    <div class="profile-avatar">
                        <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php echo esc_attr($user_firstname . ' ' . $user_lastname); ?>" class="avatar">
                    </div>
                    <div class="profile-info">
                        <h3 class="profile-name"><?php echo esc_html($user_firstname . ' ' . $user_lastname); ?></h3>
                        <span class="profile-role"><?php echo esc_html(ucfirst($user_role)); ?></span>
                        <div class="profile-meta">
                            <span><i class="fas fa-envelope"></i> <?php echo esc_html($user_email); ?></span>
                            <?php if ($user_phone): ?>
                                <span><i class="fas fa-phone"></i> <?php echo esc_html($user_phone); ?></span>
                            <?php endif; ?>
                            <span><i class="fas fa-calendar-alt"></i> Üyelik: <?php echo esc_html($registered_date); ?></span>
                        </div>
                    </div>
                </div>

                <!-- Navigasyon Menüsü -->
                <nav class="account-navigation">
                    <ul>
                        <li class="active">
                            <a href="#dashboard">
                                <i class="fas fa-home"></i>
                                <span>Gösterge Paneli</span>
                            </a>
                        </li>
                        <li>
                            <a href="#my-courses">
                                <i class="fas fa-book"></i>
                                <span>Kurslarım</span>
                            </a>
                        </li>
                        <li>
                            <a href="#certificates">
                                <i class="fas fa-certificate"></i>
                                <span>Sertifikalarım</span>
                            </a>
                        </li>
                        <li>
                            <a href="#profile">
                                <i class="fas fa-user"></i>
                                <span>Profilim</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <i class="fas fa-cog"></i>
                                <span>Ayarlar</span>
                            </a>
                        </li>
                        <li class="logout">
                            <a href="<?php echo wp_logout_url(home_url()); ?>">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Çıkış Yap</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Ana İçerik -->
            <main class="account-main">
                <!-- Hoş Geldiniz Bölümü -->
                <div class="welcome-banner">
                    <div class="welcome-content">
                        <h1>Hoş Geldiniz, <span class="highlight"><?php echo esc_html($user_firstname); ?>!</span></h1>
                        <p>Kişisel gelişim yolculuğunuzda size destek olmaktan mutluluk duyuyoruz.</p>
                        <div class="next-session">
                            <i class="far fa-calendar-check"></i>
                            <div>
                                <span>Sonraki Seans:</span>
                                <strong><?php echo esc_html($user_stats['next_session']); ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- İstatistik Kartları -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="stat-details">
                            <span class="stat-number"><?php echo esc_html($user_stats['active_courses']); ?></span>
                            <span class="stat-label">Aktif Kurs</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="stat-details">
                            <span class="stat-number"><?php echo esc_html($user_stats['completed_courses']); ?></span>
                            <span class="stat-label">Tamamlanan</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="stat-details">
                            <span class="stat-number"><?php echo esc_html($user_stats['certificates']); ?></span>
                            <span class="stat-label">Sertifika</span>
                        </div>
                    </div>
                </div>

                <!-- Devam Eden Kurslar -->
                <section class="section-card">
                    <div class="section-header">
                        <h2><i class="fas fa-book-open"></i> Devam Eden Kurslarım</h2>
                        <a href="#all-courses" class="view-all">Tümünü Gör <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="courses-grid">
                        <?php foreach ($recent_activity as $activity): ?>
                            <div class="course-card">
                                <div class="course-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $activity['image']); ?>" alt="<?php echo esc_attr($activity['title']); ?>">
                                    <span class="course-category"><?php echo esc_html($activity['type']); ?></span>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: <?php echo esc_attr($activity['progress']); ?>%;"></div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <h3><?php echo esc_html($activity['title']); ?></h3>
                                    <p class="instructor">Eğitmen: <?php echo esc_html($activity['instructor']); ?></p>
                                    <div class="course-meta">
                                        <span><i class="fas fa-calendar-alt"></i> <?php echo esc_html($activity['date']); ?></span>
                                        <span><i class="fas fa-clock"></i> <?php echo esc_html($activity['time']); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- Yaklaşan Etkinlikler -->
                <section class="section-card">
                    <div class="section-header">
                        <h2><i class="far fa-calendar-alt"></i> Yaklaşan Etkinlikler</h2>
                        <a href="#all-events" class="view-all">Tümünü Gör <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="events-grid">
                        <?php foreach ($recent_activity as $event): ?>
                            <div class="event-card">
                                <div class="event-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $event['image']); ?>" alt="<?php echo esc_attr($event['title']); ?>">
                                    <span class="event-type"><?php echo esc_html(ucfirst($event['type'])); ?></span>
                                </div>
                                <div class="event-content">
                                    <h3><?php echo esc_html($event['title']); ?></h3>
                                    <div class="event-meta">
                                        <span><i class="fas fa-calendar-alt"></i> <?php echo esc_html($event['date']); ?></span>
                                        <span><i class="fas fa-clock"></i> <?php echo esc_html($event['time']); ?></span>
                                        <span><i class="fas fa-map-marker-alt"></i> <?php echo esc_html($event['location']); ?></span>
                                    </div>
                                    <div class="event-progress">
                                        <div class="progress-bar">
                                            <div class="progress" style="width: <?php echo esc_attr($event['progress']); ?>%;"></div>
                                        </div>
                                        <span class="progress-text">%<?php echo esc_html($event['progress']); ?> Tamamlandı</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>

<?php
get_footer();
