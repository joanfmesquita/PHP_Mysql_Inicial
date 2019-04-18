<?php

// conexões persistentes OBS: pode cair o desenpenho da aplicação.
ini_set('mysqli.allow_persistent','On');
ini_set('mysql.max_persistent',-1);
ini_set('mysql.max_links',1);

// PHP Conectando no Banco de dados  
$conn = new mysqli('localhost','root','root','php_mysql_iniciando');
if ($conn -> connect_errno){
	die( 'Falhou a conexão: ('.$conn->connect_errno. ')' .$conn->connect_errno);
	
}
echo $conn-> host_info;
echo '<br>';

$sql = 'CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL
)';
if(!$conn->query($sql)){
	echo 'tabela Users já existe' ;
}

echo '<br>';

//   $result = $conn->query('INSERT INTO users (email) VALUE ("Joanmesquita@gmail.com")');
//   var_dump($result);
echo '<br>';	
	$result2 = $conn->query('Select * FROM users');
	echo '<ul>';
	// vai excluindo conforme for usando o metodo  fetch_assoc()
while ($user = $result2->fetch_assoc()){
	echo '<li>' .$user['id'] . ' - ' .$user['email']. '</li>' ;
}
echo '</ul>';


echo '<br>';
$result = $conn->query('Select * FROM users');
echo '<ul>';
	
$users = $result->fetch_all(MYSQLI_ASSOC);  //  MYSQLI_NUM -> $user[0] 

foreach($users as $user){
	echo $user['id'] . ' - ' .$user['email'] . '</br>';
}

echo '</ul>';

echo '<pre>';

var_dump($users);



// USANDO O PREPARE STATEMENT












