<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <div class="row">
            <?php
            include "conexao.php";
            
            //include serve pra pegar os codigos de outro index e colocar aki como esse vai mandar as infromações pro Banco de dados
            $id = $_POST['id'];
            $nome = $_POST['nome'];
           
            //nome das tabelas do Db banco de dados
            
            $sql = "DELETE From  `pessoas`WHERE cod_pessoa = $id";
              //set ele vai pegar e atualizar eu acho pesquise seu animal
            //UPDATE vai atualizarINTO pega todos os dados e manda para o banco de dados ficando por la 
            if (mysqli_query($conn,$sql)){
                mensagem("$nome Deletado com sucesso" , 'success' );
            }else{
              mensagem("$nome não Excluido", 'danger' );
            }
            //Just A test

            ?>
            <a href="index.php" class="btn btn-primary">Voltar</a>

        </div>
     </div>