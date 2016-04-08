<?php  
	session_start();
	include_once 'configurazioneDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Successo</title>
 <?php 

 $email=$_POST['email'];
 $psw=$_POST['password'];
 $comando= "update azienda set psw =  '$psw' where email='" . $email . "' ";
 $result=mysqli_query($conn,$comando);
 if(!$result)
 	die("Modifica non valida: " . mysql_error());
 ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <div class="alert alert-success">
  <strong>La tua nuova password e' stata registrata con successo! Ora verrai reindirizzato alla pagina di login </strong> <i class="fa fa-spinner fa-spin"></i>
</div>
<?php
header( "refresh:4 ;LOGIN2.php" );
?>
</head>