<?php

require_once 'conexcao_db.php';

if(isset($_POST['btn_alterar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $nascimento = mysqli_escape_string($connect, $_POST['nascimento']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $id = mysqli_escape_string($connect, $_POST['id']);


    $sql = "UPDATE cadastrar SET nome = '$nome', nascimento = '$nascimento', email = '$email', celular = '$celular', endereco = '$endereco' WHERE id  = '$id'";

    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?erro');
    endif;
endif;

?>


