<?php

// si on n'est pas loggué on retourne à la racine

// je dois appeler session_start pour initialiser $_SESSION
session_start();

if (!isset($_SESSION['logged'])) {
	header('Location: /');
	// on met fin à la page immédiatement
	die;
}
?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <style>
            #canvas {
                background-color: cadetblue;
            }
        </style>
    </head>
    <body>
        <h1>BONJOUR</h1>
        <pre id="txt"></pre>
        <canvas id="canvas" width=500px height=500px></canvas>
    </body>
    <script>

        
    </script>
    <script src="./js/game.js"></script>
</html>
