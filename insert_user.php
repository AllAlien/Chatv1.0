<?php 
require_once 'connection.php';
session_start();

isset($_POST['nickname']) ? $nomeUser = $_POST['nickname'] : $nomeUser = null;

$_SESSION['mynameis'] = $nomeUser;



$sqlInsert = mysqli_query($conn, "INSERT INTO usuarios (nome) VALUES ('$nomeUser')");



if ($sqlInsert){
	$num = round(2000, 99999);
	$_SESSION['confirms'] = $num;
	header("location:home.php?num=".$num);	
}
else 
{
	echo false;
}
