<?php
$_tests_dir = getenv('WP_TESTS_DIR') ?: '/tmp/wordpress-tests-lib';
$_wp_dir    = getenv('WP_ROOT_DIR') ?: '/tmp/wordpress';

// Define ABSPATH BEFORE anything else
if (!defined('ABSPATH')) {
    define('ABSPATH', $_wp_dir . '/');
}

// Load test functions
require_once $_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin/theme being tested.
 */
function _manually_load_environment() {
    // Change this to your plugin or theme file
    // Example for plugin:
    // require dirname( __DIR__ ) . '/wp-content/plugins/my-plugin/my-plugin.php';

    // Example for theme:
    // switch_theme('my-theme');
}
tests_add_filter('muplugins_loaded', '_manually_load_environment');

// Load the WP testing environment
require_once $_tests_dir . '/includes/bootstrap.php';
