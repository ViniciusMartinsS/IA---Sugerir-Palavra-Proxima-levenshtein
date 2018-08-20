<?php 
$palavra = $_GET['valor']; //Recebendo a palavra (Receber valor pelo console = $_SERVER['argv'][1])

$sugestoes = ['Palmeiras', 'São Paulo', 'Corinthians', 'Santos']; // Meu dicionário
$valores [] = []; // Vetor para receber valor dos cálculos entre meu dicionário e a palavra inserida pelo usuário.

//Fazendo foreach para comparar uma sugestão com a palavra do usuário e fazer conta inserindo no vetor valores.
foreach ($sugestoes as $key => $sugestao) {
	$valores[$key] = levenshtein($sugestao, $palavra);
	
}

//A variável key possui uma função que irá procurar no array o menor valor do vetor $valores no próprio vetor retornando seu índice
$key = array_search(min($valores), $valores);
//Retorno a palavra escolhida
echo "Você quis dizer <b>$sugestoes[$key]</b>?";


