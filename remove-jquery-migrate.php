<?php
/**
 * Plugin Name: Remove jQuery Migrate Safely
 * Plugin URI:  https://wordpress.org/plugins/remove-jquery-migrate-safely/
 * Description: This plugin securely removes the jQuery Migrate script from the front end of your site making your website load faster
 * Version:     1.0.0
 * Author:      Dotlayer Team
 * Author URI:  https://dotlayer.com/
 * Text Domain: remove-jquery-migrate-safely
 * License:     GPLv3
 */

/**
 * Copyright (C) 2018 Dotlayer (https://dotlayer.com/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/**
 * Make sure you can't access the file directly
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Load class file
 */
require_once dirname(__FILE__) . '/remove-jquery-migrate.class.php';

/**
 * Add checks to confirm file exists
 */
if ( ! function_exists( 'dotlayer_remove_jquery_migrate' ) ) {
	
	/**
	 * Callback function fot hook
	 */
	function dotlayer_remove_jquery_migrate( $scripts ) {
		Dotlayer_RemoveJQueryMigrate::init($scripts);
	}
	
	/**
	 * Adding the custom function to the hook
	 */
	add_action( 'wp_default_scripts', 'dotlayer_remove_jquery_migrate' );
}