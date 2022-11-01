<?php
	$text = file_get_contents("key.txt");
	$time = explode(" | ", $text)[1];
	$miliseconds = floor(microtime(true) * 1000);
	$time = $time - $miliseconds;
	$time = " | ". $time;
	$text .= $time;
	print_r($text)
?>