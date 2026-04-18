<?php

include "Crud.php";
// Recibe datos del formulario
$data = [
    "nombre" => $_POST['nombre'],
    "visitado" => $_POST['visitado'],
    "fecha" => $_POST['fecha'],
    "entrada" => $_POST['entrada']
];

$crud = new Crud();

if($crud->insertar($data)){
    header("Location: index.php");
}else{
    echo "Error";
}
?>