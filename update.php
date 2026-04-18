<?php
include "Crud.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_POST['id'];

//validar salida
// $salida Guarda la hora de salida o null si no existe
$salida = isset($_POST['salida']) && $_POST['salida'] != "" 
          ? $_POST['salida'] 
          : NULL;

$data = [
    "nombre" => $_POST['nombre'],
    "visitado" => $_POST['visitado'],
    "fecha" => $_POST['fecha'],
    "entrada" => $_POST['entrada'],
    "salida" => $salida
];

$crud = new Crud();

if($crud->actualizar($id, $data)){
    header("Location: index.php");
    exit();
} else {
    echo "Error al actualizar";
}
?>