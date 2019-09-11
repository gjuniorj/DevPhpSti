<?php 
/*
//Exercício 1.a: Concatenação do nome do usuário
$nome = "Gilberto";
$sobrenome = "Junior";
echo "$nome "."$sobrenome";
*/

/*
//Exercício 1.b: Concatenação do nome passado pelo usuário
$nomeUsuario = readline("Nome: ");
$sobrenomeUsuario = readline ("Sobrenome: ");

echo "Usuário: " . $nomeUsuario . $sobrenomeUsuario;
*/

//Exercício 2: Imprimir tabuada do número escolhido pelo usuário
/*
$numTabuada = readline("Tabuada do número: ");
for ($num=0; $num<=10; $num++){

	$valorCalculado = $numTabuada * $num;
	//echo $numTabuada . " x " . $num . " = " . $valorCalculado . "\n";	
	//echo "$numTabuada  x  $num  =  $valorCalculado \n";	
	echo $numTabuada . ' x ' . $num . ' = ' . $valorCalculado . PHP_EOL;	
}
*/
//Exercício 3: Imprimir todas as tabuadas do 1 ao 10
/*
for ($tabuada=1; $tabuada<=10; $tabuada++){
	echo "Tabuada do $tabuada \n";
	for ($num=0; $num<=10; $num++){
		$valorCalculado = $tabuada * $num;
		echo "$tabuada x $num = $valorCalculado \n";
	}
	echo "\n\n";

}
*/
//Exercício 4: Imprimir tabuadas especificadas pelo usuário
//$tabuadaInicial = readline("Listar tabuada do número: ");
//$tabuadaFinal = readline(" ao ");
/*
$tabuadaInicial = readline("Tabuada Inicial: ");
$tabuadaFinal = readline("Tabuada Final: ");

for ($tabuada=$tabuadaInicial; $tabuada<=$tabuadaFinal; $tabuada++){
	echo "Tabuada do $tabuada \n";
	for ($num=0; $num<=10; $num++){
		$valorCalculado = $tabuada * $num;
		echo "$tabuada x $num = $valorCalculado \n";
	}
	echo "\n\n";

}
*/

//Exercício 5: Lê nome e sobrenome do teclado e retorna uma estrutura com as duas informações
function nomeCompleto($nome, $sobrenome){
	$arrayNome = array($nome, $sobrenome);
	return $arrayNome;
}

$nomeUsuario = readline("Nome: ");
$sobrenomeUsuario = readline ("Sobrenome: ");

$usuarioLogado = nomeCompleto($nomeUsuario,$sobrenomeUsuario);

echo $usuarioLogado[0].' '.$usuarioLogado[1];
?>


