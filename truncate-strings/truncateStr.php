<?php
/**
 * Truncate Strings
 *
 * @package  handy-php-functions
 * @developer  Maroun Melhem <http://maroun.me>
 * @version 1.0
 *
 * -Args:
 * --$str: string to be truncated
 * --$length: max length allowed for the string before truncating
 *
 */

function truncate_str( $str, $length ) {
	if ( strlen( $str ) > $length ) {
		return "<span title='$str'>" . substr( $str, 0, $length ) . "...</span>";
	} else {
		return $str;
	}
}