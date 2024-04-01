<?php
/**
 * The functions.php file behaves like a WordPress plugin, adding features and functionality to a 
 * WordPress site. You can use it to call WordPress functions and to define your own functions.
 */

 /**
* General Settings
*/
require_once( __DIR__ . '/functions/general/import_general_settings.php');
 
/**
* Enqueue scripts and styles
*/
require_once( __DIR__ . '/functions/enqueue/import_css_js.php');

/**
* Import Admin Settings
*/
require_once( __DIR__ . '/functions/settings/import_settings.php');

/**
* Import Post Type
*/
require_once( __DIR__ . '/functions/post-type/banner.php');