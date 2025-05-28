<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Cerrar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(208, 250, 255); 
            color: #333;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color:rgba(3, 100, 255, 0.71);
        }

        a {
            color:rgba(3, 100, 255, 0.71);
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Has cerrado sesión correctamente</h2>
        <br/>
        <p><a href="logueo.php">Ir a iniciar sesión /a></p>
    </div>
</body>
</html>