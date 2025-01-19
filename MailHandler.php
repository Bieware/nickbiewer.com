<?php
function sendmail($to , $sujet , $message , $reply , $from)
{
$mail_mime = "Date: ".date("l j F Y, G:i")."\n";
$mail_mime .= "MIME-Version: 1.0\n";

//— Le message en texte simple pour les navigateurs qui n'acceptent pas le HTML —//
$mail_mime .= "Content-Type: text/plain; charset=\"utf-8\"\n";
$mail_mime .= "Content-Transfer-Encoding: quoted printable";

return mail($to, $sujet, $message, "Reply-to: $reply\nFrom: $from\n".$mail_mime);
}

//— Déclation des variables du formulaires et début du script —//

$nom = strip_tags($_POST['name']) ;
$tel = strip_tags($_POST['phone']);
$email = strip_tags($_POST['email']);
$message2 = strip_tags($_POST['message']);

$to = "nickbiewerdesign@gmail.com"; // E-Mail Destinataire
$reply = $email; // Indique l'Expediteur
$from = $email; // E-Mail pour recevoir les Réponses
$sujet = 'Message sent to Nickbiewer.com';

$message = "Formulaire de contact";
$message .= "\n";
$message .= "\nNom = ".$nom;
$message .= "\n";
$message .= "\nTél = ".$tel;
$message .= "\n";
$message .= "\nEmail = ".$email;
$message .= "\n";
$message .= "\nMessage = ".$message2;
$message .= "\n";

?>