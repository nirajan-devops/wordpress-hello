<?php

$_tests_dir = getenv( 'WP_TESTS_DIR' ) ?: '/tmp/wordpress-tests-lib';
$wp_root_dir = getenv( 'WP_ROOT_DIR' ) ?: '/tmp/wordpress';

// Load WordPress first to define ABSPATH and set up the environment
require_once $wp_root_dir . '/wp-load.php';

// Now load the install functions and testing framework
require_once $_tests_dir . '/includes/functions.php';

function manually_load_plugin() {
    require dirname(__DIR__) . '/wp-content/plugins/hello.php';
}
tests_add_filter( 'muplugins_loaded', 'manually_load_plugin' );

// Finally, boot the test environment
require_once $_tests_dir . '/includes/bootstrap.php';
