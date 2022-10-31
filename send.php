<?php 
    function send_to_all_clients(text, Time){
        echo "<script> your_text = ${text}";
        echo "<script> time_end = new Date(${Time}) </script>";
    }
    
    function get_combination_and_send() {
        send_to_all_clients(echo "<script> console.log(your_text) </script>", echo "<script> console.log(time_end.getTime()) </script>");
    }
    get_combination_and_send();
?>