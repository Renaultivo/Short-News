<?php

    include_once("../db/DB.php");
	
	$my_DB = new DB();	
	
	$pdo = $my_DB->pdo;
    
    $name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
    
	$sql = " insert into users	
					(name,email,pass) 
				 values 
					(:name,:email,:pass) 
				";

	$cmd = $pdo->prepare($sql);
    
    $cmd->bindValue(":name:", $name);
	$cmd->bindValue(":email", md5($email));
	$cmd->bindValue(":pass" , password_hash($pass,PASSWORD_DEFAULT));

	if($cmd->execute())
	{
		echo json_encode(array(
				'result' => 200,
				'message' => 'Sucess to signup'
			));
	}
	else
	{
		echo json_encode(array(
				'result' => 500,
				'message' => 'Failed to signup'
			));
	}

	

?>