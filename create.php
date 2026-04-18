<!-- Formulario para registrar -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">

<div class="container container-custom">

<h2>Nueva visita</h2>

<form action="store.php" method="POST">

<input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre completo" required>
<input type="text" name="visitado" class="form-control mb-2" placeholder="Persona visitada" required>
<input type="date" name="fecha" class="form-control mb-2" required>
<input type="time" name="entrada" class="form-control mb-2" required>

<button class="btn btn-primary w-100">Guardar</button>

</form>
</div>