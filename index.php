<?php
    include_once("home.html");
    $normal_text = 'Tu nie ma żadnej wiadomości! napisz swoją, która będzie wyświetlona przez 8 godzin!';
    $your_text = null;

    
    function update_all_clients($text, $Time) {
        echo "<script> your_text = ${text} </script>";
        echo "<script> time_end = new Date(${Time}) </script>";
    }
?>