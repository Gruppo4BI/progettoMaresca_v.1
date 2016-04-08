<?php

		$conn = @mysqli_connect("localhost","root","");
		
		if(!$conn)
		{//gestione dell'errore
		
		//echo mysqli_connect_errno() . $nl;
		//echo mysqli_connect_error() . $nl;
		//echo mysqli_sqlstate( $conn ) . $nl;
		echo "Connessione al server fallita. Impossibile procedere. Contattare ...";
		die;
		}
		
		//2 selezionare il db con cui lavorare
		if ( !@mysqli_select_db($conn, "borsa_idee_db") )
		{
			echo "Non trovo il data base ...".$nl;
			echo mysqli_sqlstate( $conn ) . $nl;
			echo mysqli_errno( $conn ) . $nl;
			echo mysqli_error( $conn ) . $nl;
			die;
		}
?>