<?php
/**
 * Plugin name: IK My Shortcodes
 * Plugin URI: http://wp.medi-com.info/my-shortcodes
 * Description: Displays my shortcodes
 * Version: 1.0.0
 * Author: Ihor Khaletskyi
 * Author URI: http://wp.medi-com.info/
 * Licence: GPL2
 */

define('IK_MY_SHORTCODES_BASE_PATH', plugin_dir_path(__FILE__));
define('IK_MY_SHORTCODES_BASE_URL', plugin_dir_url(__FILE__));

require IK_MY_SHORTCODES_BASE_PATH . 'vendor/autoload.php';

//require_once IK_MY_SHORTCODES_BASE_PATH . 'inc/classes/Shortcodes/ShortcodeHappyDay.php';
//require_once IK_MY_SHORTCODES_BASE_PATH . 'inc/classes/Plugin.php';

use IkMyShortcodes\Plugin;

use IkMyShortcodes\Shortcodes\ShortcodeHappyDay;
use IkMyShortcodes\Shortcodes\ShortcodeSecond;


$shortcodeHappyDay = new ShortcodeHappyDay();
$shortcodeSecond = new ShortcodeSecond();
$plugin = new Plugin();

$plugin->addShortcode($shortcodeHappyDay);
$plugin->addShortcode($shortcodeSecond);

$plugin->init();
