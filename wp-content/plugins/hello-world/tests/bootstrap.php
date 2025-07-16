<?php
// Load the plugin.
require dirname( __DIR__ ) . '/hello-world.php';

// Give WP time to load the plugin before the tests run.
tests_add_filter( 'muplugins_loaded', function () {
    // nothing yet
} );

require getenv( 'WP_PHPUNIT__DIR' ) . '/includes/bootstrap.php';
