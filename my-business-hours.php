<?php

/**
 * @package My Business Hours
 * @version 1.0.0
 *
 * Plugin Name: My Business Hours
 */





require_once(plugin_dir_path(__FILE__) . 'pages/settings.php');
require_once(plugin_dir_path(__FILE__) . 'inc/shortcode.php');
require_once(plugin_dir_path(__FILE__) . 'inc/enqueue.php');



function mbh_plugin_url()
{
    return plugin_dir_url(__FILE__);
}