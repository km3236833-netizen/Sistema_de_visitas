<?php
include "Crud.php";

$id = $_GET['id']; // obtiene id

$crud = new Crud();

if($crud->eliminar($id)){
    header("Location: index.php");
    exit();
} else {
    echo "Error al eliminar";
}
?>