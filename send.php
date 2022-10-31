<?php 

    $html=file_get_contents("home.html");
    $img_tag= strip_tags($html, '<> </>');
    $svg_tag='<svg>...';
    $html=str_replace($img_tag,$svg_tag,$html);
    file_put_contents($html_file,$html);

?>