<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php

	session_start();

	// GUARDAR CAMPOS PREENCHIDOS EM SESSÃO ---------------------------------------------------------------------------------------------
	unset($_SESSION['s_nome']);
	unset($_SESSION['s_login']);
	unset($_SESSION['s_cpf']);
	unset($_SESSION['s_telefone']);
	unset($_SESSION['s_email']);
	unset($_SESSION['s_funcao']);
	unset($_SESSION['s_senha']);
	
	echo "<script language='javascript'>location.href='../sys/cad_usuarios.php'</script>";

?>