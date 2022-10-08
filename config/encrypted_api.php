<?php

return [
	// both secrets must be at least 32 bytes in length and must not be equal to each other
	'secret1' => "\x95jzR]\xa9\x0753:\x8f\x06>\xd6p\x010\x95r\xec\xc6\xb1\xe2\xe5\x83U\xe5\x95u\xa0\x8e\xcc\x02",
	'secret2' => "I\xc8c\xb5b\x9e\xdah\xda\x16\x8b-\x93\xe6\x05\xb7\xa8\x0a\x0e\xed\\\xf5\x8exO\xcd]\xca\xde\xe5\xef\xb2",

	// if you want to whitelist only certain IP addresses, provide an array here. Null or empty array turns off whitelisting.
	'ipv4_whitelist' => NULL,
];
