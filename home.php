<?php
require_once 'header.html';


session_start();

isset($_SESSION['confirms']) ? $numAle = $_SESSION['confirms'] : $numAle = null;


/*   bloqueia o acesso direto a esta página */

if (isset($_GET['num'])){
		
		if (!empty($_GET['num'])){

			if ($numAle != $_GET['num']){

				echo "Erro ao acessar a página, numero não é igual";
				exit();
			}
		}
	}else{
		echo "Erro ao acessar a página, numero não existe";
		exit();
	}



?>


<body>
	
	<div class="container">
	<div class="row">
		
		<div class="col-md-9">
			
			<div id="chat">

			</div>
		</div>

		
			<div class="col-md-3">
				
				<div id="usuarios">
				
				

				

				</div>
			</div>
		
	</div>
		<div class="row">
			<div class="col-md-10">
			
				
					
				<textarea 
				name="mensagem" 
				id="mensagem" 
				cols="30" 
				rows="10" 
				class="form-control"
				placeholder="Digite sua mensagem e tecle Enter para enviar"></textarea>
			</div>
			<div class="col-md-2">
				
				<button id="btn-off" data-toggle="modal" data-target="#myModal"
				class="btn btn-danger">Sair do chat</button>
			</div>	
				<?php require_once 'off_modal.html'; ?>
			
			

		</div>


	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script-refresh.js"></script>
	<script src="boots/js/bootstrap.js"></script>
</body>