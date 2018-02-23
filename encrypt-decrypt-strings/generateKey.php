<?php
/**
 * Generate encryption/decryption Key
 *
 * @package  handy-php-functions
 * @developer  Maroun Melhem <http://maroun.me>
 * @version 1.0
 *
 */
function generateKey($length) {
	return base64_encode( openssl_random_pseudo_bytes( $length ) );
}