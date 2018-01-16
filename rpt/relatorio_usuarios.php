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
			  
				<h1 class="titulo-relatorios">RELATÓRIO DE USUÁRIOS</H1>
						
					<p><a href="javascript:self.print()">IMPRIMIR RELATÓRIO</a></p>
					<p><a href="../sys/cad_usuarios.php"><< VOLTAR</a></p>
					
					<p><b>Relatório gerado em <script type="text/javascript">
						var d = new Date()
						document.write(d.toLocaleString())
					</script></b></p>
					
					<!-- NOME DAS COLUNAS -->
					<table border="4">
					
						<tr>
							<td width="70"><b>CÓDIGO</b></td>
							<td width="300"><b>NOME</b></td>
							<td width="150"><b>LOGIN</b></td>
							<td width="200"><b>CPF</b></td>
							<td width="200"><b>TELEFONE WHATSAPP</b></td>
							<td width="200"><b>EMAIL</b></td>
							<td width="300"><b>FUNÇÃO</b></td>
						</tr>
						
						<?
						
							// QUERY SQL ------------------------------------------------------------------------------------------------------------------
							$query = "select * from tab_usuarios";
							$resultado = mysql_query($query, $conexao);
							
							while ($linha = mysql_fetch_array($resultado)) {
							
						?>
					
						<!-- REGISTROS DO BANCO DE DADOS -->
						
						<tr>
							<td width="70"><? echo $linha['codigo']; ?></td>
							<td width="300"><? echo $linha['nome']; ?></td>
							<td width="150"><? echo $linha['login']; ?></td>
							<td width="200"><? echo $linha['cpf']; ?></td>
							<td width="200"><? echo $linha['telefone']; ?></td>
							<td width="200"><? echo $linha['email']; ?></td>
							<td width="300"><? echo $linha['funcao']; ?></td>
						</tr>
						
						<?
						
						}	
											
					?>
					
					</table>
					
			</form>
	  
		</div>
  
	</body>
  
</html>