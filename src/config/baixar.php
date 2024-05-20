<?php
// Caminho para o arquivo .txt
$arquivo = 'C:\Users\rober\Downloads\SERVIDORES.txt';

// Abre o arquivo para leitura
$arquivo = fopen($arquivo, "r");

// Lê o arquivo linha por linha e imprime cada linha
if ($arquivo) {
    while (($linha = fgets($arquivo)) !== false) {
        
        // echo var_dump(trim($linha));

        if (intval($linha) != 0) {
            echo $linha . "<br>";
            while (($linha = fgets($arquivo)) !== false) {
                echo $linha;
                echo "<BR>";
            }
        }
        
    }

    // Fecha o arquivo
    fclose($arquivo);
} else {
    // Trata caso não seja possível abrir o arquivo
    echo "Não foi possível abrir o arquivo.";
}

?>