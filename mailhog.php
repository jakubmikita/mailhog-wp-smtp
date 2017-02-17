<?php
/*
Plugin Name: Mailhog SMTP
Version: 1.0
License: GPL2
*/

function mailhog_phpmailer_smtp( $phpmailer ) {

	$phpmailer->Host = 'mailhog';
    $phpmailer->Port = 1025;
    $phpmailer->IsSMTP();

}
add_action( 'phpmailer_init', 'mailhog_phpmailer_smtp' );
