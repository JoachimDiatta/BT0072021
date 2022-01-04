<?php
$server = "localhost";
$uName = "root";
$pwd = "";
$db = "projet";

$email = $_POST['email'];
$pass = $_POST['passwrd'];


$cnx = new mysqli($server, $uName, $pwd, $db);

if ($cnx->connect_error) {
    die("Erreur de connexion: " . $cnx->connect_error);
} else {
    $sql = "SELECT * FROM `users` WHERE (email = '$email' AND passwrd = '$pass')";
    $result = $cnx->query($sql);
    $res = $result->num_rows;
    if ($res > 0) {
        while ($row=$result->fetch_assoc()) {
            $p=$row['telephone'];
        }
    ?>  
        <script type="text/javascript">
            window.onload = function () { 
                window.location.replace("./backoffice/?i=<?php echo $p;?>");    
            }
        </script>
            
<?php
    } else {
        ?>
        <script type="text/javascript">
            window.onload = function () { 
                window.location.replace("./backoffice/erreur.html");    
            }
        </script>
        <?php
    }

}

$cnx->close();
?>