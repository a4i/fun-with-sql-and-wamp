<?php

session_start();

if (!isset($_POST) || !isset($_POST["login"]) ||!isset($_POST['pw'])) {

echo '
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        
        <h1>Entrez</h1>
        
        <form action="./login.php" method="POST">
            login: <input type="text" name="login" placeholder="login" >
            <br>
            password: <input type="password" name="pw" placeholder="***">
            <input type="submit" text="text">
        </form>

    </body>
</html>
';
}

$mysqli = mysqli_connect("localhost", "dbusertest", "dbpassword", "basetest");

$result = $mysqli->query("SELECT login FROM users WHERE login='".$_POST['login']."' AND pw = '".$_POST['pw']."';" );

if ($result->num_rows == 1) {
    $_SESSION['logged'] = true;
    $_SESSION['userdata'] = $_POST;
    if (!isset($_SESSION['userdata']['x']) || !isset($_SESSION['userdata']['y'])) {
        $_SESSION['userdata']['x'] = 0;
        $_SESSION['userdata']['y'] = 0;
    }

    header('Location: /inside/');
} else {
    //$sql = "INSERT INTO basetest VALUES ('alexandre', 'alexandre', '', '', '')";
    $sql = 'INSERT INTO users (login, pw) VALUES ("'.$_POST['login'].'", "'.$_POST['pw'].'")';
    if (mysqli_query ($mysqli, $sql)) {
        echo 'created';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    $result = $mysqli->query('SELECT login FROM users;');
    $row = $result->fetch_all();
    var_dump($row);
}
