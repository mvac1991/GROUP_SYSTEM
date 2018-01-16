<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php session_start(); ?>

<!DOCTYPE html>

<html>
    
    <?php include "../wcs-gs-config/head.php"; ?>
 
	<body class="fundo">
	
	<div  id="alinhar-centro">
	
		<div class="titulo-paginas">CADASTRO DE USUÁRIOS</div></br>
		
		<form action="../wcs-gs-actions/cadastrar_usuario.php" method="POST">

			<input required autofocus maxlength="50" type="text" style="width:570px" placeholder="Nome completo" name=txt_nome id="txt_nome" value="<?php echo $_SESSION['s_nome']; ?>"></br>
        
			<input required type="text" maxlength="20" style="width:570px" placeholder="Login" name=txt_login id="txt_login" value="<?php echo $_SESSION['s_login']; ?>"></br>
    
			<input required type="text" maxlength="20" style="width:570px" placeholder="CPF" name=txt_cpf id="campo_cpf" value="<?php echo $_SESSION['s_cpf']; ?>"></br>

			<input required type="text" maxlength="20" style="width:570px" placeholder="Telefone WhatsApp" name=txt_telefone id="txt_telefone" value="<?php echo $_SESSION['s_telefone']; ?>"></br>

			<input required type="text" maxlength="30" style="width:570px" placeholder="E-mail" name=txt_email id="txt_email" value="<?php echo $_SESSION['s_email']; ?>"></br>

			<input required type="text" maxlength="30" style="width:570px" placeholder="Função" name=txt_funcao id="txt_funcao" value="<?php echo $_SESSION['s_funcao']; ?>"></br>

			<input required type="password" maxlength="30" style="width:570px" placeholder="Senha de acesso" name=txt_senha id="txt_senha" value="<?php echo $_SESSION['s_senha']; ?>"></br>

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