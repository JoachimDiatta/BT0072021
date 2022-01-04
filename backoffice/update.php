<?php
$server = "localhost";
$uName = "root";
$pwd = "";
$db = "projet";

$login = $_POST['email'];
$pass = $_POST['passwrd'];

$p=$_GET['i'];
$cnx = new mysqli($server, $uName, $pwd, $db);

if ($cnx->connect_error) {
    die("Erreur de connexion: " . $cnx->connect_error);
} else {
    $sql = "UPDATE users SET email='$login', passwrd='$pass' WHERE telephone = '$p'";
    $result = $cnx->query($sql);
   
    if ($result === TRUE) {
        
    ?>  
        <script type="text/javascript">
            window.onload = function () { 
                window.location.replace("../?i=<?php echo $p;?>");    
            }
        </script>
            
<?php
    } else {
        ?>
        <script type="text/javascript">
            window.onload = function () { 
                window.location.replace("./auth_fail.html");    
            }
        </script>
        <?php
    }

}

$cnx->close();
?>