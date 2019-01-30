<?php
@session_start();

// inclui o arquivo de configura��o do sistema
include "config_sistema.php";

// verifica se a variavel existir
if(isset($_SESSION['login_usuario']) and isset($_SESSION['senha_usuario'])) {
	// se existie as sess�es coloca os valores em uma varivel
	$login_usuario = $_SESSION['login_usuario'];
	$senha_usuario = $_SESSION['senha_usuario'];
} else {
	$erro = urlencode("Voc� n�o esta logado!");
	header("Location: login.php");
	exit;
}

// verifica se as variaveis est�o atribuidas
if(!(empty($login_usuario) or empty($senha_usuario))) {
	// se estiverem atribuidos vamos ver se exist o login
	$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	if(mysql_num_rows($consulta) == 1) {
		// se o usuario exostir vamos verificar a senha
		if($senha_usuario != mysql_result($consulta,0,"Senha")) {
			// se a senha est� correta vamos apagar a
			// sess�o que existia mas erra a errada
			unset($_SESSION['login_usuario']);
			unset($_SESSION['senha_usuario']);
			
			$erro = urlencode("Voc� n�o esta logado!");
			header("Location: login.php");
			exit;
		}
	} else {
		unset($_SESSION['login_usuario']);
		unset($_SESSION['senha_usuario']);
		
		$erro = urlencode("Voc� n�o esta logado!");
		header("Location: login.php");
		exit;
	}
} else {
	// caso as sess�es estarem vaizias
	$erro = urlencode("Voc� n�o esta logado!");
	header("Location: login.php");
	exit;
}
mysql_close($conn);
?>