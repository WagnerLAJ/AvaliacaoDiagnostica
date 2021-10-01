<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Exclusão de cadastro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
        ini_set('default_charset','UTF-8');
        include "conexao.php";
          $id = $_POST['id'];

          
          $sql = "DELETE from `questoes_extra` WHERE id = $id";

          if(mysqli_query($conn,$sql)){
            echo "Questão deletada com sucesso";
          } else
            echo "Falha na exclusão da questão";
        ?>
      </div>
    </div>  
       
  </body>
</html>