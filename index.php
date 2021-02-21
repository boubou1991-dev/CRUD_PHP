<!DOCTYPE html>
<html>
<head>
	<title>Tuto CRUD PHP</title>
</head>
<body>
<?php
include 'mesFonctionsSQL.php';
include 'mesFonctionsTable.php';
$rows=getAllUsers();
afficherTableau($rows,getHeaderTable());
?>
<a href=formulaireUtilisateur.php?id=0>Creer un Utilisateur</a>
</body>
</html>>