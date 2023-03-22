<?php
include("connexion.php");
session_start();
if(!isset($_SESSION['email'])) {
	header('Location: index.php');
	
}
$sql="select * from etudiant";
$res=mysqli_query($connect,$sql);
// $row=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
  <h1>Bonjour :<?php echo $_SESSION['nom'] ?> <?php echo $_SESSION['prenom'] ?></h1>
  <h1>liste des etudiants</h1>
  
  <a href="ajout.php"><button style="margin: 0 20px 20px 0;">Ajouter Etudiant</button></a>

  <a href="deconection.php"><button class="logout-btn">Déconnexion</button></a>
  


<table border=1>
  <tr>
    <th>matricule</th>
    <th>nom</th>
    <th>prenom</th>
    <th>adresse</th>
    <th>naissance</th>
    <th>filier</th>
    <th>email</th>
    <th>password</th>
    <th>action</th>
    <th>supprimer</th>
    

  </tr>
  <?php
  while ($row=mysqli_fetch_assoc($res)){


  ?>
  <tr>
    
    <td><?php echo $row['matricule'] ?></td>
    <td><?php echo $row['nom'] ?></td>
    <td><?php echo $row['prenom'] ?></td>
    <td><?php echo $row['adresse'] ?></td>
    <td><?php echo $row['naissance'] ?></td>
    <td><?php echo $row['filiere'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td ><?php echo $row['password'] ?></td>
    <td>
    <a href='update.php?id=<?php echo $row['id'] ?>'><button type='button'>Modifier</button></a>
 <a href='delete.php?id=<?php echo $row['id'] ?>&matricule=<?php echo$row['matricule'] ?>'>
 <button type='button'>Supprimer</button></a>

    </td>
    <form method="post" action="deleteAll.php">
    <td style="text-align: center;">

    <input type="checkbox" name="choix[]" value="<?php echo $row['id'] ?>">
  </td>
    
  </tr>


  <?php
        }
        ?>
  <tr>
    <td colspan="9"></td>
    <td><input type="submit" value="supprimer"></td>
  </tr>
</table>
</form>


</body>
</html>