<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>retour</title>
</head>
<body>
    
<?php

$to = "lucas.vandenberg@outlook.fr";

echo($_POST['name']);
print $to;
print $_POST['Sujet'];
print $_POST['message'];
print_r(mail($to,$_POST['Sujet'],$_POST['message']));
echo mail($to,$_POST['Sujet'],$_POST['message']);
print phpinfo();
?>

</body>
</html>