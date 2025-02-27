<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://kwyjibo.com
 * @since             1.0.0
 * @package           afa-image-manager
 *
 * @wordpress-plugin
 * Plugin Name:       AFA Image Manager
 * Plugin URI:        https://www.airandspaceforces.com/afa-image-manager
 * Description:       Manages images in AFA websites
 * Version:           1.0.0
 * Author:            Michael Wendell
 * Author URI:        http://www.kwyjibo.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       afa-image-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
