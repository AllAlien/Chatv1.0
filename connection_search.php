<?php 

require_once 'connection.php';


$sql = "SELECT * FROM usuarios";

$query = mysqli_query($conn, $sql);


$rows = mysqli_num_rows($query);


if ($rows > 0){


	echo "<table>";
				
		

				while($dados = $query->fetch_array()){ 
				 
					$nomes = $dados['nome']; 
					
					echo "<tr>
						<td><div class='usuarios'>
							
								$nomes							
							</div></td>
							
							</tr>";
				 
					}
					
 	echo "</table>";
					
	}/* the end if */ else
	{ 
					echo "Nenhum usuário na sala";
	}	
							