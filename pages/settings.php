<?php


// create an admin page under the settings link in wordpress admin
add_action('admin_menu', 'create_admin_page');
function create_admin_page()
{
    add_options_page('My Business Hours Settings', 'My Business Hours', 'manage_options', 'settings', 'create_admin_page_content');
}

// register the plugin_option fields
add_action('admin_init', 'register_plugin_settings');
function register_plugin_settings()
{
    // Open Hours
    register_setting('my_business_hours_options', 'mbh_sunday_hours_open_h');
    register_setting('my_business_hours_options', 'mbh_monday_hours_open_h');
    register_setting('my_business_hours_options', 'mbh_tuesday_hours_open_h');
    register_setting('my_business_hours_options', 'mbh_wednesday_hours_open_h');
    register_setting('my_business_hours_options', 'mbh_thursday_hours_open_h');
    register_setting('my_business_hours_options', 'mbh_friday_hours_open_h');
    register_setting('my_business_hours_options', 'mbh_saturday_hours_open_h');

    // Open Minutes
    register_setting('my_business_hours_options', 'mbh_sunday_hours_open_m');
    register_setting('my_business_hours_options', 'mbh_monday_hours_open_m');
    register_setting('my_business_hours_options', 'mbh_tuesday_hours_open_m');
    register_setting('my_business_hours_options', 'mbh_wednesday_hours_open_m');
    register_setting('my_business_hours_options', 'mbh_thursday_hours_open_m');
    register_setting('my_business_hours_options', 'mbh_friday_hours_open_m');
    register_setting('my_business_hours_options', 'mbh_saturday_hours_open_m');

    // Close Hours
    register_setting('my_business_hours_options', 'mbh_sunday_hours_close_h');
    register_setting('my_business_hours_options', 'mbh_monday_hours_close_h');
    register_setting('my_business_hours_options', 'mbh_tuesday_hours_close_h');
    register_setting('my_business_hours_options', 'mbh_wednesday_hours_close_h');
    register_setting('my_business_hours_options', 'mbh_thursday_hours_close_h');
    register_setting('my_business_hours_options', 'mbh_friday_hours_close_h');
    register_setting('my_business_hours_options', 'mbh_saturday_hours_close_h');

    // Close Minutes
    register_setting('my_business_hours_options', 'mbh_sunday_hours_close_m');
    register_setting('my_business_hours_options', 'mbh_monday_hours_close_m');
    register_setting('my_business_hours_options', 'mbh_tuesday_hours_close_m');
    register_setting('my_business_hours_options', 'mbh_wednesday_hours_close_m');
    register_setting('my_business_hours_options', 'mbh_thursday_hours_close_m');
    register_setting('my_business_hours_options', 'mbh_friday_hours_close_m');
    register_setting('my_business_hours_options', 'mbh_saturday_hours_close_m');

    register_setting('my_business_hours_options', 'mbh_sunday_hours_closed');
    register_setting('my_business_hours_options', 'mbh_monday_hours_closed');
    register_setting('my_business_hours_options', 'mbh_tuesday_hours_closed');
    register_setting('my_business_hours_options', 'mbh_wednesday_hours_closed');
    register_setting('my_business_hours_options', 'mbh_thursday_hours_closed');
    register_setting('my_business_hours_options', 'mbh_friday_hours_closed');
    register_setting('my_business_hours_options', 'mbh_saturday_hours_closed');

}

// create the settings sections
add_action('admin_init', 'create_settings_sections');
function create_settings_sections()
{
    add_settings_section('my_business_hours_section', 'Business Hours', 'my_business_hours_section_callback', 'my_business_hours_section');
}

function my_business_hours_section_callback()
{
    echo '<p>Enter your business hours below.</p>';

    echo '<table class="form-table"><tbody>';

    echo_day_field('mbh_sunday_hours', 'Sunday');
    echo_day_field('mbh_monday_hours', 'Monday');
    echo_day_field('mbh_tuesday_hours', 'Tuesday');
    echo_day_field('mbh_wednesday_hours', 'Wednesday');
    echo_day_field('mbh_thursday_hours', 'Thursday');
    echo_day_field('mbh_friday_hours', 'Friday');
    echo_day_field('mbh_saturday_hours', 'Saturday');

    echo '</tbody></table>';
}

function echo_day_field($name, $day)
{
    $closed_checkbox_id = $name . '_closed';
    echo '<tr><th>' . $day . '</th><td>';
    echo '<input type="number" placeholder="Open HH" id="' . $name . '_open_h" name="' . $name . '_open_h" value="' . get_option($name . "_open_h") . '" min="1" max="12" />';
    echo '<input type="number" placeholder="Open MM" id="' . $name . '_open_m" name="' . $name . '_open_m" value="' . get_option($name . "_open_m") . '" min="0" max="55" step="5" onchange="if(parseInt(this.value,10)<10)this.value=\'0\'+this.value;" />';
    echo '<input type="number" placeholder="Close HH" id="' . $name . '_close_h" name="' . $name . '_close_h" value="' . get_option($name . "_close_h") . '" min="1" max="12" />';
    echo '<input type="number" placeholder="Close MM" id="' . $name . '_close_m" name="' . $name . '_close_m" value="' . get_option($name . "_close_m") . '" min="0" max="55" step="5" onchange="if(parseInt(this.value,10)<10)this.value=\'0\'+this.value;" />';
    echo '<input type="checkbox" id="' . $closed_checkbox_id . '" name="' . $closed_checkbox_id . '" value="1" ' . checked(1, get_option($name . '_closed'), false) . ' /> Closed';
    echo '</td></tr>';
}

function create_admin_page_content()
{
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