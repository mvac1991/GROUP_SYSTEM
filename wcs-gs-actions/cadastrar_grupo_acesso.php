<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php

	session_start();

	// GUARDAR CAMPOS PREENCHIDOS EM SESSÃO ---------------------------------------------------------------------------------------------
	$_SESSION['s_nome']=$_POST['txt_nome'];

	//conectar ao banco de dados---------------------------------------------------------------------------------------------------------
	include "../wcs-gs-config/cfg.php";
	
	// Consultar existência da Tabela ----------------------------------------------------------------------------------------------
	$tabela = 'tab_grupos_acesso';
	$tabelas_consulta = mysql_query('SHOW TABLES');
	
	while ($tabelas_linha = mysql_fetch_row($tabelas_consulta))
	{
		$tabelas[] = $tabelas_linha[0];
	}
	
	if (!in_array($tabela, $tabelas)) // Criar tabela se ela não existir
	{
		$criar_tabela .= "create table $tabela(codigo int auto_increment, nome varchar(20), permissao varchar(20), primary key(codigo)) default charset=utf8"; 
		mysql_query($criar_tabela);
	}
	
	$formulario = '../sys/cad_grupos_acesso.php';
	
	// CONSULTA -------------------------------------------------------------------------------------------------------------------
	$consulta = mysql_query("select * from $tabela where nome='$_POST[txt_nome]'");
	$linha = mysql_num_rows($consulta);
	
	if ($linha > 0){
	
		echo "<script>alert('Grupo de acesso já cadastrado!');</script>";
		echo "<script language='javascript'>location.href='$formulario'</script>";
		break;
	
	}
	//-----------------------------------------------------------------------------------------------------------------------------
	
	// INSERIR NO BANCO DE DADOS -------------------------------------------------------------------------------------------------
	$inserir = "INSERT INTO $tabela(nome, permissao) ";
	$inserir .= "VALUES('$_POST[txt_nome]','$_POST[txt_permissao]')"; 
	mysql_query($inserir);
	
	echo "<script>alert('Grupo de acesso cadastrado com sucesso!');</script>";
	echo "<script>location.href='limpar_sessao_cad_grupos_acesso.php'</script>";
	echo "<script language='javascript'>location.href='$formulario'</script>";
	
?>
