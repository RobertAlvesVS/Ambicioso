<?php
// Caminho para o arquivo HTML

$arquivo_txt = 'C:\Users\ContatoEAS\Downloads\SERVIDORES.txt';

// Abre o arquivo para leitura
$arquivo = fopen($arquivo_txt, "r");

$servidores = [
    "id" => [],
    "nome" => [],
    "ip" => [],
    "endereco" => [],
    "echat" => [],
    "att" => [],
    "corr" => []
];
$contador = 0;
$cont = 2;
// Verifica se o arquivo foi aberto corretamente
if ($arquivo) {
    // Loop através das linhas do arquivo

    while (($linha = fgets($arquivo)) !== false) {
        $linha = trim($linha);

        if ($contador < 12) {
            $contador++;
            continue;
        }
        if (strpos($linha, "E-CHAT + VPN - AWS") !== false) {
            break;
        }



        if (is_numeric($linha)) {
            array_push($servidores["id"], $linha);
            $cont = 2;
        } elseif (empty($linha)) {
            continue;
        } else {
            switch ($cont) {
                case 2:
                    array_push($servidores["nome"], $linha);
                    $cont++;
                    break;

                case 3:
                    if (strlen($linha) <= 15 && substr_count($linha, ".") === 3) {
                        array_push($servidores["ip"], $linha);
                        $cont++;
                        break;
                    }
                    
                case 4:
                    if (strlen($linha) >= 16) {
                        array_push($servidores["endereco"], $linha);
                        $cont++;
                        break;
                    }
                    
                case 5:
                    if ($linha == "SIM" || $linha == "NÃO") {
                        array_push($servidores["echat"], $linha);
                        $cont++;
                        break;
                    }
                    

                case 6:
                    array_push($servidores["att"], $linha);
                    $cont++;
                    break;

                case 7:
                    array_push($servidores["corr"], $linha);
                    $cont++;
                    break;
                default:
                    echo "deu Ruim brother";
                    break;
            }
        }
    }

    // Fecha o arquivo após a leitura
    fclose($arquivo);

    foreach ($servidores['id'] as $indice => $id) {
        echo "ID: $id<br>";
        echo "Nome: {$servidores['nome'][$indice]}<br>";
        echo "IP: {$servidores['ip'][$indice]}<br>";
        echo "Endereço: {$servidores['endereco'][$indice]}<br>";
        echo "E-Chat: {$servidores['echat'][$indice]}<br>";
        echo "Atualização: {$servidores['att'][$indice]}<br>";
        echo "Correção: {$servidores['corr'][$indice]}<br>";
        echo "<br>";
    }
} else {
    // Se houver um erro ao abrir o arquivo
    echo "Não foi possível abrir o arquivo.";
}
/*
limpar as strings em brancos
excluir as strings em branco
Primeiro ver se é um numero mesmo
após, imprimir as linhas até a proxima confimação de numero

*/
