<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php

	session_start();

	// GUARDAR CAMPOS PREENCHIDOS EM SESSÃO ---------------------------------------------------------------------------------------------
	$_SESSION['s_nome']=$_POST['txt_nome'];
	$_SESSION['s_login']=$_POST['txt_login'];
	$_SESSION['s_cpf']=$_POST['txt_cpf'];
	$_SESSION['s_telefone']=$_POST['txt_telefone'];
	$_SESSION['s_email']=$_POST['txt_email'];
	$_SESSION['s_funcao']=$_POST['txt_funcao'];
	$_SESSION['s_senha']=$_POST['txt_senha'];

	//conectar ao banco de dados---------------------------------------------------------------------------------------------------------
	include "../wcs-gs-config/cfg.php";
	
	// Consultar existência da Tabela ----------------------------------------------------------------------------------------------
	$tabela = 'tab_usuarios';
	$tabelas_consulta = mysql_query('SHOW TABLES');
	
	while ($tabelas_linha = mysql_fetch_row($tabelas_consulta))
	{
		$tabelas[] = $tabelas_linha[0];
	}
	
	if (!in_array($tabela, $tabelas)) // Criar tabela se ela não existir
	{
		$criar_tabela .= "create table $tabela(codigo int auto_increment, nome varchar(50), login varchar(20), cpf varchar(20), telefone varchar(20), email varchar(30), funcao varchar(30), senha varchar(30), primary key(codigo)) default charset=utf8"; 
		mysql_query($criar_tabela);
	}
	
	$formulario = '../sys/cad_usuarios.php';
	
	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where nome='$_POST[txt_nome]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha > 0){
	
		echo "<script>alert('NOME já cadastrado!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------
	
	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where login='$_POST[txt_login]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha > 0){
	
		echo "<script>alert('LOGIN já cadastrado!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------

	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where cpf='$_POST[txt_cpf]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha > 0){
	
		echo "<script>alert('CPF já cadastrado!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------

	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where email='$_POST[txt_email]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha > 0){
	
		echo "<script>alert('EMAIL já cadastrado!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------
	
	// CAMPOS NÃO PREENCHIDOS -----------------------------------------------------------------------------------------------------
	IF(!$_POST['txt_senha']){
		
		echo "<script>alert('Preencha o campo SENHA.');</script>";		
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
		
	}
	
	// INSERIR NO BANCO DE DADOS -------------------------------------------------------------------------------------------------
	$inserir = "INSERT INTO $tabela(nome, login, cpf, telefone, email, funcao, senha) ";
	$inserir .= "VALUES('$_POST[txt_nome]','$_POST[txt_login]','$_POST[txt_cpf]','$_POST[txt_telefone]','$_POST[txt_email]','$_POST[txt_funcao]','$_POST[txt_senha]')"; 
	mysql_query($inserir);
	
	echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
	echo "<script>location.href='limpar_sessao_cad_usuarios.php'</script>";
	echo "<script language='javascript'>location.href='$formulario'</script>";
	
?>
