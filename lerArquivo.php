<?php
// Lê o arquivo
$linhas = file('agrotoxico.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

const MINLATIN = 'á,à,â,ã,ä,é,è,ê,ë,í,ì,î,ï,ó,ò,õ,ô,ö,ú,ù,û,ü,ç,ñ,°,",\'';
const MAXLATIN = 'Á,À,Â,Ã,Ä,É,È,Ê,Ë,Í,Ì,Î,Ï,Ó,Ò,Õ,Ô,Ö,Ú,Ù,Û,Ü,Ç,Ñ,°,",\'';
const TRANSLATIN = 'a,a,a,a,a,e,e,e,e,i,i,i,i,o,o,o,o,o,u,u,u,u,c,n';

function trans($valor){
    $str = str_replace(explode(',', MINLATIN), explode(',', TRANSLATIN), $valor);
    $str = str_replace(explode(',', MAXLATIN), explode(',', TRANSLATIN), $str);
    return $str;
}

if ($linhas === false) {
    die('Não foi possível ler o arquivo.');
}

$arrayPalavras = [];
foreach ($linhas as $key => $value) {
    $semNada = $value;
    $value = strtoupper(trans($value));
    $value = str_replace(' ', '_', $value);
    $value = $value;
    $arrayPalavras[$key] = $value . ' => ' . $semNada;
}

// Escreve os valores únicos em um novo arquivo
$nomeArquivoSaida = 'resultado.txt';
if (file_put_contents($nomeArquivoSaida, implode(PHP_EOL, $arrayPalavras))) {
    echo "Os valores únicos foram gravados no arquivo $nomeArquivoSaida com sucesso.";
} else {
    echo "Erro ao gravar os valores únicos no arquivo.";
}
?>