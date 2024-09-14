<?php
require_once '../config/database.php';

class Empleado {
    private $pdo;

    public function __construct() {
        $this->pdo = $GLOBALS['pdo'];
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM empleados");
        return $stmt->fetchAll();
    }

    public function get($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM empleados WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insert($nombre, $puesto, $salario) {
        $stmt = $this->pdo->prepare("INSERT INTO empleados (nombre, puesto, salario) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $puesto, $salario]);
    }

    public function update($id, $nombre, $puesto, $salario) {
        $stmt = $this->pdo->prepare("UPDATE empleados SET nombre = ?, puesto = ?, salario = ? WHERE id = ?");
        return $stmt->execute([$nombre, $puesto, $salario, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM empleados WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
