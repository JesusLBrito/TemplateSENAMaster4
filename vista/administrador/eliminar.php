<?php
    if(!isset($_GET['codigo'])){
        header('Location: Registro.php?mensaje=error');
        exit();
           
    }

    include 'conexionRegistro/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM instructor where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: Registro.php?mensaje=eliminado');
    } else {
        header('Location: Registro.php?mensaje=error');
    }
    



?>