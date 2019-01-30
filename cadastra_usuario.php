
	<?php
// inclui o arquivo de configura��o do sistema
include "config_sistema.php";

// recebe dados do formulario
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$rep_senha = $_POST['rep_senha'];
$email = $_POST['email'];

// verifica se o usuario digitou o login
if($login == "") {
	echo "Digite seu login!";
	exit;
} else {
	// se o usuario digitou o login ele verifica
	// se esta disponivel
	$consulta = mysql_query("select * from cadastro where login = '$login'");
	$linha = mysql_num_rows($consulta);
	if($linha != 0) {
		echo "O nome de usu�rio que voc�<br>
			  digitou j� existe tente outro!";
		exit;
	}
}

// verifica se o usuario digitou a senha
if($senha == "") {
	echo "Digite sua senha!";
	exit;
} else {
	// se o usuario digitou a senha
	// vamos comparar com a contra senha
	if($senha != $rep_senha) {
		echo "Senha invalida!";
		exit;
	}
}

// verifica se o usuario digitou o nome
if($nome == "") {
	echo "Digite seu nome!";
	exit;
}

// verifica o email
if($email == "") {
	echo "Digite o seu e-mail!";
	exit;
}

// verifica se o usuario digitou o login
if($login== "") {
	echo "Digite seu login!";
	exit;
} else {
	// se o usuario digitou a matricula ele verifica
	// se esta j� foi cadastrada 
	$consulta = mysql_query("select * from cadastro where login = '$login'");
	$linha = mysql_num_rows($consulta);
	if($linha != 0) {
		echo "ERRO: O login informado j� est� cadastrado.<br>
			  Verifique se voc� digitou corretamente!";
		exit;
	}
}

// faz consulta no banco para inserir os dados do usuario
$sql = "insert into cadastro (nome,login,senha,rep_senha,email) values ('$nome','$login','$senha','$rep_senha','$email')";
$consulta = mysql_query($sql);

// verifica se o usuario foi cadastrado
if($consulta) {
	echo "<font color=green><b>
		  Voc� foi cadastrado com sucesso!<br>
		  Click <a href=index.php>aqui</a> para efetuar o login.
		  </font></b>";
	exit;
} else {
	echo "N�o foi possivel efetuar o seu cadastro<br>
		  tente mais tarde pode ser um problema no servidor!<br>
		  Click <a href=index.php>aqui</a> para ir ate a home page do sistema.";
	exit;
}
?>

 