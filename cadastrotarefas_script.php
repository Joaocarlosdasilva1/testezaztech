<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Cadastro de Tarefas</title>
</head>
<body>
    <div class="container">
        <div class ="row">
            <?php
                include "conexao.php";
                $descricao       = $_POST['descricao'];
                foreach($_POST["prioridade"] AS $index => $prioridade) {                  
                }
                foreach($_POST["estado"] AS $index => $estado) {
                }
                
                $sql = "INSERT INTO tarefas(descricao, prioridade, estado) VALUES ('$descricao', '$prioridade', '$estado')";

                if (mysqli_query($conn, $sql)) {
                    mensagem("Cadastrado com sucesso!", 'success');
                } else
                    mensagem("Não cadastrado!", 'danger');
                ?>
            <a href="cadastrotarefas.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
</body>
</html>