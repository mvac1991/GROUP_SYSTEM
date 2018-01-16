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
			  
				<h1 class="titulo-relatorios">RELATÓRIO DE EMPRESA TITULAR</H1>
						
					<p><a href="javascript:self.print()">IMPRIMIR RELATÓRIO</a></p>
					<p><a href="../sys/cad_empresa_titular.php"><< VOLTAR</a></p>
					
					<p><b>Relatório gerado em <script type="text/javascript">
						var d = new Date()
						document.write(d.toLocaleString())
					</script></b></p>
					
					<!-- NOME DAS COLUNAS -->
					<table border="4">
					
						<tr>
							<td width="70"><b>CÓDIGO</b></td>
							<td width="300"><b>RAZÃO SOCIAL</b></td>
							<td width="300"><b>NOME FANTASIA</b></td>
							<td width="150"><b>CNPJ</b></td>
							<td width="100"><b>INSCRIÇÃO ESTADUAL</b></td>
							<td width="200"><b>E-MAIL</b></td>
							<td width="150"><b>TELEFONE</b></td>
							<td width="200"><b>CONTATO</b></td>
							<td width="150"><b>DATA DE FUNDAÇÃO</b></td>
							<td width="150"><b>NOME DO RESPONSÁVEL</b></td>
							<td width="150"><b>CPF DO RESPONSÁVEL</b></td>
						</tr>
						
						<?
						
							// QUERY SQL ------------------------------------------------------------------------------------------------------------------
							$query = "select * from tab_empresa_titular";
							$resultado = mysql_query($query, $conexao);
							
							while ($linha = mysql_fetch_array($resultado)) {
							
						?>
					
						<!-- REGISTROS DO BANCO DE DADOS -->
						
						<tr>
							<td width="70"><? echo $linha['codigo']; ?></td>
							<td width="300"><? echo $linha['razao']; ?></td>
							<td width="150"><? echo $linha['fantasia']; ?></td>
							<td width="150"><? echo $linha['cnpj']; ?></td>
							<td width="100"><? echo $linha['inscricao']; ?></td>
							<td width="200"><? echo $linha['email']; ?></td>
							<td width="150"><? echo $linha['telefone']; ?></td>
							<td width="200"><? echo $linha['contato']; ?></td>
							<td width="150"><? echo $linha['data_fundacao']; ?></td>
							<td width="150"><? echo $linha['nome_responsavel']; ?></td>
							<td width="150"><? echo $linha['cpf_responsavel']; ?></td>
						</tr>
						
						<?
						
						}	
											
					?>
					
					</table>
					
			</form>
	  
		</div>
  
	</body>
  
</html>