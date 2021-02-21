<?php
include 'mesFonctionsSQL.php';
include 'mesFonctionsTable.php';
$id=$_GET['id'];
if($id==0){
$user=getNewUser();
$action="CREATE";
$libelle="creer";
}else{
	$user=ReadUser($id);
	$action="UPDATE";
	$libelle="Mettre a jour";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="createUpdate.php" method="get">
	<a href="index.php">Liste des Users</a>
	<input type="hidden" name="id" value="<?php echo $user['id']; ?>"/>
	<input type="hidden" name="action" value="<?php echo $action; ?>"/>
	<div>
		<label for="name">Nom:</label>
		<input type="text" id="nom" name="nom" value="<?php  echo $user['nom']; ?>">
	</div>
	<div>
		<label for="prenom">Prenom:</label>
		<input type="text" id="prenom" name="prenom" value="<?php  echo $user['prenom']; ?>">
	</div>
	<div>
		<label for="age">Age:</label>
		<input type="text" id="age" name="age" value="<?php  echo $user['age']; ?>">
	</div>
	<div>
		<label for="adresse">Adresse:</label>
		<textarea id="adresse" name="adresse" placeholder="<?php  echo $user['adresse']; ?>"></textarea>
	</div>
	<div>
		<button type="submit"><?php echo $libelle; ?></button>
	</div>
</form>
<br>
<?php  if($action!="CREATE") {?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE" />
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<p>
			<div>
				<button type="submit">Supprimer</button>
			</div>
		</p>
	</form>
<?php  } ?>
</body>
</html>