<?php

session_start();

header('Content-type: application/json');

// variable shortcut
$d = $_SESSION['userdata'];

echo '{"login": "' . $d['login'] . '", "pw":"'.$d['pw'].'", "x":"'.$d['x'].'", "y":"'.$d['y'].'"}';