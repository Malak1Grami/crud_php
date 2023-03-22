<?php
include 'connexion.php';
if($_GET['id']) {
 $id = $_GET['id'];
 $matricule= $_GET['matricule'];

?>
<!DOCTYPE html>
<html>
<head>
 <title> Supprimer un etudiant </title>
 <style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  form {
    background-color: #f2f2f2;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px #ccc;
  }

  h3 {
    text-align: center;
    margin-bottom: 20px;
  }

  button[type="submit"], button[type="button"] {
    padding: 10px 20px;
    margin-right: 20px;
    border: none;
    border-radius: 5px;
    background-color: #333;
    color: #fff;
    cursor: pointer;
  }

  button[type="submit"]:hover, button[type="button"]:hover {
    background-color: #fff;
    background-color: #8b0000;
  }
</style>
</head>
<body>
<h3> Voulez-vous vraiment supprimer  l'etudiant de matricule = <?php echo $matricule ?></h3>
<form action="delete2.php" method="get">
 <input type="hidden" name="id" value="<?php echo $id ?>" />
 <button type="submit"> supprimer </button>
 <a href="acceil.php"><button type="button">Retour</button></a>
</form>
</body>
</html>
<?php
}
?>