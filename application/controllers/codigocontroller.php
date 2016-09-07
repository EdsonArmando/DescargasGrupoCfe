<?php if(! defined('BASEPATH')) exit('No direct script acces allowed');

class CodigoController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this ->load->helper('form');
		require_once('system/libraries/PHPMailer/class.phpmailer.php');
		require_once('system/libraries/PHPMailer/class.smtp.php');
		$this ->load->model('codigocontrol_model');
	}

	function descargasCfe(){
		$this ->load->view('cfe/header');
		$this ->load->view('cfe/formulario');		
	}	
	function recibirDatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'correo' => $this->input->post('correo'),
			'telefono' => $this->input->post('telefono'),
			'archivo' => $this->input->post('archivo')
		);
		$archivos = $this->input->post('archivo');
		$nombre = $this->input->post('nombre');
		$correo = $this->input->post('correo');
		$this->codigocontrol_model->informacionUsuario($data,$archivos);
		$this->codigocontrol_model->enviarCorreo($nombre,$correo,$archivos);
		$this ->load->view('cfe/header');
	}
}
?>