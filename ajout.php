<?php
include("connexion.php");
$sql="select nomFiliere from filiere";
$res=mysqli_query($connect,$sql);
// $row=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire d'ajout d'étudiant</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 
  </head>
  <body>
    <h1>Formulaire d'ajout d'étudiant</h1>
    <form method="POST" action="ajout1.php">
      <div class="form-group">
        <label for="matricule">Matricule</label>
        <input type="text" id="matricule" name="matricule">
      </div>
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
      </div>
      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">
      </div>
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse">
      </div>
      <div class="form-group">
        <label for="naissance">Naissance</label>
        <input type="date" id="naissance" name="naissance">
      </div>
      <div class="form-group">


        <label for="filiere">Filière</label>
        <!-- <input type="text" id="filiere" name="filiere"> -->
        <select  id="filiere" name="filiere">
        <?php
  while ($row=mysqli_fetch_assoc($res)){


  ?>
          <option><?php echo $row['nomFiliere'] ?></option>
          
          <?php
        }
        ?>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password">
      </div>
      <input type="submit" value="Ajouter">
    </form>
  </body>
</html>
