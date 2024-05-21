<?php

function somarVetores(int $A, int $B) : int 
{
	return $A + $B;
}

/** FINGE QUE ESSES DOIS ECHO SÃO UMA ENTRADA DO USUARIO (NO PHP NÃO SE FAZ ISSO) **/
echo "Digite o vetor A: "; 
$entradaA = $_GET['entrada_a']; //só fingindo

echo "Digite o vetor B: ";
$entradaB = $_GET['entrada_b'];

$resultado = somarVetores($A, $B);

echo "Soma dos vetores A, B é: $resultado";

?>
