<?php
session_start();
include_once 'configurazioneDB.php';
 // tutti i valori modificati presi dal form di modificaW.php
$elencoCategorie=$_REQUEST['elencoCategorie'];
$nome = $_REQUEST["nome"];
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

$query_tel="SELECT * FROM telefoni where id!='".$idTelefono."'";
	$result2=$conn->query($query_tel);
		while	($row = mysqli_fetch_assoc($result2) ){
								if( $numero == $row[numero]){
									header("location: modificaW.php?errore=1");
									echo errore;
													}	
						}

	// aggiorno la tabella telefoni usando l id trovato 
	$comandoSQL="update telefoni set  fax='$fax',numero='$numero', numero2='$numero2',cellulare='$cellulare'".
		" where id='$idTelefono' ";
	//inserisco i valori nella tabella telefoni
	$risultato= mysqli_query($conn,$comandoSQL);
//Ricavo l'id di categoria che mi servirÀÜ successivamente per aggiornare la tabella dell azienda
	$query2=" select idCat from categoria where categoria='$elencoCategorie' ";
	$result = $conn->query($query2);
	$dati = $result->fetch_assoc();// dati contiene tutti i risultati della query, attraverso questa struttura dati accederÀú alle informazioni che mi servono 


// racchiudo nella variabile comando, l istruzione sql per modificare i valori della tabella azienda
$comando="update azienda set nome_azienda='$nome', sito_web='$sito_web',cap='$cap',p_ivaOcf='$p_ivaOcf',citta='$citta',indirizzo='$indirizzo',idCat='$dati[idCat]',parlaci='$parlaci' ".
		"where id='$_SESSION[id]' ";
//eseguo l 'istruzione sql, se mi ridÀÜ falso do l'errore modifica 1,errore di modifica, altirmenti 2,aggiornato il db con successo.
if(!$conn->query($comando) ){
	header("location: Menu.php?modifica=1");
	}
	else {
	header("location: Menu.php?modifica=2");
	}
	$conn->close();
?>
