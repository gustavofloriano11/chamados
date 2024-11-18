<?php

    include "../db.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $query = $conn->query("INSERT INTO cliente (nome, email, telefone)
        VALUES ('$nome', '$email', '$telefone')");

        if($query === TRUE){
            echo "Dados Enviados!";
            header('Location: ../../frontend/index.html');
        }

    }