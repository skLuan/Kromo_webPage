<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

// If you intend you use SMTP, uncomment next line
//require 'phpmailer/src/SMTP.php';


// Set the recipient email address here
$recipients = array();

$recipients[] = array(
	'email' => 'kromocons@gmail.com',
	'name' => 'Kromo General',
	'mailColinas' => 'johana.murillo@colinascomfamar.com',
	'nameColinas' => 'Johana murillo',
	'xime' => 'ximena.arnedo@kromo.com.co',
	'xime_name' => 'Ximena',
	'angela' => 'angela.ausecha@kromo.com.co',
	'angela_name' => 'Angela',
	'luz' => 'luz.ceron@kromo.com.co',
	'luz_name' => 'Luz Ceron',
	'karol' => 'karol.ceron@kromo.com.co',
	'karol_name' => 'Karol Ceron',
	'kevin' => 'kevin.buitron@kromo.com.co',
	'kevin_name' => 'Kevin Buitron',
	'laura' => 'Laura.mosquera@kromo.com.co',
	'laura_name' => 'Laura Mosquera',
	'comercial_uno' => 'proyectos5@jminmobiliaria.com.co',
	'comercial_name' => 'Ejecutivo comercial',
	'infoKromo' => 'info@kromo.com.co',
	'infoKromo_name' => 'Info Kromo',
	'asesorKromo1' => 'asesorcomercial1@kromo.com.co',
	'asesorKromo1_name' => 'Asesor Comercial',
	'asesorKromo2' => 'asesorcomercial@kromo.com.co',
	'asesorKromo2_name' => 'Asesor Comercial',
	
		
);
//kromoconstructores@gmail.com

// Set the sender email address here
$sender = array(
	'email' => 'leads@kromo.com.co',
	'name' => 'Kromo ventas'
);


// reCaptcha Secret Key - Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = '6LdXy5keAAAAAF9hG0MmJyuIigNGkVNS-9NfZ7GN';


// PHPMailer Initialization
$mail = new PHPMailer();

// If you intend you use SMTP, add your SMTP Code after this Line


// End of SMTP


// Form Messages
$message = array(
	'success'           => '¡Gracias por tu interés!. El mensaje a sido enviado y en breve estaremos en contacto.',
	'error'             => 'There was an error trying to send your message. Please try again later.',
	'error_bot'         => 'Bot Detected! Message could not be send. Please try again.',
	'error_unexpected'  => 'There was an unexpected error trying to send your message. Please try again later.',
	'recaptcha_invalid' => 'Captcha not Validated! Please Try Again.',
	'recaptcha_error'   => 'Captcha not Submitted! Please Try Again.'
);

