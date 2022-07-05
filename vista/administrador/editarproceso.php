<?php
  print_r($_POST);

  if(!isset($_POST['codigo'])){
      header('Location: Registro.php?mensaje=error');
    
  }

  include "conexionRegistro/conexion.php";
  $codigo =  $_POST['codigo'];
  $nombre =  $_POST['nombre'];
  $apellido =  $_POST['apellido'];
  $correo =  $_POST['correo'];
  $identificacion =  $_POST['identificacion'];
  $telefono =  $_POST['telefono'];
  $programa =  $_POST['programa'];

  $sentencia = $bd->prepare("UPDATE instructor SET nombre = ?, apellido = ?, correo = ?, identificacion = ?, telefono = ?, programa = ? where codigo = ?; ");
  $resultado = $sentencia->execute([$nombre, $apellido, $correo, $identificacion, $telefono, $programa, $codigo]);

  if ($resultado === TRUE) {
    header('Location: Registro.php?mensaje=editado');
  } else {
    header('Location: Registro.php?mensaje=error');
    exit();

  }
  

?>