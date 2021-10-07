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
            <div class ="col">
                <h1>Cadastro de Tarefas</h1>  
                   <form action="cadastrotarefas_script.php" method="POST">
                    <div class="form-group">
                        <label for="Descricao">Descrição</label>  
                        <input type="text" class="form-control" name="descricao" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Estado">Estado</label>  
                        <div id="radioset">
                            <input type="radio" id="radio1" name="estado[]" value="pendente" checked="checked"><label for="radio1">Pendente</label>
                            <input type="radio" id="radio2" name="estado[]" value="em andamento"><label for="radio2">Em andamento</label>
                            <input type="radio" id="radio3" name="estado[]" value="concluido"><label for="radio3">Concluido</label>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="Estado">Prioridade</label>  
                        <div id="radioset">
                            <input type="radio" id="radio1" name="prioridade[]" value="baixa" checked="checked"><label for="radio1">Baixa</label>
                            <input type="radio" id="radio2" name="prioridade[]" value="media"><label for="radio2">Media</label>
                            <input type="radio" id="radio3" name="prioridade[]" value="alta"><label for="radio3">Alta</label>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
</body>
</html>