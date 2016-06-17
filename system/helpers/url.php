<?php

function base_url($path){  
	$protocol =  isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
	$p = sprintf( "%s://%s%s", $protocol, $_SERVER['SERVER_NAME'],'/'.$path );
	return $p; 
}