<?php

    $text = $_POST['TEXT'];
    $end_time = $_POST['ENDTIME'];

    if ($text != null) {
        echo "from PHP: {$text}; {$end_time}"
    }
?>