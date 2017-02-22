$(document).ready(function () {

	var teste = "ok";

	setInterval(function(){

	$.ajax({

		url: 'connection_search.php',
		type: 'post',
		success: function (dados){

			$("#usuarios").html("<span id='text-info-usuarios'>Pessoas no bate-papo</span>"+dados);
		}


	});

	}, 200);




	/* criação de div mensagens*/
	setInterval(function(){

	$.ajax({

		url: 'search_message.php',
		type: 'post',
		success: function (dados){

			$("#chat").html("<span id='text-info-mensagens'>Suas mensagens aqui</span>"+dados);
		}


	});

	}, 200);


	/* função responsável por registrar um evento de teclado*/
	window.addEventListener("keydown", function(e){
	var	code = e.keyCode;
	

		if (code == 13){
			sendMsg();
		}


	}, false);

		



	/*  função responsável por inserir mensagens no banco */
	function sendMsg (){

			$.ajax({


				url: 'msg_insert.php',
				type: 'post',
				data:{
					msg: $("#mensagem").val()
				},
				success: function (){
					
					$("#mensagem").val('')	
				}


			});

	}


	/* deletar usuários e suas respectivas mensagens*/

	$("#btn-off-chat").click(function (){ 

			$.ajax({ 

				url: 'delete_user.php',
				success: function (){
						
				window.location="nickname.php";
				}

				});


	});

});