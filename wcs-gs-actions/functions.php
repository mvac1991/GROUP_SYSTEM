<?php include "../wcs-gs-actions/verificar_sessao_usuario.php"; ?>

<html>

	<script>

		jQuery(function($){
		$("#campo_data").mask("99/99/9999");
		$("#campo_telefone").mask("(99) 9999-99999");
		$("#campo_cpf").mask("999.999.999-99");
		});
		
	</script>

</html>