<?php

/**
 * @package hsc_xdebug_utility
 *
 * @wordpress-plugin
 * Plugin Name: HSC Xdebug Utility
 * Description: WordPress Plugin that consolidates Xdebug errors into a hidden sidebar to prevent breaking the page layout.
 * Version: 1.0.0
 * Author: Hunter Cox
 * Author URI: www.huntercox.dev
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: hsc-xdebug-utility
 */

require_once __DIR__ . '/vendor/autoload.php';

define('XDEBUG_UTILITY_PLUGIN_DIR_URL', plugin_dir_url(__FILE__));
define('XDEBUG_UTILITY_PLUGIN_DIR_PATH', untrailingslashit(plugin_dir_path(__FILE__)));

new XdebugUtility\XdebugUtility();
