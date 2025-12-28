<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']); 
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Destinataire
    $to = "tonemail@example.com";  // Remplace par ton email réel

    // Sujet du mail
    $subject = "Nouveau message du site Cabinet Dentaire";

    // Corps du mail
    $body = "Nom : $name\n";
    $body .= "Email : $email\n\n";
    $body .= "Message :\n$message";

    // En-têtes du mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envoyer le mail
    if(mail($to, $subject, $body, $headers)){
        echo "Merci ! Votre message a été envoyé avec succès.";
    } else {
        echo "Désolé, une erreur s'est produite. Veuillez réessayer plus tard.";
    }
}
?>
