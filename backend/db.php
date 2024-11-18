<?php

    define("servername", "localhost");
    define("username", "root");
    define("password", "root");
    define("dbname", "chamados");

    $conn = new mysqli(servername, username, password, dbname);

    if($conn->connect_error){
        die("Ops! Algum erro aconteceu!");
    }
    