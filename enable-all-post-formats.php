<?php
/**
 * Plugin Name: Enable All Post Formats
 * Plugin URI: https://github.com/nickbohle/Enable-All-Post-Formats/
 * Description: A simple plugin to enable all post formats in WordPress.
 * Version: 1.0
 * Author: Nick Bohle
 * Author URI: https://nickbohle.de/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: enable-all-post-formats
 */

// Hook into 'after_setup_theme' to add post formats support
add_action('after_setup_theme', 'enable_all_post_formats');

function enable_all_post_formats() {
    // Check if the current theme supports 'post-formats'
    if (current_theme_supports('post-formats')) {
        // Define an array of all available post formats
        $formats = array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'
        );

        // Add support for all post formats
        add_theme_support('post-formats', $formats);
    } else {
        // Add post formats support if the theme does not support it yet
        add_theme_support('post-formats', array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'
        ));
    }
}
