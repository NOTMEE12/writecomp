<?php
$text = $_POST['TEXT'];
$end_time = $_POST['ENDTIME'];
    
if ($text != null) {
    echo "<script> console.log('from php: ". $text .";". $end_time ."')";
}
?>