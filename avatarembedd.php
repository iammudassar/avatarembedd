<?php
/**
 * Plugin Name: Instagram Feed Embedder
 * Plugin URI: https://yourwebsite.com/instagram-feed-embedder
 * Description: A WordPress plugin to display Instagram posts with customizable settings and access token management.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: instagram-feed-embedder
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Define plugin constants
define('IFE_VERSION', '1.0.0');
define('IFE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('IFE_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include required files
require_once IFE_PLUGIN_DIR . 'includes/class-instagram-feed-admin.php';
require_once IFE_PLUGIN_DIR . 'includes/class-instagram-feed-public.php';

// Initialize the plugin
function run_instagram_feed_embedder() {
    // Initialize admin class
    if (is_admin()) {
        $plugin_admin = new Instagram_Feed_Admin();
        $plugin_admin->init();
    }

    // Initialize public class
    $plugin_public = new Instagram_Feed_Public();
    $plugin_public->init();
}
run_instagram_feed_embedder();

// Activation Hook
register_activation_hook(__FILE__, 'instagram_feed_embedder_activate');
function instagram_feed_embedder_activate() {
    // Add default options
    add_option('ife_access_token', '');
    add_option('ife_posts_count', 6);
    add_option('ife_display_style', 'grid');
}

// Deactivation Hook
register_deactivation_hook(__FILE__, 'instagram_feed_embedder_deactivate');
function instagram_feed_embedder_deactivate() {
    // Cleanup if necessary
} 