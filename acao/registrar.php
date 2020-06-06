<?php

require_once 'conexcao_db.php';

if(isset($_POST['btn_registrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $nascimento = mysqli_escape_string($connect, $_POST['nascimento']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);

    $sql = 'INSERT INTO cadastrar (nome, nascimento, email, celular, endereco)'
        ."VALUES('$nome','$nascimento','$email','$celular','$endereco')";

    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?erro');
    endif;
endif;
?>
