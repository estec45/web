<?php
$con = mysqli_connect('localhost', 'root', '', 'formulario');

if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = mysqli_real_escape_string($con, trim($_POST['nombre']));
    $servicios = mysqli_real_escape_string($con, trim($_POST['servicios']));
    $tipo = mysqli_real_escape_string($con, trim($_POST['tipo']));
    $fecha = mysqli_real_escape_string($con, trim($_POST['fecha']));
    $horario = mysqli_real_escape_string($con, trim($_POST['horario']));
    $telefono = mysqli_real_escape_string($con, trim($_POST['telefono']));

    if (empty($nombre) || empty($servicios) || empty($tipo) || empty($fecha) || empty($horario) || empty($telefono)) {
        echo "<script>alert('❗ Todos los campos son obligatorios.'); location.href='Contacta.html';</script>";
        exit;
    }
    elseif ($fecha < date('Y-m-d')) {
        echo "<script>alert('❗ No puedes seleccionar una fecha pasada.'); location.href='Contacta.html';</script>";
        exit;
    } else {
        $verificar = "SELECT * FROM datos WHERE fecha = '$fecha' AND horario = '$horario'";
        $resultado = mysqli_query($con, $verificar);

        if (mysqli_num_rows($resultado) > 0) {
            echo "<script>alert('⚠️ Ya hay una cita para $fecha a las $horario. Intenta con otro horario.'); location.href='../index.html';</script>";
            exit;
        } else {
            $sql = "INSERT INTO datos (nombre, servicios, tipo, fecha, horario, telefono) 
                    VALUES ('$nombre', '$servicios', '$tipo', '$fecha', '$horario', '$telefono')";

            if (mysqli_query($con, $sql)) {
                echo "<script>alert('✅ Cita agendada con éxito para $fecha a las $horario.'); location.href='Contacta.html';</script>";
                exit;
            } else {
                echo "<script>alert('❌ Error al registrar la cita: " . mysqli_error($con) . "'); location.href='Contacta.html';</script>";
                exit;
            }
        }
    }
}

mysqli_close($con);
?>