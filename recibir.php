<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $Genero = $_GET['Genero'];
    $Nombre = $_GET['Nombre'];
    $Apellido = $_GET['Apellido'];
    $Edad = $_GET['Edad'];
    $Direccion = $_GET['Direccion'];
    $Correo = $_GET['Correo'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Genero = $_POST['Genero'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    $Direccion = $_POST['Direccion'];
    $Correo = $_POST['Correo'];
}

echo "Genero: $Genero<br>";
echo "Nombre: $Nombre<br>";
echo "Apellido: $Apellido<br>";
echo "Edad: $Edad<br>";
echo "Direccion: $Direccion<br>";
echo "Correo: $Correo<br>";


    if (isset($_GET["Genero"]) && !empty($_GET["Genero"]) &&
        isset($_GET["Nombre"]) && !empty($_GET["Nombre"]) &&
        isset($_GET["Apellido"]) && !empty($_GET["Apellido"]) &&
        isset($_GET["Edad"]) && !empty($_GET["Edad"]) &&
        isset($_GET["Direccion"]) && !empty($_GET["Direccion"]) &&
        isset($_GET["Correo"]) && !empty($_GET["Correo"])
    ) {
    
        echo "¡Datos por Php!";

    } else {
        
        if (!isset($_GET["Genero"]) || empty($_GET["Genero"])) {
            echo "Error: Hombre o Mujer.<br>";
        }
        if (!isset($_GET["Nombre"]) || empty($_GET["Nombre"])) {
            echo "Error: Nombre completo.<br>";
        }
        if (!isset($_GET["Apellido"]) || empty($_GET["Apellido"])) {
            echo "Error: El apellido es obligatorio.<br>";
        }
        if (!isset($_GET["Edad"] ) || empty($_GET["Edad"])) {
            echo "Error: La Edad es obligatoria.<br>";
        }
        if (!isset($_GET["Direccion"]) || empty($_GET["Direccion"])) {
            echo "Error: Ingrese la direccion.<br>";
        }
        if (!isset($_GET["Correo"]) || empty($_GET["Correo"])) {
            echo "Error: Ingrese el correo.<br>";
        }
    }

?>
