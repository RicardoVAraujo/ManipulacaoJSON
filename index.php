<?php

$json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");

$json = json_decode($json);

$obj = new stdClass();
$obj->codigo = 111;
$obj->cidade = "São Paulo";
$obj->uf = "SP";
$obj->baixa = 01;
$obj->alta = 02;
$obj->ico = 2;
$obj->frase = "olá";
$obj->data = "05/07/2016";
$obj->dia_mes = "Janeiro";
$obj->dia_semana = "Alguma";
$obj->selecionada = 1;

$json->previsao[] = $obj;

echo "Cidade retornadas: ".count($json->previsao)."<br/>";

foreach ($json->previsao as $item){
    echo "Cidade: ".$item->cidade." - Baixa: ".$item->baixa. " - Alta: ".$item->alta ."- Frase: ".$item->frase."<br/>";
    
}
//retorna o que foi adicionado em json
//echo json_encode($json);

?>