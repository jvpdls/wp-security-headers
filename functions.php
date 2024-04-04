<?php 

// Add the code below to your site's functions.php file
function setSecurityHeaders() {
	header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
	header('X-Frame-Options: SAMEORIGIN');
	header('X-Content-Type-Options:	nosniff');
	header('Content-Security-Policy: upgrade-insecure-requests');
	header('Referrer-Policy: strict-origin-when-cross-origin');
	header('Permissions-Policy: geolocation=(self), camera=(self), microphone=(self), payment=(self)');
}
add_action( 'send_headers', 'setSecurityHeaders' );
