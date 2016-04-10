<!-- La pagina forgot.php consiste in una form,a cui si accede dalla pagina di LOGIN2.php
cliccando dove indicato nel caso di password dimenticata, dove si può inserire la  email(usata per la registrazione)
per iniziare la procedura di reset password-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
	 <link href="css/stileLOG2.css" rel="stylesheet" type="text/css">
    <title>Borsa delle idee - Password dimenticata</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <hr>
<div class="container">
    <div class="row">
       <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
               <div class="panel-body">
                  <div class="text-center">
                         <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Password Dimenticata?</h2>
                          <p>Puoi fare il reset della tua password qui.</p>
                          
                   <p>Scegli l'opzione corretta</p>
                    <form class="form" name="email" action="send.php" method="POST" >
                    <div class="row">
                    <div class="col-xs-12">
                     <br>
                     <div class="btn-group" data-toggle="buttons">
                     <label class="btn active">
                     <input type="radio" name='tipo' value='azienda'  REQUIRED checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span>Azienda</span>
                      </label>
       		          <label class="btn">
        		      <input type="radio" name='tipo' value='utente' REQUIRED checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-check-circle-o fa-2x"></i><span>Utente</span>
       				 </label>
    				  </div>
					   </div>
						</div>
						<br/><br/>
                            <div class="panel-body">
                             <p> Inserisci il tuo indirizzo email </p>
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="email" name="email" placeholder="indirizzo email" class="form-control" type="email" oninvalid="setCustomValidity('Inserisci un indirizzo email valido!')" onchange="try{setCustomValidity('')}catch(e){}" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Email" name='submit' type="submit" >
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
