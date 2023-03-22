<?php
include 'connexion.php';
 $matricule = $_POST['matricule'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $filiere = $_POST['filiere'];
 $adresse = $_POST['adresse'];
 $date = $_POST['naissance'];
 $email=$_POST['email'] ;
 $password=$_POST['password'] ;

 $mail = "SELECT * FROM etudiant WHERE email = '{$email}'";
 $matrcl = "SELECT * FROM etudiant WHERE matricule = '{$matricule}'";
 
 $result_mail = mysqli_query($connect, $mail);
 $result_matrcl = mysqli_query($connect, $matrcl); 
 
?>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div>
    <?php
if ( ($result_mail!== false && mysqli_num_rows($result_mail) > 0) && ($result_matrcl !== false && mysqli_num_rows($result_matrcl) > 0) ){
  echo "<p style='font-size:22px; font-weight:bold; color:#8b0000; margin-bottom:30px;'>mail  et matricule deja utilise </p>";
  echo "<a href='ajout.php'><button style='padding:15px 30px; background-color:#4CAF50; color:white; border:none; border-radius:5px;'>Retour</button></a>";
  echo "<a href='acceil.php'><button style='padding:15px 30px; background-color:#4CAF50; color:white; border:none; border-radius:5px; margin-left:20px;'>Home</button></a>";
  exit();
} 

if ($result_matrcl !== false && mysqli_num_rows($result_matrcl) > 0) {
  echo "<p style='font-size:22px; font-weight:bold; color:#8b0000; margin-bottom:30px;'>matricule deja utilise </p>";
  echo "<a href='ajout.php'><button style='padding:15px 30px; background-color:#4CAF50; color:white; border:none; border-radius:5px;'>Retour</button></a>";
  echo "<a href='acceil.php'><button style='padding:15px 30px; background-color:#4CAF50; color:white; border:none; border-radius:5px; margin-left:20px;'>Home</button></a>";
  exit();
}

if ($result_mail!== false && mysqli_num_rows($result_mail) > 0) {
  echo "<p style='font-size:22px; font-weight:bold; color:#8b0000; margin-bottom:30px;'>mail deja utilise </p>";
  echo "<a href='ajout.php'><button style='padding:15px 30px; background-color:#4CAF50; color:white; border:none; border-radius:5px;'>Retour</button></a>";
  echo "<a href='acceil.php'><button style='padding:15px 30px; background-color:#4CAF50; color:white; border:none; border-radius:5px; margin-left:20px;'>Home</button></a>";
  exit();
}



 $sql = "INSERT INTO etudiant (matricule, nom, prenom, filiere, adresse, naissance, email, password) 
 VALUES ('$matricule', '$nom', '$prenom', '$filiere', '$adresse', '$date', '$email', '$password')";
 
 if(mysqli_query($connect,$sql)){
  
  header("location: acceil.php");
  } 
 else {
   echo "Error executing query: " . mysqli_error($connect);
   exit();
 }
 
 
 ?> 
 </div>
 </div>

