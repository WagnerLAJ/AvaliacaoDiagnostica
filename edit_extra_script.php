<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de cadastro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
        ini_set('default_charset','UTF-8');
        include "conexao.php";
          $id = $_POST['id'];
          $materia = $_POST['materia'];
          $professor = $_POST['professor'];
          $conhecimento = $_POST['conhecimento'];
          $enunciado = $_POST['enunciado'];
          $gabarito = $_POST['gabarito'];
          $distrator1 = $_POST['distrator1'];
          $distrator2 = $_POST['distrator2'];
          $distrator3 = $_POST['distrator3'];
          $distrator4 = $_POST['distrator4'];

          //$sql = "INSERT INTO `questoes_extra`(`materia`, `professor`, `conhecimento`, `enunciado`, `gabarito`, `distrator1`, `distrator2`, `distrator3`, `distrator4`) VALUES ('$materia','$professor','$conhecimento','$enunciado','$gabarito','$distrator1','$distrator2','$distrator3','$distrator3')";
          
          $sql = "UPDATE `questoes_extra` SET `materia`='$materia', `professor`='$professor', `conhecimento`='$conhecimento', `enunciado`='$enunciado', `gabarito`='$gabarito', `distrator1`='$distrator1', `distrator2`='$distrator2', `distrator3`='$distrator3', `distrator4`='$distrator4' WHERE id = $id";

          if(mysqli_query($conn,$sql)){
            echo "$professor editou a questão com sucesso";
          } else
            echo "$professor houve falha na edição da questao";
        ?>
      </div>
    </div>  
       
  </body>
</html>