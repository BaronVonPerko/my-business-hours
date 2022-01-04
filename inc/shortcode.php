<?php

function business_hours_shortcode() {
    $sunday_closed = get_option('mbh_sunday_hours_closed');
    $monday_closed = get_option('mbh_monday_hours_closed');
    $tuesday_closed = get_option('mbh_tuesday_hours_closed');
    $wednesday_closed = get_option('mbh_wednesday_hours_closed');
    $thursday_closed = get_option('mbh_thursday_hours_closed');
    $friday_closed = get_option('mbh_friday_hours_closed');
    $saturday_closed = get_option('mbh_saturday_hours_closed');

    $sunday_hours = $sunday_closed ? "Closed" : get_option('mbh_sunday_hours');
    $monday_hours = $monday_closed ? "Closed" : get_option('mbh_monday_hours');
    $tuesday_hours = $tuesday_closed ? "Closed" : get_option('mbh_tuesday_hours');
    $wednesday_hours = $wednesday_closed ? "Closed" : get_option('mbh_wednesday_hours');
    $thursday_hours = $thursday_closed ? "Closed" : get_option('mbh_thursday_hours');
    $friday_hours = $friday_closed ? "Closed" : get_option('mbh_friday_hours');
    $saturday_hours = $saturday_closed ? "Closed" : get_option('mbh_saturday_hours');

    // table with each day of the week and hours
    $table = '<table class="table table-bordered table-striped">';
    $table .= '<thead>';
    $table .= '<tr>';
    $table .= '<th>' . __('Day', 'business-hours') . '</th>';
    $table .= '<th>' . __('Hours', 'business-hours') . '</th>';
    $table .= '</tr>';
    $table .= '</thead>';
    $table .= '<tbody>';
    $table .= '<tr>';
    $table .= '<td>' . __('Sunday', 'business-hours') . '</td>';
    $table .= '<td>' . $sunday_hours . '</td>';
    $table .= '</tr>';
    $table .= '<tr>';
    $table .= '<td>' . __('Monday', 'business-hours') . '</td>';
    $table .= '<td>' . $monday_hours . '</td>';
    $table .= '</tr>';
    $table .= '<tr>';
    $table .= '<td>' . __('Tuesday', 'business-hours') . '</td>';
    $table .= '<td>' . $tuesday_hours . '</td>';
    $table .= '</tr>';
    $table .= '<tr>';
    $table .= '<td>' . __('Wednesday', 'business-hours') . '</td>';
    $table .= '<td>' . $wednesday_hours . '</td>';
    $table .= '</tr>';
    $table .= '<tr>';
    $table .= '<td>' . __('Thursday', 'business-hours') . '</td>';
    $table .= '<td>' . $thursday_hours . '</td>';
    $table .= '</tr>';
    $table .= '<tr>';
    $table .= '<td>' . __('Friday', 'business-hours') . '</td>';
    $table .= '<td>' . $friday_hours . '</td>';
    $table .= '</tr>';
    $table .= '<tr>';
    $table .= '<td>' . __('Saturday', 'business-hours') . '</td>';
    $table .= '<td>' . $saturday_hours . '</td>';
    $table .= '</tr>';
    $table .= '</tbody>';
    $table .= '</table>';


    return $table;
}
add_shortcode( 'my_business_hours', 'business_hours_shortcode' );