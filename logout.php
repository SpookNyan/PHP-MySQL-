<?php
// inicializa a sess�o
session_start();
// limpa a sess�o
$_SESSION = array(); // colocando a session com um array vazio faz com ela
					 // fique vazia sem nenhuma variavel nela, liberando o espa�o
					 
// destroy a sess�o
session_destroy();

// redireciona o link para a home page a pagina "index.php"
header("Location: login.php");
?>