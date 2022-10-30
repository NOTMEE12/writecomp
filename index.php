<?php
    include_once("home.html");
    $normal_text = 'Tu nie ma żadnej wiadomości! napisz swoją, która będzie wyświetlona przez 8 godzin!';
    $your_text = null;
    $time_end = 0;
    
    function update_all_clients() {
        echo "<script> your_text = ${your_text} </script>";
        echo "<script> time_end = new Date(${Time}) </script>";
    }
?>