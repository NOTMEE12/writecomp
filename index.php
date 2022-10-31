<?php

session_start();

setcookie('session_id', uniqid(rand(), true), time() + 3600*24*14, "/", null, null, true);


include_once("home.html");

?>