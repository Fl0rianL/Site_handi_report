<?php
session_start();

require_once('conf/plan.php');

$page_actuelle = isset($_GET['page']) ? $_GET['page'] : "news";
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Handi Report</title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/site.css" rel="stylesheet" media="screen">
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jqueryv1.10.1.js"></script>
	<script src="js/bootstrap_plugins.js"></script>
	</head>
<body>
	
	<div class="navbar">
		<div class="navbar-inner">
			<div class="pull-left">
				<img class="logo_site" src="img/Défi_H.jpg" alt="Logo Handi-Report" />
			</div>
			<ul class="nav">					
<?php
			foreach ($plansite as $onglet) {
				if($onglet['titre'] == 'Handi report'){
					echo '<a class="brand" href="structure.php?page='.$onglet['page'].'">Handi report</a>';
				}else{
					echo '
						<li';
					if($page_actuelle == $onglet['page'])
					echo ' class="active"';

					echo'>
							<a href = "structure.php?page='.$onglet['page'].'"> '.$onglet['titre'].'</a>
						</li>';
				}
			}
?>
			</ul>
			<div class="nav navbar-nav pull-right">
<?php
					echo 'Vous &ecirc;tes connect&eacute;(e) en tant que '.$_SESSION['prenom'].' '.$_SESSION['nom'];
?>
					<a href="data/deconnexion.php" class="btn btn-primary">D&eacute;connexion</a>
			</div>
		</div>
	</div>

<?php require_once("{$page_actuelle}.php") ?>

</body>
</html>

