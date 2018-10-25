<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merci pour votre message !</title>
</head>
<body>
    
<?php

$to = "lucas.vandenberg@outlook.fr";

echo($_POST['nom']);
print $to;
print $_POST['email'];
print $_POST['message'];
echo mail($to,$_POST['email'],$_POST['message']);
?>

</body>
</html>