<?php 
        $host = 'localhost';
        $db = 'senai_aulaphp';
        $user = 'Felipe';
        $pass = '123456';
        $port = 3307; // Porta MySQL correta
        // Inclui o arquivo da classe Database que criamos para conectar dentro da pasta php
        require_once 'connection.php';
        // Cria uma instância da classe Database
        $database = new Database($host, $db, $user, $pass, $port);
        // Chama o método connect para estabelecer a conexão
        $database->connect();
        // Obtém a instância PDO para realizar consultas
        $pdo = $database->getConnection();

    $login = htmlspecialchars($_GET['login']);
    $senha = htmlspecialchars($_GET['senha']);

    // Verifica se a variável $pdo, que deve ser uma instância de PDO, está definida e é válida
    if ($pdo) {
        try {
            // Prepara uma consulta SQL para selecionar as colunas 'id' e 'nome' da tabela 'usuario'
            $stmt = $pdo->prepare("SELECT * from senai_aulaphp_1 where nome = '$login' and senha = '$senha'");
            
            // Executa a consulta preparada
            $stmt->execute();
            
            // Busca todos os resultados da consulta em um array associativo
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // Verifica se há algum resultado na consulta
            if ($resultados) {
                echo("Logado!");
            } else {
                echo ("Login ou senha não encontrados.");
            }
        } catch (PDOException $e) {
            // Captura e exibe qualquer exceção (erro) que possa ocorrer durante a consulta ao banco de dados
            echo "Erro ao consultar o banco de dados: " . $e->getMessage() . "<br>";
        }
    }
?>