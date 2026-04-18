<?php
include "Crud.php";

$id = $_POST['id'];

$data = [
    "nombre" => $_POST['nombre'],
    "visitado" => $_POST['visitado'],
    "fecha" => $_POST['fecha'],
    "entrada" => $_POST['entrada'],
    "salida" => $_POST['salida'] ?? NULL
];

$crud = new Crud();

if($crud->actualizar($id, $data)){
    header("Location: index.php");
}else{
    echo "Error";
}
?>