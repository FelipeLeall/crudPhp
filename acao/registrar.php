<?php

require_once 'conexcao_db.php';//conexção com o banco de dados


if(isset($_POST['btn_registrar']))://alocando os dados coletados em variaveis 
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $nascimento = mysqli_escape_string($connect, $_POST['nascimento']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);

    // Passando os valores para o banco de dados 
    $sql = 'INSERT INTO cadastrar (nome, nascimento, email, celular, endereco)'
        ."VALUES('$nome','$nascimento','$email','$celular','$endereco')";

    if(mysqli_query($connect, $sql))://Executa o algoritmo desta pagina e retorna ao index
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?erro');
    endif;
endif;
?>
