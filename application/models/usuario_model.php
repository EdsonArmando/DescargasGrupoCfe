<?php  if(! defined('BASEPATH')) exit('No direct script acces allowed');
class Usuario_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
		require_once('system/libraries/PHPMailer/class.phpmailer.php');
		require_once('system/libraries/PHPMailer/class.smtp.php');
	}
	function informacionUsuario($data, $archivos){
		$this->db->insert('informacion', array('nombre'=>$data['nombre'], 'correo'=>$data['correo'], 'telefono'=>$data['telefono'], 'archivo'=>$data['archivo']));
		echo "Datos Ingresados ";
		switch ($archivos) {
			case 'Enero':
				$file = 'http://localhost/Grupocfe/files/ENERO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
				break;
			case 'Febrero':
				$file = 'http://localhost/Grupocfe/files/FEBRERO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
				break;
			case 'Marzo':
				$file = 'http://localhost/Grupocfe/files/MARZO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Abril':
				$file = 'http://localhost/Grupocfe/files/ABRIL.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Mayo':
				$file = 'http://localhost/Grupocfe/files/MAYO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Junio':
				$file = 'http://localhost/Grupocfe/files/JUNIO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Julio':
				$file ="http://localhost/Grupocfe/files/JULIO.pdf"; 
				$filename = "JULIO.pdf";
				header("Content-type: application/octet-stream"); 
				header("Content-Type: application/force-download"); 
				header("Content-Disposition: attachment; filename=\"$filename\"\n"); readfile($file);  
			break;
			case 'Agosto':
				$file = 'http://localhost/Grupocfe/files/AGOSTO.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Septiembre':
				$file = 'http://localhost/Grupocfe/files/SEPTIEMBRE.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Octubre':
				$file = 'http://localhost/Grupocfe/files/OCTUBRE.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			case 'Noviembre':
				$file = 'http://localhost/Grupocfe/files/OCTUBRE.pdf'; 
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				readfile($file);
			break;
			default:
				echo "error al obtener datos";
				break;
		}
	}
	function enviarCorreo($nombre, $correo, $archivos,$telefono){
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->SMTPDebug  = 2;
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->Username = "edsonguix@gmail.com";
		$mail->Password = "***********";
		$mail->IsHTML(true);
		$mail->CharSet = "text/html; charset=UTF-8;"; 	
		$mail->setFrom = $correo;
		$mail->FromName = $nombre;
		$mail->AddAddress('eguix-2010302@kinal.edu.gt');
		$mail->Subject = 'Centro de descargas CFE';
		$mail->AddAttachment("images/download.png");
		$body = "". $nombre . " ha descargado el calendario tributario de ". $archivos .".";
		$body .= " Para poder contactar al usuario puede hacerlo por numero de telefono: ". $telefono ." O correo: ". $correo .".";
		$mail->Body = $body;
 		if(!$mail->Send()) {
            $data["message"] = "Error en el envío: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "¡Mensaje enviado correctamente!";
        }
	}
}	
?>