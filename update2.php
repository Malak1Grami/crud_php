<?php
include("connexion.php");
 $matricule = $_POST['matricule'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $adresse = $_POST['adresse'];
 $date = $_POST['naissance'] ;
 $filiere = $_POST['filiere'];
 $email=$_POST['email'] ;
 $password=$_POST['password'] ;
 $id = $_POST['id'];
 $sql = "UPDATE etudiant SET 
 matricule='$matricule',
  nom = '$nom', 
  prenom ='$prenom',
   adresse = '$adresse', 
   naissance = '$date' ,
   filiere='$filiere',
   email='$email',
   password='$password'
   WHERE id = {$id}";

?>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
<div>
  <?php
if(mysqli_query($connect,$sql)) {
 
  header("location: acceil.php");
      }
 else{
    
    echo "Error: ". $sql . "<br>" . $connect->error; 
}

 $connect->close();
 ?>
 </div>
</div>