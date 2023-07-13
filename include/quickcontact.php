<?php

require_once('phpmailer/PHPMailerAutoload.php');

$toemails = array();

$toemails[] = array(
				'email' => 'info@adondeviajo.com.ar', // Your Email Address
				'name' => 'Adonde Viajo' // Your Name
			);

// Form Processing Messages
$message_success = 'Hemos <strong>exitosamente</strong> recibido su mensaje y nos pondremos en contacto con usted.';

// Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = ''; // Your reCaptcha Secret

$mail = new PHPMailer();

// If you intend you use SMTP, add your SMTP Code after this Line


if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['quick-contact-form-email'] != '' ) {
	
		$toemails = array();
		
		$destino = $_POST['quick-contact-form-destinatario'];
		$toemails[] = array(
				'email' => $destino, 
				'name' => 'Adonde Viajo' 
			);
		
		$name = $_POST['quick-contact-form-name'];
		$email = $_POST['quick-contact-form-email'];
		$message = $_POST['quick-contact-form-message'];

		$subject = 'Nuevo Mensaje de Adonde Viajo';

		$botcheck = $_POST['quick-contact-form-botcheck'];

		if( $botcheck == '' ) {

			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			$mail->Subject = $subject;

			$name = isset($name) ? "Nombre: $name<br><br>" : '';
			$email = isset($email) ? "Email: $email<br><br>" : '';
			$message = isset($message) ? "Mensaje: $message<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Este mensaje fue enviado desde: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$name $email $message $referrer";

			// Runs only when reCaptcha is present in the Contact Form
			if( isset( $_POST['g-recaptcha-response'] ) ) {
				$recaptcha_response = $_POST['g-recaptcha-response'];
				$response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response );

				$g_response = json_decode( $response );

				if ( $g_response->success !== true ) {
					echo '{ "alert": "error", "message": "Captcha not Validated! Please Try Again." }';
					die;
				}
			}

			// Uncomment the following Lines of Code if you want to Force reCaptcha Validation

			// if( !isset( $_POST['g-recaptcha-response'] ) ) {
			// 	echo '{ "alert": "error", "message": "Captcha not Submitted! Please Try Again." }';
			// 	die;
			// }

			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();

			if( $sendEmail == true ):
				echo '{ "alert": "success", "message": "' . $message_success . '" }';
			else:
				echo '{ "alert": "error", "message": "El email <strong>no ha podido</strong> ser entregado debido a un error. Por favor intente nuevamente dentro de unos momentos.<br /><br /><strong>Motivo:</strong><br />' . $mail->ErrorInfo . '" }';
			endif;
		} else {
			echo '{ "alert": "error", "message": "Bot <strong>Detectado</strong>.! Sali maquina traicionera.!" }';
		}
	} else {
		echo '{ "alert": "error", "message": "Por favor <strong>Complete</strong> todos los campos y trate nuevamente." }';
	}
} else {
	echo '{ "alert": "error", "message": "Un <strong>error inesperado</strong> ha ocurrido. Por favor trate nuevamente dentro de unos momentos." }';
}

?>