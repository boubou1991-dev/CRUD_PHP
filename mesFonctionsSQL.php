<?php
function getDataBaseConnexion(){
	try{
$user="root";
$password="";
$pdo=new PDO('mysql:host=localhost;dbname=db_crud_php',$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
return $pdo;
}catch(PDOException $e){
print 'erreur !'.$e->getMessage()."<br>";
 }
}
function getAllUsers(){
	$con=getDataBaseConnexion();
	$requete='select * from Utilisateurs';
	$rows=$con->query($requete);
	return $rows;
}
 function ReadUser($id){
$con=getDataBaseConnexion();
$requete="select * from Utilisateurs where id=".$id;
$stmt=$con->query($requete);
$row=$stmt->fetchAll();
if(!empty($row)){
	return $row[0];
}
}

function CreateUser($nom,$prenom,$age,$adresse){
	try{
		$con=getDataBaseConnexion();
	$requete="INSERT into Utilisateurs(nom,prenom,age,adresse) values ('$nom','$prenom','$age','$adresse')";
	$con->exec($requete);
}catch(PDOException $e){
 echo $requete."<br>".$e->getMessage();
 }
}
function UpdateUser($id,$nom,$prenom,$age,$adresse){
try{
	$con=getDataBaseConnexion();
	$requete="UPDATE Utilisateurs set nom='$nom',prenom='$prenom',age='$age',adresse='$adresse'
	where id='$id'";

	$stmt=$con->query($requete);

}
catch(PDOException $e){
echo $requete."<br>".$e->getMessage();
}	
}

function DeleteUser($id){
	try{
  $con=getDataBaseConnexion();
  $requete="delete from Utilisateurs where id='$id'";
  $stmt=$con->query($requete);

	}catch(PDOException $e){
    echo $sql."<BR>".$e->getMessage();
	}
}
 function getNewUser(){
   $user['id']="";
   $user['nom']="";
   $user['prenom']="";
   $user['age']="";
   $user['adresse']="";
}

?>