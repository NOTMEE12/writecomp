<?php
    $text = $_GET['Text'];
    $end_time = $_GET['Endtime'];

    if ($text == null) {
    	$text = "undefined"
    }
    if ($end_time == null) {
    	$end_time = "undefined"
    }
    print_r("from PHP Post: $_GET")
?>