<?php
require_once '../models/Empleado.php';

class EmpleadoController {
    private $empleadoModel;

    public function __construct() {
        $this->empleadoModel = new Empleado();
    }

    public function index() {
        $empleados = $this->empleadoModel->getAll();
        include '../views/lista.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $puesto = $_POST['puesto'];
            $salario = $_POST['salario'];
            $this->empleadoModel->insert($nombre, $puesto, $salario);
            header('Location: index.php');
        } else {
            include '../views/formulario.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $puesto = $_POST['puesto'];
            $salario = $_POST['salario'];
            $this->empleadoModel->update($id, $nombre, $puesto, $salario);
            header('Location: index.php');
        } else {
            $empleado = $this->empleadoModel->get($id);
            include '../views/formulario.php';
        }
    }

    public function delete($id) {
        $this->empleadoModel->delete($id);
        header('Location: index.php');
    }
}
?>
