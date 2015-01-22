<?php 

if (isset($_POST) && isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["email"]) && isset($_POST["motivation"])) {
  if (!empty($_POST["name"]) && !empty($_POST["age"]) && !empty($_POST["email"]) && !empty($_POST["motivation"])) {
  $destinataire = "hafid.traikzi@gmail.com";
  $sujet = "Demande de contact";
  $message = "Nom : ".$_POST["name"]."\r\n";
  $message = "Age : ".$_POST["age"]."\r\n";
  $message = "Adresse email : ".$_POST["email"]."\r\n";
  $message = "Message : ".$_POST["motivation"]."\r\n";
	$entete = "From: ".$_POST["email"]."\r\n".
           	"Reply-To: ".$_POST["email"]."\r\n".
	    	    'X-Mailer: PHP/'.phpversion();
  if (mail($destinataire, $sujet, $message, $entete)) {
    echo "Message envoyé";
  } else {
 		echo "Une erreur est survenue lors de l'envoi du formulaire par email";
  } 
 }
} 

?>
