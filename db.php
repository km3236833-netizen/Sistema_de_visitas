<?php
// Clase para conectarse a la base de datos
class Conexion {
    public function conectar(){
        //Datos de root,password,base de datos y el servidor
        return mysqli_connect(  "localhost",
                                "lizbeth",
                                "231190031",
                                "visitas");
    }
}
?>