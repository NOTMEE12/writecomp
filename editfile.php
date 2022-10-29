<?php
    $data = $_POST["dgitata"];
    $file = fopen("FILENAME.xlsx", "w+");
    fwrite($file, $data);
    fclose($file);
?>