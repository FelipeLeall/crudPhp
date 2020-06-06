<?php
// Acessando os dados do banco
include_once './acao/conexcao_db.php';
if(isset($_GET['id'])):
    $id =   mysqli_escape_string($connect,$_GET['id']);

    $sql = "SELECT * FROM cadastrar Where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>

<body style="background-color: black;">

    <div class="container-fluid">
        <div class="row align-self-center justify-content-center">

            <!-- Formulario -->
            <div class="col-3" id="estiloForm">

                <h3 class="text-center">Alterar Cadastro</h3>
                
                <br>

                <!-- Formulario para Atualizar cadastro -->
                <form action="./acao/atualizar.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $dados['id'];?>">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" name="nome" value="<?php echo $dados['nome'];?>">
                    </div>

                    <div class="form-group">
                        <label for="nascimento">Data de nascimento</label>
                        <input type="date" class="form-control" name="nascimento" value="<?php echo $dados['nascimento'];?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $dados['email'];?>">
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input class="form-control" name="celular" value="<?php echo $dados['celular'];?>">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input class="form-control" name="endereco" value="<?php echo $dados['endereco'];?>">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="btn_alterar">Alterar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>