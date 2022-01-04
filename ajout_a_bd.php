<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Document</title>
</head>
<body>
<div id="container">
<?php
include('connextion_a_bd.php');
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$datenaisse=$_POST['datenaisse'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$passwrd=$_POST['passwrd'];
$civi=$_POST['civi'];
try {
$sql="INSERT INTO users(prenom,nom,datenaisse,email,telephone,passwrd,civilite) VALUES (?,?,?,?,?,?,?)";
$db->prepare($sql)->execute([$prenom,$nom,$datenaisse,$email,$telephone,$passwrd,$civi]);
echo"<h1>Inscription Validée</h1>";


} catch (\Throwable $th) {
        echo "Erreur est:".$th->getmessage()."<br>";
}

?>

<h2><a href="./">Se connecter</a></h2>
</div>  
</body>
</html>