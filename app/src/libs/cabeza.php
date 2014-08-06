<?php
/**
* Clase de encabezado, imprime diferentes tipos según sean requeridos
*/
class encabezado
{
	var $nombre, $apellido, $id_per, $nivel;
	
	function __construct($id_per, $nivel_entrada)
	{
		$cont = 0;
		if(!empty($app)){
			//para los que están fuera del /app (pe., afe)
			$nivel_entrada = $nivel_entrada - 1;
		}
		for ($i=0; $i < $nivel_entrada; $i++) { 
			$this->nivel .= "../";
			if($cont>=1){
				$otro_nivel .= "../";
			}
			$cont = $cont + 1;
		}
		/*$bd = Db::getInstance();

		$query_persona = "SELECT * FROM gn_persona WHERE id=".$id_per;
		$stmt_persona = $bd->ejecutar($query_persona);
		$persona = $bd->obtener_fila($stmt_persona, 0);

		$query_usr = "SELECT * FROM usr WHERE id_persona=".$id_per;
		$stmt_usr = $bd->ejecutar($query_usr);
		$usr = $bd->obtener_fila($stmt_usr, 0);*/

		$this->id_per = 1;
		$this->nombre = 'Luis Carlos';
		$this->apellido = 'Contreras';
		$this->rol = 1;

		switch ($this->rol) {
			case 1:
				if(include ($otro_nivel.'src/head/default.php')){
					$this->imprimir();
				}
				break;
			default:
				# code...
				break;
		}
	}
	
	public function imprimir()
	{
		imprimir_encabezado($this->nombre, $this->apellido, $this->id_per, $this->nivel);
	}
}

?>