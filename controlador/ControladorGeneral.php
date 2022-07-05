<?php
	defined('BASEPATH') or exit('No se permite acceso directo');
	/**
	 * clase controlador
	 */
	class Controlador {
		
		public function __construct() {

		}

		/**
		 * iniciamos el modelo
		 */
		public function modelo($modelo) {
			require_once '../app/modelo/' . $modelo . '.php';
			return new $modelo();
		}

	
	}
