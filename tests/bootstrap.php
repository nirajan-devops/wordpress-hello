<?php

// Load Composer autoloader
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Define polyfills path (optional, based on your setup)
define('WP_TESTS_PHPUNIT_POLYFILLS_PATH', dirname(__DIR__) . '/vendor/yoast/phpunit-polyfills');

// Load environment variables
$tests_dir = getenv('WP_TESTS_DIR') ?: '/tmp/wordpress-tests-lib';
$wp_root_dir = getenv('WP_ROOT_DIR') ?: '/tmp/wordpress';

// Define ABSPATH if not already defined (required by install.php)
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', $wp_root_dir . '/' );
}

// Verify the test environment exists
if (!file_exists($tests_dir . '/includes/functions.php')) {
    die("Error: WordPress test library not found in $tests_dir. Check WP_TESTS_DIR.");
}

// Load WordPress testing functions
require_once $tests_dir . '/includes/functions.php';

// Manually load plugins or themes here if needed
function _manually_load_environment() {
    // For example:
    // require dirname(__DIR__) . '/wp-content/plugins/your-plugin/your-plugin.php';
}
tests_add_filter('muplugins_loaded', '_manually_load_environment');

// Bootstrap the WordPress testing environment
require $tests_dir . '/includes/bootstrap.php';
