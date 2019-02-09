#!/usr/bin/env python

import sys
import PolyAES

try:
    _, key, plaintext = sys.argv
    crypto = PolyAES.withKey(key)
    ciphertext = crypto.encrypt(plaintext)
    print ciphertext
except Exception as e:
    sys.stderr.write(e.message)
    exit(1)
