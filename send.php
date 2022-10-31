<?php
	# GET VALUE
	$file_name = "key.txt";
    $text = json_decode($_POST['Text']);
    $end_time = json_decode($_POST['Endtime']);

	# RETURN VALUE
    $last = file_get_contents($file_name);
    print_r("last word: $last\n");
    file_put_contents($file_name, "$text; $end_time");
    print_r("from PHP: $text; $end_time\n");
    print_r("from PHP Post: $POST");
?>