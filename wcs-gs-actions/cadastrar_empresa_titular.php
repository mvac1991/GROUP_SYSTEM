<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php

	session_start();

	// GUARDAR CAMPOS PREENCHIDOS EM SESSÃO ---------------------------------------------------------------------------------------------
	$_SESSION['s_txt_razao']=$_POST['txt_razao'];
	$_SESSION['s_txt_fantasia']=$_POST['txt_fantasia'];
	$_SESSION['s_txt_cnpj']=$_POST['txt_cnpj'];
	$_SESSION['s_txt_inscricao']=$_POST['txt_inscricao'];
	$_SESSION['s_txt_email']=$_POST['txt_email'];
	$_SESSION['s_txt_telefone']=$_POST['txt_telefone'];
	$_SESSION['s_txt_contato']=$_POST['txt_contato'];
	$_SESSION['s_txt_data_fundacao']=$_POST['txt_data_fundacao'];
	$_SESSION['s_txt_nome_responsavel']=$_POST['txt_nome_responsavel'];
	$_SESSION['s_txt_cpf_responsavel']=$_POST['txt_cpf_responsavel'];

	//conectar ao banco de dados---------------------------------------------------------------------------------------------------------
	include "../wcs-gs-config/cfg.php";
	
    $tabela = 'tab_empresa_titular';

	// Consultar existência da Tabela ----------------------------------------------------------------------------------------------
	/*
	$tabelas_consulta = mysql_query('SHOW TABLES');
	
	while ($tabelas_linha = mysql_fetch_row($tabelas_consulta))
	{
		$tabelas[] = $tabelas_linha[0];
	}
	
	if (!in_array($tabela, $tabelas)) // Criar tabela se ela não existir
	{
		$criar_tabela .= "create table $tabela(codigo int auto_increment, razao varchar(50), fantasia varchar(50), cnpj varchar(20), inscricao varchar(20), email varchar(30), telefone varchar(20), contato varchar(30), data_fundacao varchar(10), nome_responsavel varchar(30), cpf_responsavel varchar(20), primary key(codigo)) default charset=utf8"; 
		mysql_query($criar_tabela);
	}*/
	
	$formulario = '../sys/cad_empresa_titular.php';
	
	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where razao='$_POST[txt_razao]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha > 0){
	
		echo "<script>alert('Razão Social já cadastrada!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------

	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where cnpj='$_POST[txt_cnpj]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha > 0){
	
		echo "<script>alert('CNPJ já cadastrado!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------
	
	// INSERIR NO BANCO DE DADOS -------------------------------------------------------------------------------------------------
	$inserir = "INSERT INTO $tabela(razao, fantasia, cnpj, inscricao, email, telefone, contato, data_fundacao, nome_responsavel, cpf_responsavel) ";
	$inserir .= "VALUES('$_POST[txt_razao]','$_POST[txt_fantasia]','$_POST[txt_cnpj]','$_POST[txt_inscricao]','$_POST[txt_email]','$_POST[txt_telefone]','$_POST[txt_contato]','$_POST[txt_data_fundacao]','$_POST[txt_nome_responsavel]','$_POST[txt_cpf_responsavel]')"; 
	mysql_query($inserir);
	
	echo "<script>alert('Empresa titular cadastrada com sucesso!');</script>";
	echo "<script>location.href='limpar_sessao_cad_empresa_titular.php'</script>";
	echo "<script language='javascript'>location.href='$formulario'</script>";
	
?>
