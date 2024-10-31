<?php
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
 * Safely check for the class before proceeding
 */
if ( !class_exists( 'Dotlayer_RemoveJQueryMigrate' ) ) {

    /**
     * Remove JQuery Core Class
     */
    class Dotlayer_RemoveJQueryMigrate
    {
        /**
         * Init function for the class
         */
        public static function init( $scripts ) {
            if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
                $script = $scripts->registered['jquery'];
                
                // Check the script dependencies
                if ( $script->deps ) {
                    $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
                }
            }
        }
    }
}