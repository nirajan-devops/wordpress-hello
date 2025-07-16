<?php
// Path to WordPress tests
$wp_tests_dir = getenv('WP_TESTS_DIR') ? getenv('WP_TESTS_DIR') : '/tmp/wordpress-tests-lib';

// Load WordPress test environment
require_once $wp_tests_dir . '/includes/functions.php';

// Load WordPress
function _manually_load_plugin() {
    require dirname(dirname(__FILE__)) . '/wp-content/plugins/your-plugin/your-plugin.php';
}
tests_add_filter('muplugins_loaded', '_manually_load_plugin');

require $wp_tests_dir . '/includes/bootstrap.php';