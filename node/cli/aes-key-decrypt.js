#!/usr/bin/env node

const { PolyAES } = require('../../index.js');

try {
	const [$0, $1, key, ciphertext] = process.argv;
	const cipher = PolyAES.withKey(key);
	const plaintext = cipher.decrypt(ciphertext);
	process.stdout.write(plaintext);
} catch (e) {
	process.stderr.write(e.message);
	process.exit(1);
}
