<?php
/*
Plugin Name: Hello World Plugin
Description: A simple Hello World plugin.
Version: 1.0
Author: Your Name
*/

function hello_world_shortcode() {
    return "<h2>Hello, World from WordPress Plugin!</h2>";
}
add_shortcode('hello_world', 'hello_world_shortcode');
