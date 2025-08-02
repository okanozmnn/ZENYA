<?php
/**
 * Template Name: Menu Debug
 */

get_header();
?>

<div class="container" style="margin: 50px auto; max-width: 1200px; padding: 20px; background: #fff; border: 1px solid #ddd;">
    <h1>Menü Yapısı</h1>
    <div style="background: #f8f9fa; padding: 20px; margin: 20px 0; border: 1px solid #eee;">
        <h2>Ana Menü Yapısı:</h2>
        <?php 
        $menu_locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($menu_locations['primary']);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        echo '<pre>';
        print_r($menu_items);
        echo '</pre>';
        ?>
    </div>
    
    <div style="background: #f8f9fa; padding: 20px; margin: 20px 0; border: 1px solid #eee;">
        <h2>CSS Sınıfları:</h2>
        <pre>
            .main-navigation .sub-menu a,
            .main-navigation .dropdown-menu a {
                position: relative !important;
                display: block !important;
                padding: 12px 24px !important;
                margin: 0 !important;
                color: #4a5568 !important;
                text-decoration: none !important;
                transition: all 0.2s ease !important;
                z-index: 1 !important;
            }

            .main-navigation .sub-menu a::before,
            .main-navigation .dropdown-menu a::before {
                content: '' !important;
                position: absolute !important;
                top: 0 !important;
                left: 0 !important;
                right: 0 !important;
                bottom: 0 !important;
                background: transparent !important;
                z-index: -1 !important;
            }

            .main-navigation .sub-menu a:hover,
            .main-navigation .dropdown-menu a:hover {
                color: #2b6cb0 !important;
            }

            .main-navigation .sub-menu a:hover::before,
            .main-navigation .dropdown-menu a:hover::before {
                background-color: #f7fafc !important;
            }
        </pre>
    </div>
</div>

<?php get_footer(); ?>
