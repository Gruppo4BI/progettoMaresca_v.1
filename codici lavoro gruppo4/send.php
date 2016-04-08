<?php
// Connect to MySQL
session_start();

include_once 'configurazioneDB.php';
   	$email=$_POST['email'];
   	$_SESSION['email']=$email;
    $to ="andreapiccolo95@gmail.com";//$_SESSION['email'];
    $subject = "Crea la tua nuova password qui";
    $boundary = "==MP_Bound_xyccr948x=="; /*Separatore per il "multipart message"*/
    
    //versione del MIME
    $headers = "MIME-Version: 1.0\r\n";
    //multipart/alternative per indicare che il messaggio � costituito da pi� parti
    //(�multipart�) le quali sono tra loro alternative (�alternative�). Separate dal BOUNDARY
    $headers .= "Content-type: multipart/alternative; boundary='$boundary'\r\n";
    // costruiamo intestazione generale
    $headers .= "From: miaemail@gmail.com \r\n";
    // Check to see if a user exists with this e-mail
 
  
    $comando = "SELECT * FROM azienda where email= '" . $email . "'";
    $result= mysqli_query($conn,$comando); 
    
    //verifico se la emal e' presente nel database, se il conteggio non è >0 ci sarà un messaggio di errore, altrimenti
    //verra' eseguita la procedure per l'invio mail
 if (!$result)
  {
    mysqli_close($conn); 
    die("Errore nell'esecuzione della query: " . $comando); 
  }
 
  	if($result){
   //Messaggio di conferma
   $confirmmessage = "Salve,\n\n";
   $confirmmessage .= "per creare una nuova password clicca sul link sottostante:\n\n";
   
   $confirmmessage .= "<a href='nuova_password.php'>clicca qui per creare la password</a>.";
    
   //questa parte del messaggio viene visualizzata
   // solo se il programma non sa interpretare
   // i MIME poiche' e'posta prima della stringa boundary
   $message = "This is a Multipart Message in MIME format\n";
   $message .= "--$boundary\n";
   $message .= "Content-type: text/html; charset=iso-8859-1\n";
   //la codifica con cui viene trasmesso il contenuto.
   $message .= "Content-Transfer-Encoding: 7bit\n\n";
   $message .= $confirmmessage . "\n";
   $message .= "--$boundary--";
   
   //invio mail
   $mailsent = mail($to, $subject, $message, $headers);
   //controllo
   if ($mailsent)
   {
   	echo "<body style='background-color:#8080ff; font-family: monospace; font-size: x-large; color: white; text-align: center;'>
	  		Salve,<br>";
   	echo "Un' email è stata mandata con successo all'indirizzo email <b>" . $email . "</b> da te fornito.<br><br>";
   	echo "<br>";
   	echo "Per creare una nuova password devi aprire la tua casella e-mail, leggere il messaggio  e cliccare sul link che troverai all'interno.<br><br>Tra pochi secondi verrai reindirizzato alla pagina di login</body>";
   	// reindirizzamento a tempo
   	header( "refresh:10;LOGIN2.php" );
   }
  }
   else {
   	echo "<body style='background-color:#8080ff; font-family: monospace; font-size: x-large; color: white; text-align: center;'>
	  			Errore: l'email inserita non è corretta
	  		</body>";
   	      header( "refresh:10;LOGIN2.php" );
   }
   
    
   
   
   ?>