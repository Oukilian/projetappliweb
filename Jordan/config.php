<?php
	
	$admit= root;
	$password= toor;
	$host= localhost;
	$db= utilisateur;	
	$db=projet;
	try {
	$bdd= new PDO('mysql:host=localhost;dbname=projet;charset=utf8' ,'root', 'toor');
	echo "connection effectué";
	}

	catch(Exception $e){
	echo "connection échoué ";

	}

	?>
