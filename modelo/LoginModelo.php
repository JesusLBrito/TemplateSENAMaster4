<?php

require_once "conexion.php";

Class ModeloUsuarios{
    static public function ConsultarUsuario($tabla, $item, $valor){
        $x=Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");

        $x->bindParam(":".$item, $valor, PDO::PARAM_STR);

        $x->execute();

        return $x->fetch();

    }
}
?>


