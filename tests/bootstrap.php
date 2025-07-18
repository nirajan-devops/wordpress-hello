<?php

$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
    $_tests_dir = '/tmp/wordpress-tests-lib';
}

// Load WordPress test functions
require_once $_tests_dir . '/includes/functions.php';

// Load your plugin (adjust path based on your plugin)
function manually_load_plugin() {
    require dirname(__DIR__) . '/wp-content/plugins/hello.php';
}
tests_add_filter( 'muplugins_loaded', 'manually_load_plugin' );

// Load the WordPress test environment
require_once $_tests_dir . '/includes/bootstrap.php';
