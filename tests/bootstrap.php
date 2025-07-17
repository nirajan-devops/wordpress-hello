<?php
require_once getenv('WP_TESTS_DIR') . '/includes/functions.php';

function _manually_load_environment() {
    // Load your plugin or theme here if needed
}
tests_add_filter('muplugins_loaded', '_manually_load_environment');

require getenv('WP_TESTS_DIR') . '/includes/bootstrap.php';