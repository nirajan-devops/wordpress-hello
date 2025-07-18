<?php
// Define test library directory
$_tests_dir = getenv('WP_TESTS_DIR') ?: '/tmp/wordpress-tests-lib';

// Manually define ABSPATH before loading WordPress test tools
//define( 'ABSPATH', dirname( __FILE__ ) . '/' );

// Load WordPress test functions
require_once $_tests_dir . '/includes/functions.php';

// Load plugin manually
function manually_load_plugin() {
    require dirname( dirname( __FILE__ ) ) . '/wp-content/plugins/hello.php'; // Update this to match your plugin
}
tests_add_filter( 'muplugins_loaded', 'manually_load_plugin' );

// Start up the WP testing environment
require $_tests_dir . '/includes/bootstrap.php';
