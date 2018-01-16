
<!DOCTYPE html>

<html>
    
    <?php include "../wcs-gs-config/head.php"; ?>
  
	<body id="divCenter" class="Caixa fundo">

		<div>

			<div style="margin-bottom:13%; text-align:center; font-size: 50px; color:#696969">LOGIN</div>

				<form action="../wcs-gs-actions/validar_login.php" method="post" id="validar_login">

					<input type="text" class="CamposLogin" placeholder="Usuário" name=txt_login id="txt_login" width="100px" required></br>
					<input type="password" class="CamposLogin" placeholder="Senha" name=txt_senha id="txt_senha" required></br>
					<button type="submit" class="botao-formularios" style="width:80%;margin-top:5%; margin-left:10%; height:50px"><strong>ENTRAR</strong></button>

				</form>

			</div>

	</body>
  
</html>