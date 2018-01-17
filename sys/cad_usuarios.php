<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<!DOCTYPE html>

<html>
    
    <?php include "../wcs-gs-config/head.php"; ?>
 
	<body class="fundo">
	
	<div  id="alinhar-centro">
	
		<div class="titulo-paginas">CADASTRO DE USUÁRIOS</div></br>
		
		<form action="../wcs-gs-actions/cadastrar_usuario.php" method="POST">

			<input required autofocus maxlength="50" type="text" style="width:570px" placeholder="Nome completo" name=txt_nome id="txt_nome"></br>
        
			<input required type="text" maxlength="20" style="width:570px" placeholder="Login" name=txt_login id="txt_login"></br>
    
			<input required type="text" maxlength="20" style="width:570px" placeholder="CPF" name=txt_cpf id="campo_cpf"></br>

			<input required type="text" maxlength="20" style="width:570px" placeholder="Telefone WhatsApp" name=txt_telefone id="txt_telefone"></br>

			<input required type="text" maxlength="40" style="width:570px" placeholder="E-mail" name=txt_email id="txt_email"></br>

			<input required type="text" maxlength="30" style="width:570px" placeholder="Função" name=txt_funcao id="txt_funcao"></br>

			<input required type="password" maxlength="30" style="width:570px" placeholder="Senha de acesso" name=txt_senha id="txt_senha"></br>

			<button method="post" type="submit" class="botao-formularios" style="margin-top:10px" id="botao_cadastrar"><strong>CADASTRAR</strong></button></br>
		  
		</form>
		
		<form action="../wcs-gs-actions/limpar_sessao_cad_usuarios.php" method="POST">
			<button method="post" type="submit" class="botao-formularios" style="margin-top:-10px" id="botao_limpar"><strong>LIMPAR</strong></button></br>
		</form>
		
		<form action="../rpt/relatorio_usuarios.php" method="POST">
			<button method="post" type="submit" class="botao-formularios" style="margin-top:-10px" id="botao_limpar"><strong>RELATÓRIO</strong></button></br>
		</form>
		
		<p><form><a href="painel.php"><< VOLTAR</a></form></p>
  
	</div>
  
  </body>
  
</html>