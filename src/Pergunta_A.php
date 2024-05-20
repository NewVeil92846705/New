<?php

/** Provavelmente você vai prescisar usar um objeto nativo, ou algo assim. Como no php não existe um objeto vetor, fiz uma array (que é bem parecido eu acho) **/

$vetor = array(0, 1, 3); //ignora os numeros

function lerEntrada() : int 
{
	while (true) // abri esse loop, caso o cara envie o valor errado, o loop pede dinovo
	{
		echo "Digite a dimensão D"; //finge que isso é uma entrada, no php não tem como  fazer igual no C++
		
		$dimensionD = $_POST['a_entrada']; // ignora kkkk
		if (!is_numeric($dimensionD))
		{
			echo "Numero invalido!";
			continue; //ai eu faço o usuario repetir (entre aspas porque no php não existe prompt)
		}
		return (int) $dimensionD;
	}
}

$D = lerEntrada(); 

$vetor[3] = $D; //aqui eu adiciono essa dimensão ao vetor

$vetorCompleto = implode(',', $vetor); //aqui eu estou separando o vetor por virgula

echo "A dimensão D é $D e o vetor completo é $vetorCompleto";

?>
