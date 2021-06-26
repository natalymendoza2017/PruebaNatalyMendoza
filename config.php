<?php 

$mysqli;
$usuario = 'root';
$clave   = '';
$server  = 'localhost';
$db      = 'mydb';

$mysqli  = new mysqli($server, $usuario, $clave, $db);

if ($mysqli->connect_errno) echo('Falla al conectar con MySQL: ' . $mysqli->connect_error); 

?>