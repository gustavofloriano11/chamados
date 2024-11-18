<?php

    include "db.php";

    if(['REQUEST_METHOD'] === "POST"){
        $id_usuario = $_POST['id_usuario'];
        $name = $_POST['nome'];
        $descricao = $_POST['desricao'];
        $nivel = $_POST['criticidade'];
        $status = $_POST['status'];
        $id_colaborador = $_POST['id_colaborador'];

        $query = $conn->query("INSERT INTO chamado (descricao, criticidade, status_chamado, data_abertura, id_colaborador)
        VALUES ($id_usuario, '$name', '$descricao', '$nivel', '$status', $id_colaborador)");

        if($query === TRUE){
            echo "Dados Enviados!";
            header('Location: ../../frontend/index.html');
        }
    }