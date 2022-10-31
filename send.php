<?php
	# GET VALUE
	$file_name = "key.txt";
	$JSON = json_decode($_POST['JSON']);
    $text = $JSON['Text'];
    $end_time = $JSON['Endtime'];

	# RETURN VALUE
    $last = file_get_contents($file_name);
    print_r("last word: $last\n");
    file_put_contents($file_name, "$text; $end_time");
    print_r("from PHP: $text; $end_time\n");
    print_r("from PHP Post: $_POST;\n");
?>