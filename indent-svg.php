<?php
/**
 * Helper script to generate SVG backgrounds for theme
 *
 * @package Falcon633
 */

$hex_color = array(
    'purple' => '#6b1d6e',
    'green'  => '#0eaf87',
    'grey'   => '#eeeeee',
);

$fill = '#FFFFFF'; // default
if (isset( $_GET['bg'] ) && !empty($_GET['bg']) && in_array($_GET['bg'], array_keys($hex_color))) {
    $fill = $hex_color[$_GET['bg']];
}

$path = 'M0 0 L0 100 L1500 0 L3000 100 L3000 0 Z';
if (isset( $_GET['indent'] ) && !empty( $_GET['indent'] )) {
    $path = 'M1500 0 L0 100 L3000 100 Z';
}

$output = '<svg version="1.1" id="layer1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3000 100" preserveAspectRatio="xMidYMid slice"> <path fill="' . $fill . '" d="' . $path . '"></path> </svg>';

if (isset( $_GET['urlenc'] )) {
    header('Content-type: text/plain');
    print urlencode($output);
} else if (isset( $_GET['b64'] )) {
    header('Content-type: text/plain');
    print base64_encode($output);
} else {
    header('Content-type: image/svg+xml');
    print $output;
}
