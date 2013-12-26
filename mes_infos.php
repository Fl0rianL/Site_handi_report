<?php

// Données de test
$infos = array(
	"last_name" => "NOM",
	"first_name" => "Prenom",
	"email" => "monadresse@fournisseur.fr",
	"phone" => "+33 x xx xx xx xx",
);

$disabled = isset($_POST['Modifier']) ? " " : "disabled";
?>


<div class="container">
	<div class="center">
		<h1>Mes informations</h2>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<div class="control-group">
				<label class="control-label" for="inputNom">Nom : </label>
				<div class="controls">
					<input class="input-xlarge" type="text" id="inputNom" value="<?php echo $infos['last_name'];?>" <?php echo $disabled; ?>>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email : </label>
				<div class="controls">
					<input class="input-xlarge" type="text" id="inputEmail" value="<?php echo $infos['email'];?>" <?php echo $disabled; ?> >
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="control-group">
				<label class="control-label" for="inputPrenom">Prenom : </label>
				<div class="controls">
					<input class="input-xlarge" type="text" id="inputPrenom" value="<?php echo $infos['first_name'];?>" <?php echo $disabled; ?>>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPhone">T&eacute;l&eacute;phone : </label>
				<div class="controls">
					<input class="input-xlarge" type="text" id="inputPhone" value="<?php echo $infos['phone'];?>" <?php echo $disabled; ?>>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<form action="structure.php?page=mes_infos" method="post">
			<?php 
			if (isset($_POST['Modifier']))
			{
				echo "<a href=\"structure.php?page=mes_infos\" class=\"btn btn-medium disabled\">Retour</a>";
				echo "<input type=\"submit\" class=\"btn btn-primary btn-medium disabled\" name=\"Enregistrer\" value=\"Enregistrer\"
				<a href=\"structure.php?page=mes_infos\" class=\"btn btn-medium disabled\"></a>";
			}
			else 
			{
				echo"<input type=\"submit\" class=\"btn btn-primary btn-medium disabled\" name=\"Modifier\" value=\"Modifier\"/>";
			}
			?>
			
		</form>
	</div>
</div>
