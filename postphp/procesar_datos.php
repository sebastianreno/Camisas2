<?php
// =============================
// PROCESAR_DATOS.PHP
// =============================
// Este script recibe los datos del formulario por POST
// y muestra la información enviada al servidor.
// =============================

// Verificamos que la solicitud sea POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitizar datos (buenas prácticas)
    $nombre      = htmlspecialchars($_POST['nombre']);
    $correo      = htmlspecialchars($_POST['correo']);
    $telefono    = htmlspecialchars($_POST['telefono']);
    $direccion   = htmlspecialchars($_POST['direccion']);
    $tipoCamisa  = htmlspecialchars($_POST['tipoCamisa']);
    $talla       = htmlspecialchars($_POST['talla']);
    $color       = htmlspecialchars($_POST['color']);
    $cantidad    = htmlspecialchars($_POST['cantidad']);
    $comentarios = htmlspecialchars($_POST['comentarios']);
    $suscripcion = isset($_POST['suscripcion']) ? "Sí" : "No";

    // Mostramos los datos recibidos (formato tipo comprobante)
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Comprobante de Pedido</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                color: #333;
                max-width: 700px;
                margin: 40px auto;
                padding: 30px;
                border-radius: 10px;
                background: white;
                box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            }
            h2 {
                color: #1abc9c;
                text-align: center;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            td {
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }
            .label {
                font-weight: bold;
                color: #2c3e50;
                width: 40%;
            }
        </style>
    </head>
    <body>
        <h2>Comprobante de Pedido (POST)</h2>
        <table>
            <tr><td class='label'>Nombre:</td><td>$nombre</td></tr>
            <tr><td class='label'>Correo:</td><td>$correo</td></tr>
            <tr><td class='label'>Teléfono:</td><td>$telefono</td></tr>
            <tr><td class='label'>Dirección:</td><td>$direccion</td></tr>
            <tr><td class='label'>Tipo de Camisa:</td><td>$tipoCamisa</td></tr>
            <tr><td class='label'>Talla:</td><td>$talla</td></tr>
            <tr><td class='label'>Color:</td><td>$color</td></tr>
            <tr><td class='label'>Cantidad:</td><td>$cantidad</td></tr>
            <tr><td class='label'>Comentarios:</td><td>$comentarios</td></tr>
            <tr><td class='label'>Suscripción:</td><td>$suscripcion</td></tr>
        </table>
    </body>
    </html>";
} else {
    echo "Método no permitido.";
}
?>
