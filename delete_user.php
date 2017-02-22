<?php 

session_start();

require_once 'connection.php';

$nameDelete =  $_SESSION['mynameis'];

/* deletar usuário */
$sql = "DELETE FROM usuarios WHERE nome = '$nameDelete'";

$query= mysqli_query($conn, $sql);

/*  deletar mensagens deste usuário*/
$sql_mensagens = "DELETE FROM mensagens_usuarios WHERE  nickname = '$nameDelete'";

$qury_mensagens = mysqli_query($conn, $sql_mensagens);


/* close connection */
mysqli_close($conn);
