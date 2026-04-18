<?php
include "Crud.php";

$id = $_GET['id'];
$crud = new Crud();
$d = $crud->obtener($id);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">

<div class="container container-custom">

<h2>Editar visita</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $d['id'] ?>">

<input type="text" name="nombre" class="form-control mb-2" value="<?= $d['nombre_completo'] ?>" required>

<input type="text" name="visitado" class="form-control mb-2" value="<?= $d['persona_visitada'] ?>" required>

<input type="date" name="fecha" class="form-control mb-2" value="<?= $d['fecha'] ?>" required>

<input type="time" name="entrada" class="form-control mb-2" value="<?= $d['hora_entrada'] ?>" required>


<input type="time" name="salida" class="form-control mb-2" 
value="<?= $d['hora_salida'] ?>">

<button class="btn btn-warning w-100">Actualizar</button>

</form>

</div>