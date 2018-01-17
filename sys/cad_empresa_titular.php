<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<!DOCTYPE html>

<html>
 
    <?php include "../wcs-gs-config/head.php"; ?>
    
	<body class="fundo">
	
	<div  id="alinhar-centro">
	
		<div class="titulo-paginas">CADASTRO DE EMPRESA TITULAR</div></br>
		
		<form action="../wcs-gs-actions/cadastrar_empresa_titular.php" method="POST">

			<input required autofocus maxlength="50" type="text" style="width:570px" placeholder="Razão Social" name=txt_razao id=""></br>
        
			<input required maxlength="50" type="text" style="width:570px" placeholder="Nome Fantasia" name=txt_fantasia id=""></br>
    
			<input required maxlength="20" type="text" style="width:570px" placeholder="CNPJ" name=txt_cnpj id=""></br>

			<input required maxlength="20" type="text" style="width:570px" placeholder="Inscrição Estadual" name=txt_inscricao id=""></br>

			<input required maxlength="30" type="text" style="width:570px" placeholder="E-mail" name=txt_email id=""></br>

			<input required maxlength="20" type="text" style="width:570px" placeholder="Telefone" name=txt_telefone id=""></br>

			<input required maxlength="30" type="text" style="width:570px" placeholder="Contato" name=txt_contato id=""></br>

			<input required maxlength="10" type="text" style="width:570px" placeholder="Data de Fundação" name=txt_data_fundacao id=""></br>

			<input required maxlength="30" type="text" style="width:570px" placeholder="Nome do Responsável" name=txt_nome_responsavel id=""></br>

			<input required maxlength="20" type="text" style="width:570px" placeholder="CPF do Responsável" name=txt_cpf_responsavel id=""></br>
			
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