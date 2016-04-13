/**
 * funzione js di controllo validità dati inseriti
 */

    



function controllo(){ 
	 var email_reg_exp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/;
with(document.modulo) { 
if(nomeAZ.value=="") { 
	 
	nomeAZ.focus(); 
	return false; 
} 
if(psw.value=="") { 
	
	psw.focus(); 
	return false; 
} 
if (!email_reg_exp.test(email.value) || (email.value == "") || (email.value == "undefined")) {
	
    email.focus();
    return false;
}
if ((isNaN(cap.value)) || (cap.value == "") || (cap.value == "undefined")) {
	
    cap.focus();
    return false;
}
if ( (isNaN(telefono2.value) )) {
	
    telefono2.focus();
    return false;
}
if ( (isNaN(cell.value))) {
	
    cell.focus();
    return false;
}
if ( (isNaN(fax.value))) {
	
    fax.focus();
    return false;
}
if ((isNaN(telefono.value)) || (telefono.value == "") || (telefono.value == "undefined")) {
	
    telefono.focus();
    return false;
}
//Effettua il controllo sul campo INDIRIZZO
if ((indirizzo.value == "") || (indirizzo.value == "undefined")) {
	
    indirizzo.focus();
    return false;
}
if ((ruolo.value == "") || (ruolo.value == "undefined")) {
	
   ruolo.focus();
    return false;
}
if ((citta.value == "") || (citta.value == "undefined")) {
	
    citta.focus();
    return false;
}
if ((personaRif.value == "") || (personaRif.value == "undefined")) {
	
    personaRif.focus();
    return false;
}
if ((cf.value == "") || (cf.value == "undefined")) {
	
    cf.focus();
    return false;
}
//Effettua il controllo sul campo risposta
if ((risposta.value == "") || (risposta.value == "undefined")) {
	
    risposta.focus();
    return false;
}
//Effettua il controllo sul campo NICKNAME
if ((domanda.value == "") || (domanda.value == "undefined")) {
	
    domanda.focus();
    return false;
}
if(!CheckThis.checked) { 
	
	CheckThis.focus(); 
	return false; 
	} 

} 

return true; 
} 






