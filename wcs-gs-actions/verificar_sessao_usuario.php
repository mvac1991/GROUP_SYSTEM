<?php 

	//------------------------------------------------ RESTRINGIR USUÁRIO NÃO LOGADO ----------------------------------------------------
	session_start();

	if(!isset($_SESSION["group_system_web_login"]) || !isset($_SESSION["group_system_web_senha"])) {
			
		header("location: ../sys/login.php");
		exit;
		
	} 
	//-----------------------------------------------------------------------------------------------------------------------------------
	// Capturar dados do usuário da sessão ----------------------------------------------------------------------------------------------
	$usuario_ativo=$_SESSION["group_system_web_login"]; 
	
?> 