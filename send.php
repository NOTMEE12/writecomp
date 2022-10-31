<?php
	ini_set('display_errors', 1);

    $text = $_POST['Text'];
    $end_time = $_POST['Endtime'];

    if ($text == null) {
    	$text = "undefined"
    }
    if ($end_time == null) {
    	$end_time = "undefined"
    }
    print_r("from PHP Post: $_POST")
?>