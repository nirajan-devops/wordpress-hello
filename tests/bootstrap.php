<?php
// Verify we can load the test environment
if (!file_exists('/tmp/wordpress-tests-lib/includes/functions.php')) {
    die("Error: WordPress test library not found. Check WP_TESTS_DIR path.");
}

require_once '/tmp/wordpress-tests-lib/includes/functions.php';

function _manually_load_environment() {
    // Load your plugin or theme here if needed
    // require dirname(__DIR__) . '/wp-content/plugins/your-plugin/your-plugin.php';
}
tests_add_filter('muplugins_loaded', '_manually_load_environment');

require '/tmp/wordpress-tests-lib/includes/bootstrap.php';