<?php

$system_index = 'system/core.php';

if(is_file($system_index)){
	include_once $system_index;
}else{
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'The system file is not set correctly.';
}