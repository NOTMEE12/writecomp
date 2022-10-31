<?php

    $text = $_POST['TEXT'];
    $end_time = $_POST['ENDTIME'];

    if ($text != null) {
        print_r("from PHP: {$text}; {$end_time}");
    }
?>