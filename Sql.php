<?php 


	session_start();

	$localhost = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "revisão";

	global $pdo;

	
	try{

		$pdo= new \PDO(
			"mysql:dbname=".$dbname.";host=".$localhost, 
			$username,
			$password
		);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){

		echo "ERRO: ".$e->getMessage();
		exit;

	}
	
		

	
	

	



 ?>