<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Traitement ou envoi de l'email
    echo "Merci $firstname $lastname, nous avons reçu votre message : $message";
}
?>
