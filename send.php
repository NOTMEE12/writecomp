<?php
	# GET VALUE
	$file_name = "key.txt";
    $text = $_GET['Text'];
    $end_time = $_GET['Endtime'];

	# RETURN VALUE
    $last = file_get_contents($file_name);
    file_put_contents($file_name, "$text | $end_time");
    $decoded = json_encode($_GET);
?>