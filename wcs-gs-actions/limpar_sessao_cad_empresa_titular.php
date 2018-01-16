<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php
	
	session_start();

	// GUARDAR CAMPOS PREENCHIDOS EM SESSÃO ---------------------------------------------------------------------------------------------
	unset($_SESSION['s_txt_razao']);
	unset($_SESSION['s_txt_fantasia']);
	unset($_SESSION['s_txt_cnpj']);
	unset($_SESSION['s_txt_inscricao']);
	unset($_SESSION['s_txt_email']);
	unset($_SESSION['s_txt_telefone']);
	unset($_SESSION['s_txt_contato']);
	unset($_SESSION['s_txt_data_fundacao']);
	unset($_SESSION['s_txt_nome_responsavel']);
	unset($_SESSION['s_txt_cpf_responsavel']);
	
	echo "<script language='javascript'>location.href='../sys/cad_empresa_titular.php'</script>";

?>