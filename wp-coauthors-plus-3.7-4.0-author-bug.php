<?php
/**
 * Plugin Name: Co-Authors Plus 3.7-4.0 Author Bug
 * Plugin URI: https://github.com/pronamic/wp-coauthors-plus-3.7-4.0-author-bug
 * Description: Testing and debugging author functionality between Co-Authors Plus 3.7 and 4.0.
 * Version: 1.0.0
 * Author: Pronamic
 * Author URI: https://www.pronamic.eu/
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-coauthors-plus-3-7-4-0-author-bug
 * Domain Path: /languages/
 * Requires at least: 5.0
 * Requires PHP: 7.4
 */

\add_filter(
	'the_content',
	static function ( $content ) {
		$content .= '<pre>' . print_r( get_post_field( 'post_author' ), true ) . '</pre>';

		return $content;
	}
);
