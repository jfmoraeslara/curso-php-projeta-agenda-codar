<?php

    $host = "localhost: 3307";
    $dbname = "agenda";
    $user = "root";
    $pass = ""; // digite sua senha

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Ativar modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        // erro na conexão
        $erro = $e->getMessage();
        echo "Erro: $erro";
    }
    
?>