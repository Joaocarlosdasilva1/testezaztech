<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Pesquisa de Tarefas</title>
</head>
<body>
    <?php
        $pesquisa = $_POST['busca'] ?? '';
        include "conexao.php";
        $sql = "SELECT * FROM tarefas WHERE descricao LIKE '%$pesquisa%'";
        $dados = mysqli_query($conn, $sql);
    ?>   

    <div class="container">
        <div class ="row">
            <div class ="col">
                <h1>Pesquisar</h1>  
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisatarefas.php" method="POST">
                            <input class="form-control me-2" type="search" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>   
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Descrição</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Prioridade</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($linha = mysqli_fetch_assoc($dados) ) {
                            $cod_tarefa = $linha ['cod_tarefa'];
                            $descricao = $linha ['descricao'];
                            $estado = $linha ['estado'];    
                            $prioridade = $linha ['prioridade'];
                            

                            echo"<tr>
                                    <th scope='row'>$descricao</th>
                                    <td>$estado</td>
                                    <td>$prioridade</td>
                                    <td width = 150px>
                                        <a href='tarefas_edit.php?id=$cod_tarefa' class='btn btn-success btn-sm'>Editar</a>
                                        <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                                        onclick=" .'"' ."pegar_dados($cod_tarefa, '$descricao')" .'"' .">Excluir</a>
                                    </td>
                                </tr>";
                        }

                    ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="excluirtarefas_script.php" method="POST">
           <p>Deseja realmente excluir <b id="descricao"></b>?</p>           
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
              <input type="hidden" name="descricao" id="descricao" value="">
              <input type="hidden" name="id" id="cod_tarefa" value="">
              <input type="submit" class="btn btn-danger" value="Sim">
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        function pegar_dados(id,descricao){
            document.getElementById('descricao').innerHTML = descricao;
            document.getElementById('cod_tarefa').value = id;
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>