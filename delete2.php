<?php
include 'connexion.php';
 $id = $_GET['id'];
 $sql="DELETE FROM etudiant where id={$id}";
?>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div>
    <?php
 if(mysqli_query($connect,$sql)){
header("location: acceil.php"); 
}
 else{
    echo "Error: ". $sql . "<br>" . $connect->error; 
}
$connect->close();
 ?>
 </div>
</div>