<?php

function mbh_enqueue_admin_scripts()
{
    wp_enqueue_script('mbh_admin', mbh_plugin_url() . 'js/admin.js', [], '1.0.0');
}

add_action('admin_enqueue_scripts', 'mbh_enqueue_admin_scripts');
