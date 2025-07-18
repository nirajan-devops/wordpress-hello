<?php
// Load Composer autoloader
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Define test lib path (optional if you already defined in phpunit.xml.dist)
if (!defined('WP_TESTS_DIR')) {
    define('WP_TESTS_DIR', '/tmp/wordpress-tests-lib');
}

// Abort if the test lib is missing
if (!file_exists(WP_TESTS_DIR . '/includes/functions.php')) {
    echo "Could not find WordPress tests library in: " . WP_TESTS_DIR . PHP_EOL;
    exit(1);
}

// Load WP testing functions
require_once WP_TESTS_DIR . '/includes/functions.php';

// Manually load your plugin/theme
function _manually_load_plugin() {
    // Adjust this path to point to your plugin file
    require dirname(__DIR__) . '/your-plugin/your-plugin.php';
}
tests_add_filter('muplugins_loaded', '_manually_load_plugin');

// Start up the WP testing environment
require WP_TESTS_DIR . '/includes/bootstrap.php';
