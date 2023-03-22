<?php
require('connexion.php');
session_start();
$email=$_POST['email'] ;
$password=$_POST['password'] ;

$query = "SELECT * FROM admin WHERE mail='$email' and password='$password'";
$result = mysqli_query($connect,$query) ;
$rows=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

if($rows==1){
    $_SESSION['email']=$email;
    $_SESSION['nom']=$row['nom'];
    $_SESSION['prenom']=$row['prenom'];
 
 header("Location: acceil.php");
}else{
 include("index.php");
 echo "
 <div style='text-align: center';>
 <p style='font-size:22px; font-weight:bold; color:red; margin-bottom:30px;'>votre mot de passe ou votre email est incorrect</p>
</div>";
}

?>
