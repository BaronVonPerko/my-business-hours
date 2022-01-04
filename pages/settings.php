<?php


// create an admin page under the settings link in wordpress admin
add_action('admin_menu', 'create_admin_page');
function create_admin_page() {
    add_options_page('My Business Hours Settings', 'My Business Hours', 'manage_options', 'settings', 'create_admin_page_content');
}

// register the plugin_option fields
add_action('admin_init', 'register_plugin_settings');
function register_plugin_settings()
{
    register_setting('my_business_hours_options', 'sunday_hours');
    register_setting('my_business_hours_options', 'monday_hours');
    register_setting('my_business_hours_options', 'tuesday_hours');
    register_setting('my_business_hours_options', 'wednesday_hours');
    register_setting('my_business_hours_options', 'thursday_hours');
    register_setting('my_business_hours_options', 'friday_hours');
    register_setting('my_business_hours_options', 'saturday_hours');
}

// create the settings sections
add_action('admin_init', 'create_settings_sections');
function create_settings_sections()
{
    add_settings_section('my_business_hours_section', 'Business Hours', 'my_business_hours_section_callback', 'my_business_hours_section');
}

function my_business_hours_section_callback() {
    echo '<p>Enter your business hours below.</p>';
    echo '<input type="text" placeholder="Sunday" name="sunday_hours" value="' . get_option('sunday_hours') . '" />';
    echo '<input type="text" placeholder="Monday" name="monday_hours" value="' . get_option('monday_hours') . '" />';
    echo '<input type="text" placeholder="Tuesday" name="tuesday_hours" value="' . get_option('tuesday_hours') . '" />';
    echo '<input type="text" placeholder="Wednesday" name="wednesday_hours" value="' . get_option('wednesday_hours') . '" />';
    echo '<input type="text" placeholder="Thursday" name="thursday_hours" value="' . get_option('thursday_hours') . '" />';
    echo '<input type="text" placeholder="Friday" name="friday_hours" value="' . get_option('friday_hours') . '" />';
    echo '<input type="text" placeholder="Saturday" name="saturday_hours" value="' . get_option('saturday_hours') . '" />';
}

function create_admin_page_content() {
    ?>
    <div class="wrap">
        <h2>My Business Hours Settings</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('my_business_hours_options');
            do_settings_sections('my_business_hours_section');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}