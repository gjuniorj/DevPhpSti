<?php
/**
 * Função que cria uma matriz randomicamente a partir dos parâmetros fornecidos
 * @return array
 */
function geraMatrizRandomica(){
    echo "Número de linhas: ";
    $numLinhas = readline();
    
    echo "Número de colunas: ";
    $numColunas = readline();
    
    $matriz = array();
        
    for ($i=0; $i < $numLinhas; $i++){
        array_push($matriz, array()); //inserindo um array vazio no final da matriz
        for ($j=0; $j < $numColunas; $j++){
            array_push($matriz[$i], rand(0,9)); //inserindo um valor no final da linha i da matriz
        }
    }
    
    return $matriz;
}


/**
 * Método que desenha matriz na tela 
 * @param array $matriz
 */
function desenhaMatriz($matriz){
    
    /** @var $linha array */
    foreach ($matriz as $linha) {
        vetorComMarcadoresInicioFim($linha,',','','');
    }
    
}



/**
 * Método que escreve da tela o vetor com o separador passado
 * 
 * @param array $vetor
 * @param string $separador
 */
function vetorComSeparador($vetor, $separador){

	$tamVetor = count($vetor);

	for ($ind=0; $ind<$tamVetor; $ind++){

		if ($ind == $tamVetor-1){
			//Imprime último elemento
			echo $vetor[$ind];	
		}
                else {
                    echo $vetor[$ind];
                    echo $separador;
                }
	}

}

//
/**
 * Método que escreve na tela um vetor com marcadores incial e final.
 * 
 * @param array $vetor
 * @param string $separador
 * @param string $marcadorInicio
 * @param string $marcadorFim
 */
function vetorComMarcadoresInicioFim($vetor, $separador, $marcadorInicio, $marcadorFim){
    
    echo "$marcadorInicio ";
    
    vetorComSeparador($vetor, $separador);

    echo " $marcadorFim";
    
    echo "\n";
    
}


/**
 * Função que a retorna a linha especificada de uma matriz
 * 
 * @param array $matriz
 * @param int $nlinha
 * @return array
 */
function retornaLinha($matriz, $nlinha){
    
    if (is_array($matriz)){
        
        if ( is_int($nlinha) ){
            
            $numLinhas = count($matriz);
            if ( ($nlinha >= 0) && ($nlinha < $numLinhas) ){
                return $matriz[$nlinha];
            }        
            else{
                echo "Número da linha fora do limite da matriz.\n";                
            }            
        }
        else{
            echo "Valor fornecido \"" . $nlinha . "\" não é um número inteiro.";            
        }          
    }
    else
    {echo "Parâmetro não é uma matriz.\n";}    
    
}


/**
 * Função que retorna a coluna em uma matriz.
 * @param array $matriz
 * @param int $nColuna
 */
function retornaColuna($matriz, $nColuna){

    //verificando se o parâmetro passado é um vetor
    if (!is_array($matriz)){
        echo "Parâmetro não é uma matriz.\n";
        return ;
    }
    //Verificando se o parâmentro é numérico e maior que 0
    if (!is_numeric($nColuna) || ($nColuna <= 0) ){
            echo "Valor fornecido \"" . $nColuna . "\" não é um número inteiro.";            
            return ;
    }

    $vetColuna = array();
    /** @var $linha array */
    foreach ($matriz as $linha) {

        //verifica se a coluna buscada está dentro dos limites do array linha
        if ($nColuna <= count($linha)) {
            array_push($vetColuna, $linha[$nColuna-1]); //inserindo elemento no final do vetor
        }
    }

    return $vetColuna;
        
}            


/**
 *  Função que retorna a transposta da matriz
 * @param array $matriz
 */
function retornaMatrizTransposta($matriz){
    
    //Verifica se o parâmetro é um array
    if (!is_array($matriz)){
        echo "Parâmetro não é uma matriz.\n";
        return null;
    }
    else{
        
        $transposta = array();
        $numColunasMatriz = count($matriz[0]);
        
        for ($col=1; $col<=$numColunasMatriz; $col++){
            array_push($transposta, retornaColuna($matriz, $col));
        }
        return $transposta;
    }
}

/**
 *  Função que insere elementos dinamicamente em um array com o limitador de linha especificado
 * @param char $limitador
 */
function insereElementosDinamicamenteVetor($limitador){

    $ind = 0;
    
    do{
        echo "Digite elemento: ";
        $elem = readline();
        
        $vetor[$ind] = $limitador.$elem.$limitador;
        
        $ind++;

        echo "Inserir outro elemento (s/n): ";
        $resposta = strtolower(readline());

    } while ($resposta == 's' );    
    
    return $vetor;
    
}

/**
 * Função que retorna o tamanho do elemento com maior número de caracteres num array
 * 
 * @param array $vetor
 */
function tamanhoMaiorElementoArray($vetor){
    
    //Cria um vetor com o tamanho dos elementos do vetor passado
    $vetTamanhoElementos = array_map('strlen',$vetor);
    
    return max($vetTamanhoElementos);
}

/**
 * Função que normaliza todos os elementos de um array, de forma que todos possuam o mesmo número de caracteres.
 * A função preenche cada elemento com espaços em branco até o tamanho passado.
 * 
 * @param array $vetor
 * @param int $tamanho
 */
function normalizaElementosArray($vetor, $tamanho){
    
    $tamVetor = count($vetor);
    $vetorNormalizado = array();
    
    //percorrendo o array
    for ($i=0; $i<$tamVetor; $i++){
        
        $espacos = str_repeat(" ", $tamanho - strlen($vetor[$i]));
        array_push($vetorNormalizado, '|' . $vetor[$i] . $espacos . '|');
            
    }
    
    return $vetorNormalizado;
}


/**
 * Método que imprime um vetor na vertical, com ou sem separador entre os elementos
 * 
 * @param array $vetor
 */
function imprimeVetorVertical($vetor){
    
    echo "\nSeparar elementos? (s/n)";
    $comSeparador = strtolower(readline());
    
    //Verifica se vai imprimir elementos com ou sem separador
    if ($comSeparador != 's'){
        //Desenha o vetor na tela sem separador entre elementos
        vetorComSeparador($vetor, "\n");        
    }
    else{ //imprimir elementos com separador
        echo "\nSeparador: ";
        $separador = readline("Separador: \n");
        echo "\n";
               
        //Desenha o vetor na tela com separador especificado entre elementos
        vetorComSeparador($vetor, "\n".str_repeat($separador,$tamMaiorElem)."\n");
    }
}

/**
 * Método que impime na tela um caracter repetido de acordo com o quantidade de caracteres fornecida
 * 
 * @param string $caractere
 * @param int $quantidade
 */
function repetirCaracter($caractere, $quantidade){
    
    //Verifica se o caráter não é nulo
    if ( ($caractere == null) || ($quantidade <= 0) ){
        echo "Parâmetros incorretos.\n";
        echo "Caractere: " . $caractere . "\n";
        echo "Número de repetições: " . $quantidade . "\n";
        exit();
    }
    //Verifica se o caracter é uma string de tamanho 1
    if (strlen($caractere) > 1){
        echo "Informar apenas um caractere como delimitador.";
        exit();   
    }

    //Imprime delimitador inicial do vetor vertical
    echo str_repeat($caractere,$quantidade);
    echo "\n";
}    

