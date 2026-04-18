<?php
include "db.php";
// Clase CRUD que hereda la conexión
// $sql = Es la consulta que se manda a MySQL
// $res = Guarda el resultado de la consulta
class Crud extends Conexion {
// inserta dstos
    public function insertar($data){
        //$conexion = Guarda la conexión con la base de datos
        $conexion = parent::conectar();
        $sql = "INSERT INTO visitas (nombre_completo, persona_visitada, fecha, hora_entrada) 
                VALUES ('$data[nombre]', '$data[visitado]', '$data[fecha]', '$data[entrada]')";
        return mysqli_query($conexion, $sql);
    }
//muestra datos
    public function mostrar(){
        $conexion = parent::conectar();
        $sql = "SELECT * FROM visitas";
        $res = mysqli_query($conexion, $sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
//obtener un registro para editar
    public function obtener($id){
        $conexion = parent::conectar();
        $sql = "SELECT * FROM visitas WHERE id='$id'";
        $res = mysqli_query($conexion, $sql);
        return mysqli_fetch_assoc($res);
    }
//actualiza
    public function actualizar($id, $data){
    $conexion = parent::conectar();

    
    $salida = $data['salida'] ? "'".$data['salida']."'" : "NULL";

    $sql = "UPDATE visitas SET 
            nombre_completo='$data[nombre]',
            persona_visitada='$data[visitado]',
            fecha='$data[fecha]',
            hora_entrada='$data[entrada]',
            hora_salida=$salida
            WHERE id='$id'";

    return mysqli_query($conexion, $sql);
}
//eliminar

    public function eliminar($id){
    $conexion = parent::conectar();

    $sql = "DELETE FROM visitas WHERE id='$id'";

    return mysqli_query($conexion, $sql);
}
}
?>