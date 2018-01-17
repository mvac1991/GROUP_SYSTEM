<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<!DOCTYPE html>

<html>
	
	<?php 
	
		include "../wcs-gs-config/head.php"; 
		include "../wcs-gs-config/cfg.php";
	 
	?>
  
	<body style="background-color: #e1e1e1">
	
		<div  class="box" style="margin-left:8px; margin-right: 8px">
			
			<form>
			  
				<h1 class="titulo-relatorios">RELATÓRIO DE GRUPOS DE ACESSO</H1>
						
					<p><a href="javascript:self.print()">IMPRIMIR RELATÓRIO</a></p>
					<p><a href="../sys/cad_grupos_acesso.php"><< VOLTAR</a></p>
					
					<p><b>Relatório gerado em <script type="text/javascript">
						var d = new Date()
						document.write(d.toLocaleString())
					</script></b></p>
					
					<!-- NOME DAS COLUNAS -->
					<table border="4">
					
						<tr>
							<td width="70"><b>CÓDIGO</b></td>
							<td width="300"><b>NOME</b></td>
							<td width="150"><b>PERMISSÃO</b></td>
						</tr>
						
						<?php
						
							// QUERY SQL ------------------------------------------------------------------------------------------------------------------
							$query = "select * from tab_grupos_acesso";
							$resultado = mysql_query($query, $conexao);
							
							while ($linha = mysql_fetch_array($resultado)) {
							
						?>
					
						<!-- REGISTROS DO BANCO DE DADOS -->
						
						<tr>
							<td width="70"><?php echo $linha['codigo']; ?></td>
							<td width="300"><?php echo $linha['nome']; ?></td>
							<td width="400"><?php echo $linha['permissao']; ?></td>
						</tr>
						
						<?php
						
						}	
											
					?>
					
					</table>
					
			</form>
	  
		</div>
  
	</body>
  
</html>