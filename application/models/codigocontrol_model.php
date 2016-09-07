<?php  if(! defined('BASEPATH')) exit('No direct script acces allowed');
class CodigoControl_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function informacionUsuario($data, $archivos){
		$this->db->insert('informacion', array('nombre'=>$data['nombre'], 'correo'=>$data['correo'], 'telefono'=>$data['telefono'], 'archivo'=>$data['archivo']));
		echo "Datos Ingresados ";
		switch ($archivos) {
			case 'Enero':
				$file = 'http://localhost/CodeIgniter/files/ENERO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
				break;
			case 'Febrero':
				$file = 'http://localhost/CodeIgniter/files/FEBRERO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
				break;
			case 'Marzo':
				$file = 'http://localhost/CodeIgniter/files/MARZO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Abril':
				$file = 'http://localhost/CodeIgniter/files/ABRIL.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Mayo':
				$file = 'http://localhost/CodeIgniter/files/MAYO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Junio':
				$file = 'http://localhost/CodeIgniter/files/JUNIO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Julio':
				$file ="http://localhost/CodeIgniter/files/JULIO.pdf"; 
				$filename = "JULIO.pdf";
				header("Content-type: application/octet-stream"); 
				header("Content-Type: application/force-download"); 
				header("Content-Disposition: attachment; filename=\"$filename\"\n"); readfile($file);  
			break;
			case 'Agosto':
				$file = 'http://localhost/CodeIgniter/files/AGOSTO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Septiembre':
				$file = 'http://localhost/CodeIgniter/files/SEPTIEMBRE.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Octubre':
				$file = 'http://localhost/CodeIgniter/files/OCTUBRE.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Noviembre':
				$file = 'http://localhost/CodeIgniter/files/OCTUBRE.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			default:
				echo "error al obtener datos";
				break;
		}
	}
	function enviarCorreo($nombre, $correo, $archivos){
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->SMTPDebug  = 2;
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->Username = "edsonguix@gmail.com";
		$mail->Password = "************";
		$mail->IsHTML(true);
		$mail->CharSet = "text/html; charset=UTF-8;"; 	
		$mail->setFrom = $correo;
		$mail->FromName = $nombre;
		$mail->AddAddress('eguix-2010302@kinal.edu.gt');
		$mail->Subject = 'Centro de descargas CFE';
		$mail->AddAttachment("images/download.png");
		$mail->Body = "". $nombre . " ha descargado el calendario tributario de ". $archivos .".";
 		if(!$mail->Send()) {
            $data["message"] = "Error en el envío: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "¡Mensaje enviado correctamente!";
        }
	}
}	
?>