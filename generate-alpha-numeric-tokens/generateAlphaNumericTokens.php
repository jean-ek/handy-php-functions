<?php
/**
 * Generate Alpha Numeric Tokens
 *
 * @package  handy-php-functions
 * @developer  Maroun Melhem <http://maroun.me>
 * @version 1.0
 *
 * -Args:
 * --$length: Token Length
 */

function getToken($length){
	$token = "";
	$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
	$codeAlphabet.= "0123456789";
	$max = strlen($codeAlphabet);
	for ($i=0; $i < $length; $i++) {
		$token .= $codeAlphabet[random_int(0, $max-1)];
	}
	return $token;
}