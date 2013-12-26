<?php
    require_once("conf/messages.php");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Handi Report</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/connexion.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	</head>
<body>
    
	<div class="container">

        <div class="navbar">
            <div class="navbar-inner">
                <h1>Handi Report</h1>
            </div>
        </div>
	
		<form class="form-signin" method="post" action = "data/connexion.php">
			<h2 class="form-signin-heading">Veuillez vous connecter svp</h2>
			<input type="text" class="input-block-level" placeholder="Adresse email" name="email">
			<input type="password" class="input-block-level" placeholder="Mot de passe" name="pwd">
			<button class="btn btn-large btn-primary" type="submit">Se connecter</button>
            <input type="hidden" name="page" value="connexion">
		</form>

<?php
        if( isset($_GET['i_message']) ){
            echo'<div class="alert alert-error center">'.$messages[$_GET['i_message']].'</div>';
        }
?>

	</div>

</body>
</html>