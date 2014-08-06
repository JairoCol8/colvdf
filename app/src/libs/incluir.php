<?php
/**
* Encabezado de inclusión, para llenar librerías (intento de tabla de rutas)
*/
class librerias
{
	/*
	Utilizada para averiguar la cantidad de saltos entre carpetas que debe hacerse hasta llegar a donde se encuentren las librerías.
	*/
	var $nivel;
	var $nivel_entrada;
	function __construct($nivel_entrada)
	{
		$this->nivel_entrada = $nivel_entrada;
		for ($i=0; $i < $nivel_entrada; $i++) { 
			$this->nivel .= "../";
		}
	}
	public function incluir($llamada, $extra=null)
	{
		switch ($llamada) {
			case 'jquery':
				$this->imprimir("js", "ext/jquery.min.js");
				break;
			case 'bs':
				$this->imprimir("css", "ext/bootstrap/css/bootstrap.css");
				$this->imprimir("js", "ext/bootstrap/js/bootstrap.js");
				//$this->imprimir("js", "js/framework/bootbox.js");
				//$this->imprimir("css", "js/framework/select2/select2.css");
				//$this->imprimir("js", "js/framework/select2/select2.js");
				break;
			case 'bs-editable':
				$this->imprimir("css", "ext/bs-editable/css/bootstrap-editable.css");
				$this->imprimir("js", "ext/bs-editable/js/bootstrap-editable.min.js");
				//$this->imprimir("css", "js/framework/bootstrap-datepicker/css/datepicker.css");
				//$this->imprimir("js", "js/framework/bootstrap-datepicker/js/bootstrap-datepicker.es.js");
				break;
			case 'jquery-ui':
				$this->imprimir("css", "css/jqueryui/flick/jquery-ui-1.10.3.custom.css");
				$this->imprimir("js", "js/framework/jquery-ui.min.js");
				break;
			case 'seguridad':
				$this->imprimir("php", "includes/auth/login.class.php");
				$vlog = vLog("usuario", "0",$this->nivel."admin.php");
				$this->imprimir("php", "includes/auth/sesion.class.php");
				$sesion = sesion::getInstance($vlog);
				//$sesion->set_instance($vlog);
				if(is_array($extra)){
					if($extra['tipo']=='validar'){
						$sesion->validar_acceso($extra['id_area'], $this->nivel_entrada);
					}
				}
				return $sesion;
				break;
			case 'cabeza':
				$this->imprimir("src", "cabeza.php");
				break;
			case 'mapa':
				$GLOBALS['mapa_str'] = $this->nivel;
				$this->imprimir("src", 'mapa.php');
				break;
			case 'bd':
				$this->imprimir("php", "includes/auth/Db.class.php");
				$this->imprimir("php", "includes/auth/Conf.class.php");
				return Db::getInstance();
				break;
			case 'bs-confirm':
				$this->imprimir("js", "js/framework/bootstrap-confirm.js");
				break;
			case 'calendario':
				$this->imprimir("css", "js/framework/fullcalendar/fullcalendar.css");
				$this->imprimir("js", "js/framework/fullcalendar/fullcalendar.js");
				$this->imprimir("js", "js/framework/fullcalendar/gcal.js");
				break;
			case 'notify':
				$this->imprimir("css", "js/framework/pnotify/jquery.pnotify.default.css");
				$this->imprimir("js", "js/framework/pnotify/jquery.pnotify.js");
				break;
			case 'meta':
				$this->imprimir("meta", 'name="viewport" content="width=device-width"');
				break;
			default:
				# code...
				break;
		}
	}
	public function defecto()
	{
		$this->incluir('cabeza');
		$this->incluir('jquery');
		$this->incluir('bs');
		$this->incluir('meta');
		//$sesion_r = sesion::getInstance();
		//$this->incluir_general($sesion_r->get('id_per'), $this->nivel);
	}
	public function incluir_general($id_per, $rol)
	{
		echo '<script id="js_general" id_per="'.$id_per.'" nivel="'.$this->nivel.'" src="'.$this->nivel.'app/src/libs_js/general.js"></script>
		';
	}
	private function imprimir($tipo, $archivo)
	{
		if ($tipo=='js') {
			echo '<script src="'.$this->nivel.$archivo.'"></script>
			';
		}
		if ($tipo=='css') {
			echo '<link href="'.$this->nivel.$archivo.'" rel="stylesheet"/>
			';
		}
		if ($tipo=='js-libs') {
			echo '<script src="'.$this->nivel.'/app/src/js-libs/'.$archivo.'"></script>
			';
		}
		
		if ($tipo=='php') {
			if(require_once($this->nivel.$archivo)){
				
			}
		}
		if ($tipo=='src') {
			if(require_once($archivo)){
				//echo "incluido ".$archivo;
			}
			else{
				echo $archivo." no pudo cargarse";
			}
		}
		if ($tipo=='libs_tpe') {
			if(require_once("../libs_tpe/".$archivo)){
				//echo "incluido ".$archivo;
			}
			else{
				echo $archivo." no pudo cargarse";
			}
		}
		if ($tipo=='meta') {
			echo '<meta '.$archivo.'>
			';
		}
	}
}
?>