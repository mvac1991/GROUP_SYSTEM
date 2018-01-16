<?php

	//conectar ao banco de dados---------------------------------------------------------------------------------------------------------
	include "../wcs-gs-config/cfg.php";
	
	$formulario="../sys/login.php";
	
	// MODO ADMINISTRADOR -------------------------------------------------------------------------------------------------------------
	IF($_POST['txt_login']=="admin"){
		if ($_POST['txt_senha']=="rtX53RyuZ5"){
			// INICIAR SESSÃO DO USUÁRIO --------------------------------------------------------------------------------------------------
			session_start();
			$_SESSION['group_system_web_login']=$_POST['txt_login'];
			$_SESSION['group_system_web_senha']=$_POST['txt_senha'];
			$_SESSION['group_system_web_login_nome']="Administrador";
			
			echo "<script>alert('Modo Administrador Ativado!');</script>";
			echo "<script language='javascript'>location.href='../sys/painel.php'</script>";
			exit;
		}
	}
	// --------------------------------------------------------------------------------------------------------------------------------
	
	$tabela="tab_usuarios";
	
	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where LOGIN='$_POST[txt_login]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha == 0){
	
		echo "<script>alert('Login inválido!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		exit;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------
		
	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where LOGIN='$_POST[txt_login]' and SENHA='$_POST[txt_senha]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha == 0){
	
		echo "<script>alert('Senha inválida!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		exit;
	
	} 
	
	$exibe = mysql_fetch_assoc($consulta);
	$nome = $exibe["nome"];
		
	//-----------------------------------------------------------------------------------------------------------------------------
	
	// INICIAR SESSÃO DO USUÁRIO --------------------------------------------------------------------------------------------------
	session_start();
	$_SESSION['group_system_web_login']=$_POST['txt_login'];
	$_SESSION['group_system_web_senha']=$_POST['txt_senha'];
	$_SESSION['group_system_web_login_nome']=$nome;
	
	echo "<script>alert('Seja Bem Vindo $nome!');</script>";
	echo "<script>location.href='../sys/painel.php'</script>";
?>
