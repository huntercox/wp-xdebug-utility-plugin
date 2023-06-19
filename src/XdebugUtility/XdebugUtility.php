<?php

namespace XdebugUtility;

class XdebugUtility
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueue_script']);
	}

	public function enqueue_script()
	{
		wp_enqueue_script('hsc-xdebug-utility', XDEBUG_UTILITY_PLUGIN_DIR_URL . 'assets/js/xdebug-utility.js', '1.0.0');
	}
}
