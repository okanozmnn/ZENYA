<?php
/**
 * The template for displaying search forms
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php echo esc_html_x('Ara:', 'label', 'zenya'); ?></span>
        <input type="search" class="search-field" 
               placeholder="<?php echo esc_attr_x('Ara &hellip;', 'placeholder', 'zenya'); ?>" 
               value="<?php echo get_search_query(); ?>" name="s" 
               title="<?php echo esc_attr_x('Ara:', 'label', 'zenya'); ?>" />
    </label>
    <button type="submit" class="search-submit">
        <span class="screen-reader-text"><?php echo esc_html_x('Ara', 'submit button', 'zenya'); ?></span>
        <i class="fas fa-search"></i>
    </button>
</form>
