<?php
return [
	// Enter your site key here. Don't have a key yet? Get one over at https://www.google.com/recaptcha/
	'siteKey' => getenv('RECAPTCHA_SITEKEY') ?: '6Lc2DgQTAAAAABCLkQ0ebwRhxbKTSuan74dVj0ns',

	// Enter your secret key here. Don't have a key yet? Get one over at https://www.google.com/recaptcha/
	'secretKey' => getenv('RECAPTCHA_SECRETKEY') ?: '6Lc2DgQTAAAAAFPL3TL3m72Mtnzon615G7Vf7Y13',

	// Normally, we use curl to send an api request to Google. If this fails, we can use file_get_contents instead.
	// Set this to false to try with file_get_contents instead of curl.
	'curl' => true
];