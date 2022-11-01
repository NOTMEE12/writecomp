<?php
	# GET VALUE
	$file_name = "key.txt";
    $text = $_GET['Text'];
    $end_time = $_GET['Endtime'];

	if (empty($_POST)) {
		print_r("POST form is empty !\n");
	}

	# RETURN VALUE
    $last = file_get_contents($file_name);
    print_r("last word: $last\n");
    file_put_contents($file_name, "$text | $end_time");
    print_r("from PHP: $text | $end_time ;\n");
    $decoded = json_encode($_GET);
    print_r("from PHP Post Decoded|normal: $decoded|$_GET;\n");
?>