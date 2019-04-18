<?php




$email = $_GET['email'] ?? null;
$id = $_GET['id'] ?? 0;
$id2 = $_GET['id2'] ?? 4;

$conn = new mysqli('localhost','root','root','php_mysql_iniciando');


$stmt = $conn->prepare('SELECT * FROM users where id > ? and id < ? ');


/**
*       i = Integer
*		s = String
*		b = Blob
*		d = Double
*/


$stmt->bind_param('ii',$id,$id2);
$stmt->execute();
$result = $stmt->get_result();
$users  = $result->fetch_all(MYSQLI_ASSOC);

FOREACH($users as $user){
	
	echo $user['id'] . ' - ' .$user['email'] . '<br>';
}