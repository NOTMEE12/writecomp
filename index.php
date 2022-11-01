<?php
include_once("home.html");
$text, $time = file_get_contents("key.txt").split(" | ");

print_r(`<script>
your_text = $text
time_end = $time
`);
?>