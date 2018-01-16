<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<?php session_start(); ?>

<!DOCTYPE html>

<html>

    <?php include "../wcs-gs-config/head.php"; ?>
    
	<body class="fundo">
	
	<div  id="alinhar-centro">
	
		<div class="titulo-paginas">CADASTRO DE GRUPOS DE ACESSO</div></br>
		
		<form action="../wcs-gs-actions/cadastrar_grupo_acesso.php" method="POST">

			<input required autofocus maxlength="20" type="text" style="width:570px" placeholder="Nome do Grupo" name=txt_nome id="txt_nome" value="<?php echo $_SESSION['s_nome']; ?>"></br>
			
			<select size="1" name=txt_permissao required style="width:585px">

				<option selected value="">Selecione a permissão</option>
				<option value="Admin">Admin</option>
				<option value="Gerência">Gerência</option>
				<option value="Operacional">Operacional</option>

			</select><br/>

			<button method="post" type="submit" class="botao-formularios" style="margin-top:10px" id="botao_cadastrar"><strong>CADASTRAR</strong></button></br>
		  
		</form>
		
		<form action="../wcs-gs-actions/limpar_sessao_cad_grupos_acesso.php" method="POST">
			<button method="post" type="submit" class="botao-formularios" style="margin-top:-10px" id="botao_limpar"><strong>LIMPAR</strong></button></br>
		</form>
		
		<form action="../rpt/relatorio_grupos_acesso.php" method="POST">
			<button method="post" type="submit" class="botao-formularios" style="margin-top:-10px" id="botao_limpar"><strong>RELATÓRIO</strong></button></br>
		</form>
		
		<p><form><a href="painel.php"><< VOLTAR</a></form></p>
  
	</div>
  
  </body>
  
</html>