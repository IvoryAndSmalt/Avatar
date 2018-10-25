<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merci pour votre message !</title>
</head>
<body>

<h1 class="messageMerci">

</h1>
    
<?php

$to = "lucas.vandenberg@outlook.fr";
$errorMessage ="vous avez entré des caractères non-autorisés";
$nomCorrige = $_POST['nom'];
$mailCorrige = htmlspecialchars($_POST['email']);
$messageCorrige = htmlspecialchars($_POST['message']);
$regex = "/[a-zA-Z]/";

if (!preg_match ($regex, $nomCorrige)){
    print $errorMessage;
}

else{
    mail ($to, htmlspecialchars ($_POST['email']),htmlspecialchars ($_POST['message']));
    header('Location: https://lucasv.promo-24.codeur.online/avatar/remerciement.php');
    exit; // Ensures that there is no code _after_ the redirect executed
    // print $nomCorrige;
    // print $to;
    // print $mailCorrige;
    // print $messageCorrige; a mettre dans la page PHP du résultat
}

?>

</body>
</html>
