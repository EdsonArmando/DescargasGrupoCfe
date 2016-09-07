<?php if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Informacion_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this ->load->helper('form');
		$this ->load->model('usuario_model');
	}

	function descargasCfe(){
		$this ->load->view('cfe/header');
		$this ->load->view('cfe/formulario');		
	}	
	function datosUsuario(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'correo' => $this->input->post('correo'),
			'telefono' => $this->input->post('telefono'),
			'archivo' => $this->input->post('archivo')
		);
		$archivos = $this->input->post('archivo');
		$nombre = $this->input->post('nombre');
		$correo = $this->input->post('correo');
		$telefono = $this->input->post('telefono');
		$this->usuario_model->informacionUsuario($data,$archivos);
		$this->usuario_model->enviarCorreo($nombre,$correo,$archivos,$telefono);
		$this ->load->view('cfe/header');
	}
}
?>