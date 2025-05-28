<?php
session_start();
if (isset($_SESSION['nombre'])) {
    echo 'true';
} else {
    echo 'false';
}
?>