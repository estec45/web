<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Panel de Control</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(208, 250, 255); 
            color: #333;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contenedor central */
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            margin: 20px;
        }

        h2 {
            color:rgba(3, 100, 255, 0.71);
            text-align: center;
        }

        p {
            margin: 10px 0;
            text-align: center;
        }

        a {
            color:rgba(3, 100, 255, 0.71);
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .link-container {
            text-align: center;
            margin-top: 20px;
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
        <h2>La sesión ha sido creada correctamente</h2>
        <p>
        <?php
        if(isset($_POST['nombre'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            echo "¡Bienvenido! Has iniciado sesión como: <b>" . $_POST['nombre'] . "</b>";
        } else {
            if(isset($_SESSION['nombre'])) {
                echo "Has iniciado sesión como: " . $_SESSION['nombre'];
            } else {
                echo "Acceso restringido. No has iniciado sesión.";
            }
        }
        ?>
        </p>
        <br>
        <p class="link-container"><a href="Index1.html">Ir a la página web</a></p>
        <br>
        <p class="link-container"><a href="CerrarSesion.php">Cerrar sesión</a></p>
    </div>
</body>
</html>