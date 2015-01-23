<?php 

if (isset($_POST) && isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["email"]) && isset($_POST["motivation"])) {
  if (!empty($_POST["name"]) && !empty($_POST["age"]) && !empty($_POST["email"]) && !empty($_POST["motivation"])) {
  $to = "hafid.traikzi@gmail.com";
  $subject = "Demande de contact";
  $message = "Nom : ".$_POST["name"]."\r\n
              Age : ".$_POST["age"]."\r\n
              Adresse email : ".$_POST["email"]."\r\n
              Message : ".$_POST["motivation"]."\r\n";
	$header = "From: ".$_POST["email"]."\r\n".
           	"Reply-To: ".$_POST["email"]."\r\n".
	    	    'X-Mailer: PHP/'.phpversion();
  if (mail($to, $subject, $message, $header)) {
    echo "Message envoyé";
  } else {
 		echo "Une erreur est survenue lors de l'envoi du formulaire par email";
  } 
 }
} 

?>
