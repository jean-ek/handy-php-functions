<?php
/**
 * Decrypt Strings
 *
 * @package  handy-php-functions
 * @developer  Maroun Melhem <http://maroun.me>
 * @version 1.0
 *
 * -Args:
 * --$data: String to decrypt
 * --$key: Encryption key (Use generateKey() function to create one)
 */

function decryptStr($data, $key)
{
	// Remove the base64 encoding from our key
	$encryption_key = base64_decode($key);

	// To decrypt, split the encrypted data from our IV - our unique separator used was "::"
	list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);

	return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}