<?php
// Conectar com o banco de dados
include './acao/conexcao_db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>

<body style="background-color: black;">

    <div class="container-fluid">
        <div class="row align-self-center justify-content-center">

            <!-- Formulario -->
            <div class="col-3" id="estiloForm">

                <h3 class="text-center">Realizar Cadastro</h3>
                <br>

                <form action="acao/registrar.php" method="POST">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="nascimento">Data de nascimento</label>
                        <input type="date" class="form-control" name="nascimento">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input class="form-control" name="celular">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input class="form-control" name="endereco">
                    </div>

                    <button type="submit" class="btn btn-success btn-lg btn-block" name="btn_registrar">Cadastrar</button>
                </form>
            </div>

            <!-- Diva para facilitar separação por meio da grid -->
            <div class="col-1"></div>

            <!-- Listagem -->
            <div class="col-6 justify-content-center" id="listagem">
                <h3 class="text-center">Listagem</h3>
                <br>

                <!-- Começar a Listar usando o while -->
                <?php
                $sql = "SELECT * FROM cadastrar";
                $resultado = mysqli_query($connect, $sql);
                while ($dados =  mysqli_fetch_array($resultado)) :
                ?>

                    <div class="row align-self-center justify-content-center" id="listaPessoa">

                        <div class="col-9">
                            <p><strong>Nome:</strong>
                                <?echo $dados['nome'];?>
                            </p>
                            <p><strong>Data de nascimento:</strong>
                                <?echo $dados['nascimento'];?>
                            </p>
                            <p><strong>Email:</strong>
                                <?echo $dados['email'];?>
                            </p>
                            <p><strong>Celular:</strong>
                                <?echo $dados['celular'];?>
                            </p>
                            <p><strong>Endereço:</strong>
                                <?echo $dados['endereco'];?>
                            </p>
                        </div>

                        <div class="col-3">
                            <br><br><br><br><br><br>
                            <form action="./acao/excluir.php" method="POST">
                                <!-- Alterar Registro -->
                                <a href="alterar.php?id=<?php echo $dados['id'] ?>" type="submit" class="btn btn-primary btn-sm">Alterar</a>

                                <!-- Deletar Registro -->
                                <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm" name="btn_excluir">Excluir</button>
                            </form>

                        </div>


                    </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>