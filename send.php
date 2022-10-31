<?php

    $text = $_POST['TEXT'];
    $end_time = $_POST['ENDTIME'];

    if ($text == null) {
    	$text = "undefined"
    }
    if ($end_time == null) {
    	$end_time = "undefined"
    }
    print_r("from PHP: $text; $end_time")
?>