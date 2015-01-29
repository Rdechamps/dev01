<?php
	$name = $_POST['name'];
	$first_name = $_POST['first_name'];
	$society = $_POST['society'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$country = $_POST['country'];
	$message = $_POST['message'];
	
	$error = false;
	$response = "ok";
	$nerr = 0;
	
	$error_array = array(
		1 => "Le nom que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		2 => "Le prénom que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		3 => "Le nom de société que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		4 => "Le numéro de téléphone que vous avez renseigné n'est pas valide",
		5 => "Le mail que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		6 => "Le pays que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		7 => "Le message que vous avez composé comporte un (ou des) caractère(s) invalide(s)",
	);
	
	if(!preg_match("/^[_a-zA-Z- àéèêëîïôöùûü]+$/", $name))
	{
		$error = true;
		$nerr = 1;
	}
	else if(!preg_match("/^[_a-zA-Z- àéèêëîïôöùûü]+$/", $first_name))
	{
		$error = true;
		$nerr = 2;
	}
	else if(!preg_match("/^[_a-zA-Z- àéèêëîïôöùûü]+$/", $society))
	{
		$error = true;
		$nerr = 3;
	}
	else if(!preg_match("/^[0-9]+$/", $phone) || strlen($phone) != 10)
	{
		$error = true;
		$nerr = 4;
	}
	if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
	{
		$error = true;
		$nerr = 5;
	}
	else if(!preg_match("/^[_a-zA-Z- ]+$/", $country))
	{
		$error = true;
		$nerr = 6;
	}
	else if(!preg_match("/^[[:alnum:],.;?!' -éèàôçî&]+$/", $message))
	{
		$error = true;
		$nerr = 7;
	}
	
	if(!$error)
	{
		$mail_html = 
		'
		<html>
			<head>
			</head>
			<body>
				<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, sans-serif;">
					  <tr>
						<td style="padding:5px 10px;border:#cf0a10 solid 1px" valign="top" colspan="2">
							Vous avez reçu un message provenant du formulaire de contact.<br/>
							<p>Expéditeur : <strong>'.$name.' '.$first_name.'</strong> ('.$mail.')</p>
							<p>Société :'.$society.', '.$country.'</p>
							<p>Tél :'.$phone.'</p>
							<p>Message :<br/>"'.$message.'"</p>
						</td>
					  </tr>
				</table>
			</body>
		</html>
		';
		
		/*if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}*/
		
		//=====Création de la boundary.
		$boundary = "-----=".md5(rand());
		$boundary_alt = "-----=".md5(rand());
		//==========
		//=====Définition du sujet.
		$sujet = "catalCAD - Contact";
		
		$dest = "martin@inedits.com";
		
		$passage_ligne = "\n";

		//=====Création du header de l'e-mail.
		$header = "From: \"".$name." ".$first_name."\"<".$mail.">".$passage_ligne;
		$header .= "Reply-to: \"".$name." ".$first_name."\" <".$mail.">".$passage_ligne;
		$header .= "MIME-Version: 1.0".$passage_ligne;
		$header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		
		$message_html = $passage_ligne."--".$boundary.$passage_ligne;
		$message_html .= "Content-Type: text/html; charset=\"utf-8\"".$passage_ligne;
		$message_html .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message_html .= $passage_ligne.$mail_html.$passage_ligne;
		$message_html .= $passage_ligne."--".$boundary."--".$passage_ligne;
		
		//=====Envoi de l'e-mail.
		mail($dest, $sujet, $message_html, $header);
	}
	else
	{
		$response = $error_array[$nerr];
		// Assigner à chaque erreur un id entier
		//Declarer un array repertoriant les messages d'erreurs avec pour id l'id des erreurs levées. 	
	}
	$reponse = array('reponse'=>$response);
	echo json_encode($reponse);
?>