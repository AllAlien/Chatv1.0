<?php 

require_once 'connection.php';


$sql = "SELECT * FROM mensagens_usuarios ORDER BY id";


$query = mysqli_query($conn, $sql);

$rows = mysqli_num_rows($query);
if ($rows > 0){


	echo "<table class='usuarios_chat'>";
				
		

				while($dados = $query->fetch_array()){ 
				 
					$mensage = $dados['mensagem'];
					$hora = $dados['hora']; 
					$nickname = $dados['nickname'];
					
					echo "<tr>
						<td>
							
							<div class='name_user'>$nickname ($hora)</div>$mensage 							
							</td>
							
							</tr>";
				 
					}
					
 	echo "</table>";
					
	}/* the end if */ else
	{ 
					echo "Nenhuma mensagem para visualizar";
	}	
		