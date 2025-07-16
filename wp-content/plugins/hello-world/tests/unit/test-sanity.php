<?php
class Plugin_Sanity_Test extends WP_UnitTestCase {
    public function test_plugin_loaded() {
        $this->assertTrue( function_exists( 'hello_world_shortcode' ) );
    }
}
