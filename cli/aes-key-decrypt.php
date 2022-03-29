#!/usr/bin/env php
<?php

require_once(__DIR__ . '/../src/PolyAES.php');

use PolyCrypto\PolyAES;

try {
	[, $key, $ciphertext] = $argv;
	$cipher = PolyAES::withKey($key);
	$plaintext = $cipher->decrypt($ciphertext);
	echo $plaintext;
} catch (Exception $e) {
	fwrite(STDERR, $e->getMessage());
	exit(1);
}
