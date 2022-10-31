<?php

    $text = $_GET['TEXT'];
    $end_time = $_GET['ENDTIME'];

    if ($text == null) {
    	$text = "undefined"
    }
    if ($end_time == null) {
    	$end_time = "undefined"
    }
    print_r("from PHP Post: $_GET")
?>