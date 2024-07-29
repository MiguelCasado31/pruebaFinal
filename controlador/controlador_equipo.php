<?php
require_once '../modelo/modelo_equipo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modeloEquipo = new EquipoModel();

    $accion = isset($_POST['accion']) ? $_POST['accion'] : '';

    switch ($accion) {
        case 'alta':
            $nombre = $modeloEquipo->limpiarDato($_POST['nombre_equipo']);
            $modeloEquipo->altaEquipo($nombre);
            header('Location: ../vista/exito.php');
            break;
        case 'eliminar':
            // Implementar la lógica para eliminar equipo
            break;
        case 'actualizar':
            // Implementar la lógica para actualizar equipo
            break;
        case 'listar':
            // Implementar la lógica para listar equipos
            break;
        case 'consultarID':
            // Implementar la lógica para consultar equipo por ID
            break;
    }
}
?>
