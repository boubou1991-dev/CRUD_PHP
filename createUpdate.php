<?php
$id=$_GET["id"];
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$age=$_GET["age"];
$adresse=$_GET["adresse"];

include 'mesFonctionsSQL.php';
include 'mesFonctionsTable.php';
$action=$_GET['action'];

if($action=="DELETE"){
	$id=$_GET["action"];
}else {
	$id=$_GET["id"];
	$nom=$_GET["nom"];
	$prenom=$_GET["prenom"];
	$age=$_GET["age"];
	$adresse=$_GET["adresse"];
}

if($action=="CREATE"){
	createUser($nom,$prenom,$age,$adresse);
	echo "User cree<br>";
	echo "<a href='index.php'>Liste des utilisateurs</a>";
}

if($action=="UPDATE"){
	UpdateUser($id,$nom,$prenom,$age,$adresse);
	echo "User Update";
	echo "<a href='index.php'>Liste des utilisateurs</a>";
}
if($action=="DELETE"){
	DeleteUser($id);
	echo "user Delete<br>";
	echo "<a href='index.php'>Liste des utilisateurs</a>";
}
?>