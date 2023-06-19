<?php

namespace XdebugUtility;

class XdebugUtility
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_assets']);
	}

	public function enqueue_frontend_assets()
	{
		wp_enqueue_script('hsc-xdebug-utility-js', XDEBUG_UTILITY_PLUGIN_DIR_URL . 'assets/js/xdebug-utility.js', array('jquery'), '1.0.0', false);
		wp_enqueue_style('hsc-xdebug-utility-css', XDEBUG_UTILITY_PLUGIN_DIR_URL . 'assets/css/xdebug-utility.css', '1.0.0');
	}
}
