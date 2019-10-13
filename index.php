<?php

include("config.php");

$erroruser = null;
$errorpassword = null;
$inputuser = null;
	$inputpasswords = null;


if ($_SERVER["REQUEST_METHOD"] =="POST") {
	
	
	if (empty($_POST["user"])) {
		
		$erroruser = "måste fyllas i";
	} else {

		$inputuser = $_POST["user"];
		
	}

	if (empty($_POST["password"])) {
		
		$errorpassword = "måste fyllas i";
	} else {

		$inputpasswords = $_POST["password"];
		
	}

}


if(!empty($_POST['user']) && !empty($_POST['password'])){

$results = $pdo->query("SELECT * FROM users where email = '$inputuser'");
$users = [];

	while($row = $results->fetch(\PDO::FETCH_ASSOC)){
		$users[] = [
		'id' => $row['id'],
		'name' => $row['name'],
		'email'=> $row['email'],
		'password' => $row['password']
		];	
	}

	if(!isset($users[0])){
		$user = "";
	}else {
		$user = $users[0];

		var_dump($user);

		if($user['email'] === $inputuser && $user['password'] === $inputpasswords){
			$_SESSION['user'] = $user['email'];
			header("Location: login.php");
		}
	}

}




include("views/start.php");