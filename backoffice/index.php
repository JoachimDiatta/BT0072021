<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles1.css">
    <title>Accueil</title>
</head>
<body >
<?php
$p=$_GET['i'];
$server = "localhost";
$uName = "root";
$pwd = "";
$db = "projet";

$cnx = new mysqli($server, $uName, $pwd, $db);

if ($cnx->connect_error) {
    die("Erreur de connexion: " . $cnx->connect_error);
} else {
    $sql = "SELECT * FROM `users` WHERE telephone=$p";
    $result = $cnx->query($sql);
    $res = $result->num_rows;
    if ($res > 0) {
        while ($row=$result->fetch_assoc()) {
            $pr=$row['prenom'];
            $n=$row['nom'];
        }
    }
}
/*try{
$db = new PDO('mysql:host=localhost;dbname=projet' ,$user,$password);
$sql = "SELECT * FROM `users` WHERE telephone=$p";
$result = $db->query($sql);
$res = $result->num_rows;
if ($res > 0) {
    while ($row=$result->fetch_assoc()) {
        $n=$row['nom'];
        $b=$row['prenom'];
    }
}
}
catch(PDOException $th)
{
    //echo"connexion echouée";
    echo"erreur est :".$th->getmessage()."<br>";
}*/
?>
    <h4 style="margin-left: 1100px;"><a href="../gestion.php?i=<?php echo $p;?>">Changer mot de passe</a>&nbsp;| <a href="../index.php">Deconnexion</a>  </h4>
    <div id="container">
    <h1>Bienvenue&nbsp;<?php echo $pr;?>&nbsp;<?php echo $n;?></h1>
</div>
</body>
</html>