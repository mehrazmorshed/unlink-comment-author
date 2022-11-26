<?php

/**
 * Plugin Name:       Unlink Comment Author
 * Plugin URI:        https://wordpress.org/plugins/unlink-comment-author
 * Description:       Unlink the author link from comments.
 * Version:           1.0.0
 * Author:            Mehraz Morshed
 * Author URI:        https://profiles.wordpress.org/mehrazmorshed
 * Tested Up to:      6.1.1
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       unlink-comment-author
 * Domain Path:       /languages
 */

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

// Restrict access the file directly
if ( !function_exists( 'add_action' ) ) {
	echo 'You do not have permission to access this file and / or folder directly.';
	exit;
}

// Version
define( 'UNLINK_COMMENT_AUTHOR_VERSION', '1.0.0' );

// Disable Comment Author Link
if( !function_exists( 'disable_comment_author_links' )){
	function disable_comment_author_links( $author_link ){
		return strip_tags( $author_link );
	}
	add_filter( 'get_comment_author_link', 'disable_comment_author_links' );
}
