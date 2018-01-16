<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php

	session_start();

	// GUARDAR CAMPOS PREENCHIDOS EM SESSÃO ---------------------------------------------------------------------------------------------
	unset($_SESSION['s_nome']);
	
	echo "<script language='javascript'>location.href='../sys/cad_grupos_acesso.php'</script>";

?>