<?php
    //print_r($_POST);//
    if(empty($_POST["oculto"]) || empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["correo"]) || empty($_POST["identificacion"]) || empty($_POST["telefono"]) || empty($_POST["programa"])){

    header('Location: Registro.php?mensaje=falta');
    exit();
    }

    include_once "conexionRegistro/conexion.php";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $identificacion = $_POST["identificacion"];
    $telefono = $_POST["telefono"];
    $programa = $_POST["programa"];

    $sentencia = $bd->prepare("INSERT INTO instructor(nombre,apellido,correo,identificacion,telefono,programa) VALUES ( ?, ?, ?, ?, ?, ?);");
    $resultado = $sentencia->execute([$nombre,$apellido,$correo,$identificacion,$telefono,$programa]);

    if($resultado === TRUE){
        header ('Location: Registro.php?mensaje=registrado');
    } else {
        echo  ('Location: Registro.php?mensaje=error');
        exit();
    }

?>