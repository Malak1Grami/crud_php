<?php
include 'connexion.php';
$id = $_POST['choix'];
foreach($id as $key=>$value)
{
    $sql="DELETE FROM etudiant where id={$value}";
    if(mysqli_query($connect,$sql)){
        header("location: acceil.php"); 
        }
         else{
            echo "Error: ". $sql . "<br>" . $connect->error; 
        }
}
?>




