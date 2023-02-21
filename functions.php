<?php 

function security_headers() {
	header('X-Frame-Options: SAMEORIGIN');
	header('Referrer-Policy: strict-origin-when-cross-origin');
	header("Permissions-Policy: geolocation=(self), camera=(self), microphone=(self), payment=(self)");
}
add_action( 'send_headers', 'security_headers' );
