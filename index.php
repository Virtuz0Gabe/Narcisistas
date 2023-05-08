<?php 

function main ()
{
    $Valor_Digitado = readline("Digite um valor: \n");
    
    $digitos = str_split($Valor_Digitado); // retorna um array de cada item da variável, o valor retornado é em string
    if (isNegative($digitos))
    {
        $digitos = isNegative($digitos);
        
    }else{     
        $digitos = array_map('intval', $digitos); // trasnforma o array string em array int
        $Valor_Digitado = intval($Valor_Digitado); //trasnforma o valor que foi digitado em INT
    }
    
    
    echo Verify_num($digitos, $Valor_Digitado) . "\n\n";
    echo "";
    $temp = readline("Deseja tentar outra vez?  [1]-SIM  [0]-NÃO: ");
    if ($temp == 1)
    {
        main();
    }
}

function isNegative($digitos)
{
    if ($digitos[0] == "-")
    {
        $digitos = array_map('intval', $digitos);
        array_shift($digitos);
        $limit = count($digitos);
        for ($i=0; $i < $limit; $i++)
        {
        $digitos[$i] = ($digitos[$i] * -1);
        }
        return $digitos;
    }else{
        return false;
    }
}



// Função que vai efetuar o calculo do número narcisista
function Calculador ($num)
{
    $resultado = 0;
    for ($i = 0; $i < count($num); $i++)
    {   
        $resultado += ($num[$i] ** count($num)); 
    }
    $resultado = intval($resultado);
    return $resultado;
}



// Verifica se o valor digitado é o mesmo que a resposta do seu cálculo
function Verify_num($num, $Valor_Digitado)
{   
    if (Calculador($num) == $Valor_Digitado)
    {
        return "O número digitado é Narcisista.";
    }else{
        return "O número digitado não é Narcisista";
    }
}

main();

?>