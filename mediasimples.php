
<?php
//atribui um valor a variavel
$nota1 = 7;
$nota2 = 6.5;
$nota3 = 4;
$nota4 = 7;
// realiza a soma das variav�is de divide para ter a m�dia
$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

//verifica se a m�dia � maior ou igual a sete, caso a resposta seja NEGATIVA ela pula para o else if
 if ($media >= 7){
	echo "<p> A media do aluno � igual a $media. Aluno Aprovado</p>";
	
// como existem tres condi��es a descrita aqui deve ser apenas uma preposi��o, sen�o o la�o fica com erro
} else if($media < 4){
	echo "<p> A media do aluno � igual a $media. Aluno ja era ta Reprovado</p>";
	}else{
	echo "<p> A media do aluno � igual a $media.Aluno na Prova Final</p>";
	}
?>

