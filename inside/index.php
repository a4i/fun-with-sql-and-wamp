<?php
session_start();

if ($_SESSION['logged']) {
    var_dump($_SESSION['user']['login']);
} 

include('index.html');

?>
