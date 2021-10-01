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
      include "conexao.php";
      $id = $_GET ['ident'] ?? '';
      $sql = "SELECT * FROM questoes_extra WHERE id = $id";
      $dados = mysqli_query($conn,$sql);
      $linha = mysqli_fetch_assoc($dados);
//      $id = $linha['id'];
//      $materia = $linha['materia'];
//      $professor = $linha['professor'];
//      $conhecimento = $linha['conhecimento'];
//      $enunciado = $linha['enunciado'];
//      $gabarito = $linha['gabarito'];


    ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Edição do cadastro</h1>
          <form action="edit_extra_script.php" method="POST">
            <div class="mb-3">
              <label for="materia" class="form-label">Matéria</label>
              <input type="text" class="form-control" name="materia" value= "<?php echo $linha['materia']; ?>">
              <div id="materiaHelp" class="form-text">Ex: Português, Matemática...</div>
            </div>

            <div class="mb-3">
              <label for="professor" class="form-label">Professor</label>
              <input type="text" class="form-control" name="professor" value= "<?php echo $linha['professor']; ?>">
              <div id="professorHelp" class="form-text">Nome do professor.</div>
            </div>

            <div class="mb-3">
              <label for="conhecimento" class="form-label">Conhecimento avaliado</label>
              <input type="text" class="form-control" name="conhecimento" value= "<?php echo $linha['conhecimento']; ?>">
              <div id="conhecimentoHelp" class="form-text">Ex: Divisão, problemas, interpretação, gramática...</div>
            </div>

            <div class="mb-3">
              <label for="enunciado" class="form-label">Enunciado da questão</label>
              <input type="text" class="form-control" name="enunciado" value= "<?php echo $linha['enunciado']; ?>">
            </div>

            <div class="mb-3">
              <label for="gabarito" class="form-label">Resposta correta</label>
              <input type="text" class="form-control"  name="gabarito" value= "<?php echo $linha['gabarito']; ?>">
            </div>

            <div class="mb-3">
              <label for="distrator1" class="form-label">Distrator 1</label>
              <input type="text" class="form-control" name="distrator1" value= "<?php echo $linha['distrator1']; ?>">
            </div>

            <div class="mb-3">
              <label for="distrator2" class="form-label">Distrator 2</label>
              <input type="text" class="form-control" name="distrator2" value= "<?php echo $linha['distrator2']; ?>">
            </div>

            <div class="mb-3">
              <label for="distrator3" class="form-label">Distrator 3</label>
              <input type="text" class="form-control" name="distrator3" value= "<?php echo $linha['distrator3']; ?>">
            </div>

            <div class="mb-3">
              <label for="distrator4" class="form-label">Distrator 4</label>
              <input type="text" class="form-control" name="distrator4" value= "<?php echo $linha['distrator4']; ?>">
            </div>

            <div class="mb-3">
              <input type="submit" class="btn btn-success" value = "Salvar edição">
              <input type="hidden" name = "id" value = "<?php echo $linha['id']; ?>">
            </div>
            <a class="btn btn-primary btn-lg" href="pesquisa_extra.php" role="button">Voltar</a>
          </form>
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