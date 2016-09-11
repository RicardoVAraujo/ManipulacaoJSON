<?php

$json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");
// para ver se funcionou
//echo $json;
//transforma em array
$json = json_decode($json);
echo "Cidade retornadas: ".count($json->previsao)."<br/>";

foreach ($json->previsao as $item){
    echo "Cidade: ".$item->cidade." - Baixa: ".$item->baixa. " - Alta: ".$item->alta ."- Frase: ".$item->frase."<br/>";
    
}

?>
