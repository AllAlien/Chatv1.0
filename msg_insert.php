<?php 

session_start();

require_once 'connection.php';

isset($_SESSION['mynameis']) ? $nickname = $_SESSION['mynameis'] :  $nickname = null;


isset($_POST['msg']) ? $msg = $_POST['msg'] : $msg = null;

$horario = date('H:i:s');

$sql = mysqli_query($conn, "INSERT INTO mensagens_usuarios (hora, mensagem, nickname) VALUES ('$horario', '$msg', '$nickname')");

