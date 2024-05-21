<?php

function produtoEscalar(array $vetorA, array $vetorB) : int {
    if (count($vetorA) != count($vetorB)) {
        echo "Erro: os vetores devem ter o mesmo tamanho"; // Se um for maior ou menor doque o outro, não tem como fazer a conta de produuto escalar
        return 0;
    }

    $produtoEscalar = 0;

    for ($i = 0; $i < count($vetorA); $i++) {
        $produtoEscalar += $vetorA[$i] * $vetorB[$i];
    }

    return $produtoEscalar;
}

/** Coloquei ums numero nada a ver, mas o bom é que você peça ao usuario pra digitar os numeros**/
$A = array(1, 4, 7); //vetor a
$B = array(1, 8, 2); //vetor b

echo "O produto escalar de A e B é " . produtoEscalar($A, $B);
