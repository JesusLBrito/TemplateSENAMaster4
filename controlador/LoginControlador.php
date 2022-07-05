<?php

class LoginControlador{

	public function IniciarSesion(){

		if(isset($_POST["usuario"])){

			if($_POST["usuario"]!= null && $_POST["password"]!=null){

				$tabla = "usuarios";

				$item = "usuario";
				$valor = $_POST["usuario"];

				$respuesta = ModeloUsuarios::ConsultarUsuario($tabla, $item, $valor);

				if(($respuesta["usuario"] == $_POST["usuario"]) && ($respuesta["password"] == $_POST["password"])){
                   
					$_SESSION["iniciarSesion"] = "ok";
					echo '<script>

						window.location = "../administrador";

					</script>';
					
				}else{

					echo "2";

				}

			}
		}

	}

}
	


