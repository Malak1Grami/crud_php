<?php
include 'connexion.php';
 if($_GET['id'])
 $id = $_GET['id'];
 $sql = "SELECT * FROM etudiant WHERE id = {$id}";
 $result=mysqli_query($connect,$sql);
 $data=mysqli_fetch_assoc($result);

//  filiere
$sqlFiliere="select nomFiliere from filiere";
$resFiliere=mysqli_query($connect,$sqlFiliere);




 $connect->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire modifier étudiant</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  
 

  <body>
<form action="update2.php" method="post">


<h1>Formulaire de mdifier étudiant</h1>
      <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $data['id']?>" />
        <label for="matricule">Matricule</label>
        <input type="text" id="matricule" name="matricule" value="<?php echo $data['matricule'] ?>" >
      </div>
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"value="<?php echo $data['nom'] ?>">
      </div>
      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $data['prenom'] ?>">
      </div>
      <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" value="<?php echo $data['adresse'] ?>">
      </div>
      <div class="form-group">
        <label for="naissance">Naissance</label>
        <input type="date" id="naissance" name="naissance" value="<?php echo $data['naissance'] ?>">
      </div>
      <div class="form-group">
<label for="filiere">Filière</label>
<select  id="filiere" name="filiere">
<?php while ($row=mysqli_fetch_assoc($resFiliere)){?>
  <option><?php echo $row['nomFiliere'] ?></option>
  <?php
}
?>
</select>
</div>
      <!-- <div class="form-group"> -->
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $data['email'] ?>">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" value="<?php echo $data['password'] ?>">
      </div>
      <td><button type="submit">Sauvegarder les modifications</button></td>
 <td><a href="acceil.php"><button type="button">Retour</button></a></td>
    </form>
    </body>
</html>