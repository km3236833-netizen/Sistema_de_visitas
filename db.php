<?php
class Conexion {
    public function conectar(){
        return mysqli_connect(  "localhost",
                                "lizbeth",
                                "231190031",
                                "visitas");
    }
}
?>