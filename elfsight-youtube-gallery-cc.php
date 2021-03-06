<?php
/*
Plugin Name: HYP Tube
Description: Hypericum integrare YouTube
Plugin URI: https://github.com/hypericumimpex/hyp-tube/
Version: 3.2.0
Author: Romeo C.
Author URI: https://github.com/hypericumimpex/
*/

if (!defined('ABSPATH')) exit;


require_once('core/elfsight-plugin.php');

$elfsight_youtube_gallery_config_path = plugin_dir_path(__FILE__) . 'config.json';
$elfsight_youtube_gallery_config = json_decode(file_get_contents($elfsight_youtube_gallery_config_path), true);

require_once('includes/activation.php');
require_once('includes/api-key.php');

register_activation_hook(__FILE__, 'elfsight_youtube_gallery_activation');


$elfsightYoutubeGallery = new ElfsightYoutubeGalleryPlugin(array(
    'name' => esc_html__('YouTube Gallery'),
    'description' => esc_html__('Increase visitor engagement with stylish YouTube video gallery on your website'),
    'slug' => 'elfsight-youtube-gallery',
    'version' => '3.2.0',
    'text_domain' => 'elfsight-youtube-gallery',
    'editor_settings' => $elfsight_youtube_gallery_config['settings'],
    'editor_preferences' => $elfsight_youtube_gallery_config['preferences'],
    'script_url' => plugins_url('assets/elfsight-youtube-gallery.js', __FILE__),

    'plugin_name' => esc_html__('Elfsight YouTube Gallery'),
    'plugin_file' => __FILE__,
    'plugin_slug' => plugin_basename(__FILE__),

    'vc_icon' => plugins_url('assets/img/vc-icon.png', __FILE__),

    'menu_icon' => plugins_url('assets/img/menu-icon.png', __FILE__),
    'update_url' => esc_url('https://a.elfsight.com/updates/v1/'),

    'preview_url' => plugins_url('preview/index.html', __FILE__),
    'observer_url' => plugins_url('preview/youtube-gallery-observer.js', __FILE__),

    'product_url' => esc_url('https://codecanyon.net/item/youtube-plugin-wordpress-gallery-for-youtube/14115701?ref=Elfsight'),
    'support_url' => esc_url('https://elfsight.ticksy.com/submit/#100003623'),

    'admin_custom_script_url' => plugins_url('assets/elfsight-admin-custom.js', __FILE__),
    'admin_custom_style_url' => plugins_url('assets/elfsight-admin-custom.css', __FILE__),
    'admin_custom_pages' => array(
        array(
            'id' => 'api-key',
            'menu_index' => 1,
            'menu_title' => esc_html__('YouTube API Key'),
            'template' => plugin_dir_path(__FILE__) . 'includes/templates/admin-api-key.php',
            'notification' => esc_html__('YouTube API Key is required')
        )
    )
));

add_shortcode('yottie', array($elfsightYoutubeGallery, 'addShortcode'))

?>