<?php

    header('Content-Type: text/html; charset=utf-8');

	// CONFIGURAÇÕES LOCAL --------------------------------------------------------------------------------------------------------
	$host="localhost";
	$user="root";
	$pass="mvac1991";
	$banco="bd_group_system_web";

    // CONFIGURAÇÕES ONLINE -------------------------------------------------------------------------------------------------------
	/*$host="localhost";
	$user="groupful";
	$pass="U4229iEduv";
	$banco="bd_group_system_web";*/
	
	// CONEXÃO MYSQL --------------------------------------------------------------------------------------------------------------
	$conexao = mysql_connect($host,$user,$pass);
	mysql_select_db($banco);

    session_start();

    $_SESSION['s_host']=$host;
	$_SESSION['s_db_user']=$user;
    $_SESSION['s_db_pass']=$pass;
    $_SESSION['s_db_banco']=$banco;

?>