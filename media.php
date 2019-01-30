
<html lang="pt-br">

<?php
$nota1 = $_POST['n1'];
$nota2 = $_POST['n2'];
$nota3 = $_POST['n3'];
$nota4 = $_POST['n4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

 if ($media >= 7){
	echo "<p> A media do aluno igual a $media. Aluno APROVADO</p>";
} else if($media < 4){
	echo "<p> A media do aluno igual a $media. Aluno ja era ta REPROVADO</p>";
	}else{
	echo "<p> A media do aluno igual a $media.Aluno na PROVA FINAL</p>";
	}
?>

