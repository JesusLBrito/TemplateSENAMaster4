<?php
 include("db.php");
if (isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $provedor = $_POST['provedor'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valorI'];
  
    $query = "INSERT INTO insumos(nombre, provedor, cantidad, valorI) VALUES ('$nombre', '$provedor',  '$cantidad',  '$valor')";
    $respuesta = mysqli_query($com, $query);
    if (!$respuesta){
        die("Query fail");
    }

    $_SESSION['message']="Registro Guardado con exito!";
    $_SESSION['me_color'] = 'success';
    header("location:insumos.php");
}
?>