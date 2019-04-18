
<?php

$conn = new mysqli('localhost','root','root','php_mysql_iniciando');
if ($conn -> connect_errno){
    die( 'Falhou a conexão: ('.$conn->connect_errno. ')' .$conn->connect_errno);
    
}

return $conn;