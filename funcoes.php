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
        vetorComMarcadoresInicioFim($linha,'|','','');
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
 * Função que retorna o número de colunas existentes numa matriz
 * 
 * @param array $matriz
 */
function retornarNumColunasMatriz($matriz){
    
    $numColunas = 0;
    
    //Percorre cada linha da matriz e conta o número de colunas. 
    foreach ($matriz as $linha){
        
        $numColunasNaLinha = count($linha);
        if ( $numColunasNaLinha > $numColunas ){
            $numColunas = $numColunasNaLinha;
        }
    }
    
    return $numColunas;
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
        //$numColunasMatriz = count($matriz[0]);
        $numColunasMatriz = retornarNumColunasMatriz($matriz);
        
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
function insereElementosDinamicamenteVetor($limitador = ''){

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
 * Função que insere elementos dinamicamente na matriz.
 * Retorna matriz criada.
 */
function criarMatrizDinamicamente(){
    echo "INSERIR ELEMENTOS NA MATRIZ\n";
    
    echo "Defina o número de linhas: ";
    $numLinhasMat = readline();
    
    $matriz = array();
    
    //Utilizando a função que insere elementos dinamicamente no vetor para inserir na matriz.
    //Cada vetor criado corresponde a uma linha na matriz.
    for ($i=0; $i<$numLinhasMat; $i++){
        $numLinha = $i+1;
        
        echo "========\n";
        echo "Linha " . $numLinha . ":\n";
        echo "========\n";
        
        //Insere vetor digitado na matriz
        array_push($matriz,insereElementosDinamicamenteVetor());
        
        echo "\n";
    }
    
    return $matriz;
}

/**
 * Função que calcula o número de colunas máximo da matriz e completa as linhas que não possuam este número máximo de colunas
 * 
 * @param array $matriz
 */
function completarMatriz($matriz){
    
    //calcula número de colunas em cada linha da matriz e grava num vetor
    $vetorNumColunasCadaLinha = array_map('count',$matriz);
    
    //calcula o número máximo de colunas na matriz, que é dado pela linha com maior número de colunas
    $numColMaxMatriz = max($vetorNumColunasCadaLinha);
    
    //percorre cada linha da matriz e completa suas colunas até atingir o número máximo de colunas na matriz
    foreach ($matriz as $linha){
        
        $numColLinha = count($linha);
        
        if ( $numColLinha < $numColMaxMatriz ){
            
            //PAREI AQUI!!!!!!!
            $linha = array_fill();
            
        }
        
    }
    
}


/**
 * Função que alinha elementos das linhas da matriz e retorna uma matriz com as linhas alinhadas. Se todos os elementos da 
 * linha forem numéricos, estes serão alinhados à direita.Se pelo menos um elemento for texto, então todos os elementos da 
 * linha serão alinhados à esquerda. 
 * 
 * @param array $matriz
 */
function retornarMatrizComLinhasAlinhadas($matriz){

    $matrizAlinhada = array();

    foreach ($matriz as $linhaMat){

        //Calcula o tamanho do maior elemento na linha da matriz
        $tamMaiorElemLinha = tamanhoMaiorElementoArray($linhaMat);

        //Verifica se todos os elementos da linha são numéricos
        if ( verificarVetorNumerico($linhaMat) ){

            //Todos elementos são numéricos. Então, alinhamento à direita.
            $vetorAlinhado = normalizaElementosArray($linhaMat, $tamMaiorElemLinha,'d');

        }
        else{
            //Pelo menos um elemento não é numérico. Então, alinhamento à esquerda.
            $vetorAlinhado = normalizaElementosArray($linhaMat, $tamMaiorElemLinha,'e');

        }

        array_push($matrizAlinhada,$vetorAlinhado);
    }
    
    return $matrizAlinhada;
    
}

/**
 * Função que verifica se todos os elementos de um vetor são numéricos.
 * Retorna true se todos forem numéricos. E retorna false caso pelo menos um dos elementos do vetor não seja numérico.
 * 
 * @param array $vetor
 */
function verificarVetorNumerico($vetor){
    
    //Verifica cada elemento vetor
    foreach ($vetor as $elemento){
        
        if ( !(is_numeric($elemento)) ){
            return false;
        }
    }
    return true;
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
 * Retorna um vetor normalizado.
 * 
 * @param array $vetor
 * @param int $tamanho
 * @param string $alinhamento
 */
function normalizaElementosArray($vetor, $tamanho, $alinhamento = ''){
    
    $tamVetor = count($vetor);
    $vetorNormalizado = array();
    
    //percorrendo o array
    for ($i=0; $i<$tamVetor; $i++){

        $espacos = str_repeat(" ", $tamanho - strlen($vetor[$i]));
        
        //Verifica o alinhamento fornecido
        if ($alinhamento == 'd'){
            //alinha elemento à direita
            array_push($vetorNormalizado, $espacos . $vetor[$i] );
        }
        elseif ($alinhamento == 'e'){
            //alinha elemento à esquerda
            array_push($vetorNormalizado, $vetor[$i] . $espacos );
        }
    }
    
    return $vetorNormalizado;
}


/**
 * Método que imprime um vetor na vertical, com ou sem separador entre os elementos. 
 * O separador é formado pelo número de repetições fornecido.
 * 
 * @param array $vetor
 * @param string $separador
 * @param integer $numRepeticoesSeparador
 */
function imprimeVetorVertical($vetor,$separador = '',$numRepeticoesSeparador = 0){
    
    //Verifica se a variável passada é um array
    if ( !is_array($vetor)){
        echo "ERRO - imprimeVetorVertical - Parâmetro não é um array.";
        exit();
    }
    
    //Verifica se vai imprimir elementos com ou sem separador
    if ($separador != ''){
        //Desenha o vetor na tela com separador especificado entre elementos
        vetorComSeparador($vetor, "\n".str_repeat($separador,$numRepeticoesSeparador)."\n");
    }
    else{ 
        //Desenha o vetor na tela sem separador entre elementos
        vetorComSeparador($vetor, "\n");        
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
        echo "ERRO - repetirCaracter - Parâmetros incorretos.\n";
        echo "ERRO - repetirCaracter - Caractere: " . $caractere . "\n";
        echo "ERRO - repetirCaracter - Número de repetições: " . $quantidade . "\n";
        exit();
    }
    //Verifica se o caracter é uma string de tamanho 1
    if (strlen($caractere) > 1){
        echo "ERRO - repetirCaracter - Informar apenas um caractere como delimitador.";
        exit();   
    }

    //Imprime delimitador inicial do vetor vertical
    return str_repeat($caractere,$quantidade);
    
}    




