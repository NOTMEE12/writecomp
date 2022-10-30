<?php
    include_once("home.html");
    $normal_text = 'Tu nie ma żadnej wiadomości! napisz swoją, która będzie wyświetlona przez 8 godzin!';
    $your_text = null;


    function update_text() {
        echo "check_update()";
        $your_text = "<script> document.write(your_text) </script>";
        echo "<script> normal_text = ${your_text} </script>";
    }
    while (true) {
        update_text();
    }
?>