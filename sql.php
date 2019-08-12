<?php

$mysqli = mysqli_connect("localhost", "dbusertest", "dbpassword", "basetest");
$result = $mysqli->query('SELECT login FROM users WHERE x = 0;');
$row = $result->fetch_all();
var_dump($row);