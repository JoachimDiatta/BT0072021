<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Document</title>
</head>
<body> <div id="container">
    

    <form action="backoffice/update.php?i=<?php $p=$_GET['i']; echo $p;?>" method="post">

        <h1>Connexion</h1>
        
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Nouveau Mail" name="email" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Nouveau Password" name="passwrd" required>

        <input type="submit" id='submit' value='LOGIN' >
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
       
</div>
<h4 style="margin-left: 620px;"> <a href="./inscription.html">S'inscrire</a>  </h4>
</form>

</body>
</html>