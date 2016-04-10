
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Borsa delle idee - Successo</title>
 <?php 
 include_once 'configurazioneDB.php';
 $psw=$_POST['password'];
 $get_email=$_GET['email'];
 $get_tipo=$_GET['tipo'];
 if($get_tipo=='azienda'){
 $comando= "update azienda set psw =  '$psw' where email='" . $get_email . "' ";
 }
 else if($get_tipo=='utente'){
 $comando= "update utenti set psw =  '$psw' where email='" . $get_email . "' ";
 }
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
