<?php
$user='root';
$password='';
try{
$db = new PDO('mysql:host=localhost;dbname=projet' ,$user,$password);

}
catch(PDOException $th)
{
    //echo"connexion echouée";
    echo"erreur est :".$th->getmessage()."<br>";
}
?>
