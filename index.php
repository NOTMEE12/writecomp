<?php
include_once("home.html");
$array = file_get_contents("key.txt").split(" | ");
$text = $array[0];
$time_end = $array[1];

print_r(`<script> your_text = $text; time_end = $time_end; </script> `);
?>