<!DOCTYPE html>
<html>
<head>
	<?php include_once "head.php";?>
	<title>Page de Connection</title>	
</head>

  <header>
    <?php
    include_once "header.php";
    include_once "menu.php";
    ?>
  </header>

	<body>
		<section id="formulaire_connexion">
			<form method="post" action = "router.php">
			<table>
				<tr>
					<td id="nom" style="width: 150px">
						<label>Nom</label>
					</td>
					<td>
						<input type="text" name="compte" size="40" maxlength="150" />
					</td>
				</tr>
				<tr>
					<td id="mail" style="width: 150px">
						<label>Mail</label>
					</td>
					<td>
						<input type="text" name="compte" size="40" maxlength="150" />
					</td>
				</tr>
				<tr>
					<td id ="mdp">
						<label>Mot de Passe</label>
					</td>
					<td>
						<input type="password" name="mdp" size="40" maxlength="150"/>
					</td>
				</tr>
				<tr>
           			 <td> </td>
           			 <td id="bouton_connexion">
             		 <input type="submit" value="Connexion" class="bouton" />
            		</td>
         		</tr>
         	</table>
			</form>
		</section>	
	</body>
</html>	