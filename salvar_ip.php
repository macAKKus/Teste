<?php
if (isset($_POST['ip'])) {
    $ip = $_POST['ip'];
    $logFile = 'ips_salvos.txt'; // Nome do arquivo onde o IP será salvo

    // Abre o arquivo para adicionar o IP
    $file = fopen($logFile, 'a');
    
    // Verifica se o arquivo foi aberto com sucesso
    if ($file) {
        fwrite($file, $ip . PHP_EOL); // Adiciona o IP seguido de uma nova linha
        fclose($file); // Fecha o arquivo
        echo "IP {$ip} salvo com sucesso!";
    } else {
        echo "Erro ao salvar o IP.";
    }
} else {
    echo "IP não fornecido.";
}
?>