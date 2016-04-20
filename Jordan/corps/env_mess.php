<?php
	include('../start.php');
	
	$req = $bdd->prepare("INSERT INTO msg(pseudo, titre, article) VALUES(?, ?, ?)");
	
	$nom = $_SESSION['name'];
	$title = $_POST['name'];
	$article = $_POST['message'];
	$res = $req->execute(array($title ,$article, $nom));
	header('Location:http://localhost/css/index.php');
?>
