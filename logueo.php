<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>INICIA SESION</title>
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
            max-width: 400px;
            width: 100%;
            margin: 20px;
        }

        h2 {
            color:rgba(3, 100, 255, 0.71);
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: rgba(3, 100, 255, 0.71);
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color:rgb(157, 241, 246);
        }

        a {
            color:rgb(133, 255, 255);
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
<?php
if(isset($_SESSION['nombre'])) {
    echo "<div class='container'>";
    echo "<p>Has iniciado sesión como: <strong>" . $_SESSION['nombre'] . "</strong></p>";
    echo "<p><a href='CerrarSesion.php'>Cerrar sesión</a></p>";
    echo "<br><p class='link-container'><a href='PanCtrl.php'>Ir al Panel de Control</a></p>";
    echo "</div>";
} else {
?>
    <div class="container">
        <h2>Creando la sesión</h2>
        <form action="PanCtrl.php" method="POST">
            <p><label for="nombre">Nombres:</label></p>
            <p><input type="text" id="nombre" placeholder="Ingrese su Nombre" name="nombre" required /></p>
            <p><input type="submit" value="Crear Sesión" /></p>
        </form>
    </div>
<?php
}
?>
</body>
</html>