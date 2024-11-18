<?php 

    include "../backend/db.php";

    $query_cliente = $conn->query("SELECT id, nome FROM cliente");

    $row_cliente = $query_cliente->fetch_assoc();

    $query_colaborador = $conn->query("SELECT id, nome FROM colaborador");

    $row_colaborador = $query_colaborador->fetch_assoc();
    
?>


<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir Chamado</title>
</head>
<body>
    <h2>Insira os Dados do Problema:</h2>
    <form method="POST" action="../backend/create/create_chamado.php">
        <label name="nome">Cliente:</label>
        <select>
            <?php if($query_cliente -> num_rows > 0){ ?>
                <?php while($row_cliente = $query_cliente->fetch_assoc()){
                    ?> <option><?php echo $row_cliente['id']; echo '- '; echo $row_cliente['nome']?></option>
<?php           }?>
<?php       }?>
            
        </select>
        <br>
        <br>
        <label name="descricao">Descrição do Problema:</label>
        <textarea for="descricao"></textarea>
        <br>
        <br>
        <label name="criticidade">Criticidade:</label>
        <select for="criticidade">
            <option>Selecione uma Opção</option>
            <option>Baixa</option>
            <option>Média</option>
            <option>Alta</option>
        </select>
        <br>
        <br>
        <label name="status">Status:</label>
        <select for="status">
            <option>Selecione uma Opção</option>
            <option>Aberto</option>
            <option>Em Andamento</option>
            <option>Fechado</option>
        </select>
        <br>
        <br>
        <label name="descricao">Colaborador:</label>
        <select>
            <option><?php echo $row_colaborador['id']; echo '- '; echo $row_colaborador['nome']?></option>
        </select>
        <br>
        <br>
        <label name="data">Data de Abertura:</label>
        <input type="date" for="data">
        <br>
        <br>
        <button>Enviar</button>
    </form>
    <p>*Caso seja o primeiro cadastro, não é necessário o código do colaborador.</p>
</body>
</html>