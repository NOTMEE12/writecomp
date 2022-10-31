<?php
    $text = $_POST['Text'];
    $end_time = $_POST['Endtime'];

    if ($text == null) {
    	$text = "undefined";
    }
    if ($end_time == null) {
    	$end_time = "undefined";
    }
    echo("from PHP Post: $text; $end_time");
?>