// Form Processor
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$prefix    = !empty( $_POST['prefix'] ) ? $_POST['prefix'] : '';
	$submits   = $_POST;
	$botpassed = false;
	
	$message_form                 = !empty( $submits['message'] ) ? $submits['message'] : array();
	$message['success']           = !empty( $message_form['success'] ) ? $message_form['success'] : $message['success'];
	$message['error']             = !empty( $message_form['error'] ) ? $message_form['error'] : $message['error'];
	$message['error_bot']         = !empty( $message_form['error_bot'] ) ? $message_form['error_bot'] : $message['error_bot'];
	$message['error_unexpected']  = !empty( $message_form['error_unexpected'] ) ? $message_form['error_unexpected'] : $message['error_unexpected'];
	$message['recaptcha_invalid'] = !empty( $message_form['recaptcha_invalid'] ) ? $message_form['recaptcha_invalid'] : $message['recaptcha_invalid'];
	$message['recaptcha_error']   = !empty( $message_form['recaptcha_error'] ) ? $message_form['recaptcha_error'] : $message['recaptcha_error'];


	// Bot Protection
	if( isset( $submits[ $prefix . 'botcheck' ] ) ) {
		$botpassed = true;
	}

	if( !empty( $submits[ $prefix . 'botcheck' ] ) ) {
		$botpassed = false;
	}

	if( $botpassed == false ) {
		echo '{ "alert": "error", "message": "' . $message['error_bot'] . '" }';
		exit;
	}


	// reCaptcha
	if( isset( $submits['g-recaptcha-response'] ) ) {

		$recaptcha_data = array(
			'secret' => $recaptcha_secret,
			'response' => $submits['g-recaptcha-response']
		);

		$rc_verify = curl_init();
		curl_setopt( $rc_verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify" );
		curl_setopt( $rc_verify, CURLOPT_POST, true );
		curl_setopt( $rc_verify, CURLOPT_POSTFIELDS, http_build_query( $recaptcha_data ) );
		curl_setopt( $rc_verify, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $rc_verify, CURLOPT_RETURNTRANSFER, true );
		$rc_response = curl_exec( $rc_verify );

		$g_response = json_decode( $rc_response );

		if ( $g_response->success !== true ) {
			echo '{ "alert": "error", "message": "' . $message['recaptcha_invalid'] . '" }';
			exit;
		}
	}

	$html_title	= !empty( $submits['html_title'] ) ? $submits['html_title'] : 'Form Response';
	$forcerecaptcha	= ( !empty( $submits['force_recaptcha'] ) && $submits['force_recaptcha'] != 'false' ) ? true : false;
	$replyto = !empty( $submits['replyto'] ) ? explode( ',', $submits['replyto'] ) : false;

	if( $forcerecaptcha ) {
		if( !isset( $submits['g-recaptcha-response'] ) ) {
			echo '{ "alert": "error", "message": "' . $message['recaptcha_error'] . '" }';
			exit;
		}
	}

	$mail->Subject = !empty( $submits['subject'] ) ? $submits['subject'] : 'Nuevo lead de '. $submits['cf-proyecto'];
	$mail->SetFrom( $sender['email'] , $sender['name'] );

	if( !empty( $replyto ) ) {
		if( count( $replyto ) > 1 ) {
			$replyto_e = $submits[ $replyto[0] ];
			$replyto_n = $submits[ $replyto[1] ];
			$mail->AddReplyTo( $replyto_e , $replyto_n );
		} elseif( count( $replyto ) == 1 ) {
			$replyto_e = $submits[ $replyto[0] ];
			$mail->AddReplyTo( $replyto_e );
		}
	}

	foreach( $recipients as $recipient ) {
		$mail->AddAddress( $recipient['email'] , $recipient['name'] );
	}
	
	if($submits['cf-proyecto'] == 'Azure') {
		$mail->AddAddress( $recipient['xime'], $recipient['xime_name'] );


	} else if($submits['cf-proyecto'] == 'Guayacan' || $submits['cf-proyecto'] == 'Mirador de las garzas') {
		$mail->AddAddress( $recipient['xime'] , $recipient['xime_name'] );
		$mail->AddAddress( $recipient['laura'] , $recipient['laura_name'] );


	} else if($submits['cf-proyecto'] == 'Caminos del Saman') {
		$mail->AddAddress( $recipient['karol'] , $recipient['karol_name'] );
		$mail->AddAddress( $recipient['asesorKromo2'] , $recipient['asesorKromo2_name'] );


	} else if($submits['cf-proyecto'] == 'Colinas de Comfamar') {
		$mail->AddAddress( $recipient['mailColinas'] , $recipient['nameColinas'] );
	} 


	else if($submits['cf-proyecto'] == 'Benavente' || $submits['cf-proyecto'] == 'Valderas') {
		$mail->AddAddress( $recipient['comercial_uno'] , $recipient['comercial_name'] );
		$mail->AddAddress( $recipient['xime'] , $recipient['xime_name'] );


	} else if($submits['cf-proyecto'] == 'Paseo de las Garzas') {
		$mail->AddAddress( $recipient['luz'] , $recipient['luz_name'] );


	} else if($submits['cf-proyecto'] == 'Gualanday') {
		$mail->AddAddress( $recipient['asesorKromo1'] , $recipient['asesorKromo1_name'] );


	} else if($submits['cf-proyecto'] == 'Administrativo') {
		$mail->AddAddress( $recipient['infoKromo'] , $recipient['infoKromo_name'] );
	}


	$unsets = array( 'prefix', 'subject', 'replyto', 'message', $prefix . 'botcheck', 'g-recaptcha-response', 'force_recaptcha', $prefix . 'submit' );

	foreach( $unsets as $unset ) {
		unset( $submits[ $unset ] );
	}

	$fields = array();

	foreach( $submits as $name => $value ) {
		if( empty( $value ) ) continue;

		$name = str_replace( $prefix , '', $name );
		$name = ucwords( str_replace( '-', ' ', $name ) );

		if( is_array( $value ) ) {
			$value = implode( ', ', $value );
		}

		$fields[$name] = $value;
	}

	$response = array();

	foreach( $fields as $fieldname => $fieldvalue ) {
		$response[] = '<strong>' . $fieldname . '</strong>' . ': ' . $fieldvalue;
	}

	$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Este Cuestionario fue llenado en: ' . $_SERVER['HTTP_REFERER'] : '';

	$body = implode( "<br>", $response ) . $referrer;

	$mail->MsgHTML( $body );
	$sendEmail = $mail->Send();

	if( $sendEmail == true ):
		if( $autores && !empty( $replyto_e ) ) {
			$send_arEmail = $autoresponder->Send();
		}

		echo '{ "alert": "success", "message": "' . $message['success'] . '" }';
	else:
		echo '{ "alert": "error", "message": "' . $message['error'] . '<br><br><strong>Reason:</strong><br>' . $mail->ErrorInfo . '" }';
	endif;

} else {
	echo '{ "alert": "error", "message": "' . $message['error_unexpected'] . '" }';
}

?>