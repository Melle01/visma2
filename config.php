<?php
session_start();

$pdo = new PDO("sqlite:db/visma.db");

/*$pdo->exec("CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY, name TEXT, email TEXT, password TEXT)");

$pdo->exec("INSERT INTO users(name, email, password) VALUES('Melvin', 'mellecedervall@gmail.com', '12345')");

$pdo->exec("INSERT INTO users(name, email, password) VALUES('Wille', 'willecedervall@gmail.com', '12345')");

$pdo->exec("INSERT INTO users(name, email, password) VALUES('Peter', 'Petercedervall@gmail.com', '12345')");*/

//$res = $pdo->query('SELECT * FROM users'); 


//foreach($res as $row){
//	echo $row['name'];
//}
//while ($row = $res->fetchArray()) {
//	echo $row['name'];
//}
