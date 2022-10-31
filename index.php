<?php
include_once("home.html");


$text = $_POST['TEXT'];
$end_time = $_POST['ENDTIME'];
    
if (text != null and $end_time != null) {
    echo "<script> console.log('from php: ${text}; ${end_time}')";
}
?>