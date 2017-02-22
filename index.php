<?php 
	require_once 'header.html';
 ?>
 <body>
 	
 		<div id="principal">
		
		<form id="login_principal" class="form_chat" autocomplete="off" method="post" action="insert_user.php">
			<fieldset>
					<legend>Nickname for enter chat</legend>
				


					<label for="email_chat">Nickname</label>
					<input required type="text" name="nickname" id="nickname" class="form-control">

					<button id="btn_login" class="btn btn-success">Enter chat</button> 
					
					
			</fieldset>
		</form>

		</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/script-refresh.js"></script>
 </body>
