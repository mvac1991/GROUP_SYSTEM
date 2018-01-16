<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php session_start(); ?>

<!DOCTYPE html>

<html>
 
    <?php include "../wcs-gs-config/head.php"; ?>
    
	<body class="fundo">
	
	<div  id="alinhar-centro">
	
		<div class="titulo-paginas">CADASTRO DE EMPRESA TITULAR</div></br>
		
		<form action="../wcs-gs-actions/cadastrar_empresa_titular.php" method="POST">

			<input required autofocus maxlength="50" type="text" style="width:570px" placeholder="Razão Social" name=txt_razao id="" value="<?php echo $_SESSION['s_txt_razao']; ?>"></br>
        
			<input required maxlength="50" type="text" style="width:570px" placeholder="Nome Fantasia" name=txt_fantasia id="" value="<?php echo $_SESSION['s_txt_fantasia']; ?>"></br>
    
			<input required maxlength="20" type="text" style="width:570px" placeholder="CNPJ" name=txt_cnpj id="" value="<?php echo $_SESSION['s_txt_cnpj']; ?>"></br>

			<input required maxlength="20" type="text" style="width:570px" placeholder="Inscrição Estadual" name=txt_inscricao id="" value="<?php echo $_SESSION['s_txt_inscricao']; ?>"></br>

			<input required maxlength="30" type="text" style="width:570px" placeholder="E-mail" name=txt_email id="" value="<?php echo $_SESSION['s_txt_email']; ?>"></br>

			<input required maxlength="20" type="text" style="width:570px" placeholder="Telefone" name=txt_telefone id="" value="<?php echo $_SESSION['s_txt_telefone']; ?>"></br>

			<input required maxlength="30" type="text" style="width:570px" placeholder="Contato" name=txt_contato id="" value="<?php echo $_SESSION['s_txt_contato']; ?>"></br>

			<input required maxlength="10" type="text" style="width:570px" placeholder="Data de Fundação" name=txt_data_fundacao id="" value="<?php echo $_SESSION['s_txt_data_fundacao']; ?>"></br>

			<input required maxlength="30" type="text" style="width:570px" placeholder="Nome do Responsável" name=txt_nome_responsavel id="" value="<?php echo $_SESSION['s_txt_nome_responsavel']; ?>"></br>

			<input required maxlength="20" type="text" style="width:570px" placeholder="CPF do Responsável" name=txt_cpf_responsavel id="" value="<?php echo $_SESSION['s_txt_cpf_responsavel']; ?>"></br>
			
			<button method="post" type="submit" class="botao-formularios" style="margin-top:10px" id="botao_cadastrar"><strong>CADASTRAR</strong></button></br>
		  
		</form>
		
		<form action="../wcs-gs-actions/limpar_sessao_cad_empresa_titular.php" method="POST">
			<button method="post" type="submit" class="botao-formularios" style="margin-top:-10px" id="botao_limpar"><strong>LIMPAR</strong></button></br>
		</form>
		
		<form action="../rpt/relatorio_empresa_titular.php" method="POST">
			<button method="post" type="submit" class="botao-formularios" style="margin-top:-10px" id="botao_limpar"><strong>RELATÓRIO</strong></button></br>
		</form>
		
		<p><form><a href="painel.php"><< VOLTAR</a></form></p>
  
	</div>
  
  </body>
  
</html>