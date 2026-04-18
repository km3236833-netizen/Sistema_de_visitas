<?php
include "Crud.php";
$crud = new Crud();
$datos = $crud->mostrar();
//$datos = Guarda todos los registros de la base de datos 
//$d = Representa un solo registro
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">

<div class="container container-custom">

<h2 class="text-center">Registro de visitas</h2>

<a href="create.php" class="btn btn-success mb-3"> Nueva visita</a>

<table class="table table-bordered text-center">
<tr>
<th>ID</th><th>Nombre</th><th>Visitado</th>
<th>Fecha</th><th>Entrada</th><th>Salida</th><th>Estado</th>
<th>Acciones</th>
</tr>

<?php foreach($datos as $d){ ?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['nombre_completo'] ?></td>
<td><?= $d['persona_visitada'] ?></td>
<td><?= $d['fecha'] ?></td>
<td><?= $d['hora_entrada'] ?></td>
<td><?= $d['hora_salida'] ?></td>

<td>
<?php if($d['hora_salida'] == NULL){ ?>
<span class="estado-dentro">Dentro</span>
<?php } else { ?>
<span class="estado-fuera">Fuera</span>
<?php } ?>
</td>

<td>
<a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
<a href="delete.php?id=<?= $d['id'] ?>" class="btn btn-danger btn-sm"
onclick="return confirm('¿Seguro?')">Eliminar</a>
</td>

</tr>
<?php } ?>

</table>
</div>