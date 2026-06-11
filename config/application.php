<?php
/**
 * Bedrock application configuration.
 */
use Roots\WPConfig\Config;

$root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . '/web';

Config::define('WP_HOME', env('WP_HOME'));
Config::define('WP_SITEURL', env('WP_SITEURL'));
Config::define('CONTENT_DIR', '/app');
Config::define('WP_CONTENT_DIR', $webroot_dir . Config::get('CONTENT_DIR'));

Config::apply();
