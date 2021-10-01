<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Avaliação diagnóstica</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <?php 
      $pesquisa = $_POST["busca"] ?? '';
      include "conexao.php";
      $sql = "SELECT * FROM questoes_extra WHERE conhecimento LIKE '%$pesquisa%' ";
      $dados = mysqli_query($conn,$sql);
    ?>


    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pesquisa de exercícios extra</h1>
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action = "pesquisa_extra.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Digite conhecimento" aria-label="Search" name ="busca" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
           </nav> 
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">materia</th>
                <th scope="col">professor</th>
                <th scope="col">conhecimento</th>
                <th scope="col">enunciado</th>
                <th scope="col">gabarito</th>
                <th scope="col">ações</th>

              </tr>
            </thead>
            <tbody>
              <?php 
                while ($linha = mysqli_fetch_assoc($dados)) {
                  $id = $linha['id'];
                  $materia = $linha['materia'];
                  $professor = $linha['professor'];
                  $conhecimento = $linha['conhecimento'];
                  $enunciado = $linha['enunciado'];
                  $gabarito = $linha['gabarito'];

                  echo "<tr>
                          <th scope='row'>$id</th>
                          <td>$materia</td>
                          <td>$professor</td>
                          <td>$conhecimento</td>
                          <td>$enunciado</td>
                          <td>$gabarito</td>
                          <td width = 150px>
                            <a href='cadastro_extra_edit.php?ident=$id' class='btn btn-success btn-sm'>Editar</a>
                            <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modal_confirma'>Excluir</a>
                        </tr>";
                }
              ?>

            </tbody>
          </table>
        </div>


        <a class="btn btn-primary btn-lg" href="index.php" role="button">Voltar</a>

        <!-- Modal -->
        <div class="modal fade" id="modal_confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form action = "excluir_extra_script.php" method="POST">
                <p>Deseja realmente excluir a questão?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                  <input type="submit" class="btn btn-danger">Sim</button>
                </div>
              </form>  
            </div>
          </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>