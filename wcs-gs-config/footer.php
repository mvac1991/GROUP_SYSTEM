<!DOCTYPE html>

<html>

	<footer>
	
		<div style="text-align: left; margin-top: 15px; margin-right: 15px; margin-left: 15px; margin-bottom: 5px; height:40px">
		
			<span style="font-size:15px">Login de acesso: <strong><?php echo $_SESSION['group_system_web_login']; ?></strong></span>
			<span style="font-size:15px">Usuário <strong><?php echo $_SESSION['group_system_web_login_nome']; ?></strong></span>
		
			<form action="../wcs-gs-actions/logoff.php" style="margin-top:-20px">
			
				<span><button method="post" type="submit" class="botao2" id="Logoff"><strong>Sair</strong></button></span>
				<span><button method="post" type="submit" class="botao2" style="margin-right: 15px" id="Sair"><strong>Logoff</strong></button></span>
		
			</form>
			
		</div>
	
	</footer>
	
</html>