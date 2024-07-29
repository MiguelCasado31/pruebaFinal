<?php
require_once '../config.php';

class EquipoModel {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function altaEquipo($nombre) {
        $sql = "INSERT INTO equipo (nombre_equipo) VALUES (:nombre)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre]);
    }

    public function limpiarDato($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }
}
?>