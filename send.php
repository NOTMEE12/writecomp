<?php
	$file_name = "key.txt";
    $text = $_POST['Text'];
    $end_time = $_POST['Endtime'];

    if ($text == null) {
    	$text = "undefined";
    }
    if ($end_time == null) {
    	$end_time = "undefined";
    }
    $last = file_get_contents($file_name);
    print_r("last word: $last\n");
    file_put_contents($file_name, "$text; $end_time");
    print_r("from PHP Post: $text; $end_time");
?>