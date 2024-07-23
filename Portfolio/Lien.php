<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Adresse e-mail où vous souhaitez recevoir le message
    $destinataire = "votre_email@example.com";

    // Sujet du message
    $sujet = "Nouveau message de contact de $nom";

    // Corps du message
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Email: $email\n\n";
    $corps_message .= "Message:\n$message";

    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $corps_message)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
