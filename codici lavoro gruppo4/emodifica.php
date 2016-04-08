<?php
session_start();
include_once 'configurazioneDB.php';
 // tutti i valori modificati presi dal form di modificaW.php
$elencoCategorie=$_REQUEST['elencoCategorie'];
$email = $_REQUEST["email"];
$cap = $_REQUEST["cap"];
$indirizzo =$_REQUEST["indirizzo"];
$citta = $_REQUEST["citta"];
$p_ivaOcf = $_REQUEST["p_ivaOcf"];
$sito_web = $_REQUEST['sito_web'];
$numero = $_REQUEST["numero"];
$numero2 = $_REQUEST["numero2"];
$fax = $_REQUEST["fax"];
$cellulare = $_REQUEST["cellulare"];
$parlaci =$_REQUEST["parlaci"];

//recupero l id di telefono usando l id e facendo una query per cercare tutti i dati
$sql = "SELECT * FROM azienda where id='".$_SESSION['id']."'";
$result = $conn->query($sql);
$dati = $result->fetch_assoc();
// l id del telefonolo metto in una variabile 
$idTelefono=$dati[idTel];
	// aggiorno la tabella telefoni usando l id trovato 
	$comandoSQL="update telefoni set  fax='$fax',numero='$numero', numero2='$numero2',cellulare='$cellulare'".
		" where id='$idTelefono' ";
	//inserisco i valori nella tabella telefoni
	$risultato= mysqli_query($conn,$comandoSQL);
//Ricavo l'id di categoria che mi servirˆ successivamente per aggiornare la tabella dell azienda
	$query2=" select idCat from categoria where categoria='$elencoCategorie' ";
	$result = $conn->query($query2);
	$dati = $result->fetch_assoc();// dati contiene tutti i risultati della query, attraverso questa struttura dati acceder˜ alle informazioni che mi servono 
	

// racchiudo nella variabile comando, l istruzione sql per modificare i valori della tabella azienda
$comando="update azienda set email='$email', sito_web='$sito_web',cap='$cap',p_ivaOcf='$p_ivaOcf',citta='$citta',indirizzo='$indirizzo',idCat='$dati[idCat]',parlaci='$parlaci' ".
		"where id='$_SESSION[id]' ";
//eseguo l 'istruzione sql, se mi ridˆ falso do l'errore modifica 1,errore di modifica, altirmenti 2,aggiornato il db con successo.
if(!$conn->query($comando) ){
	header("location: Menu.php?modifica=1");
	}
	else {
	header("location: Menu.php?modifica=2");
	}
	$conn->close();
?>