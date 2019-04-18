<?php


//  chamada com SQLInject
// http://localhost/php/inseguro.php?id=10 union select * from users

$email = $_GET['email'] ?? null;
$id = $_GET['id'] ?? 0;

$conn = new mysqli('localhost','root','root','php_mysql_iniciando');


$result = $conn->query('SELECT * FROM users where id > ' .$id);

$users  = $result->fetch_all(MYSQLI_ASSOC);

FOREACH($users as $user){
	
	echo $user['id'] . ' - ' .$user['email'] . '</br>';
}
