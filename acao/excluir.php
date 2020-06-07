<?php

require_once 'conexcao_db.php';

if(isset($_POST['btn_excluir'])):
    //Capturando o id da pessoa que desejamos excluir
    $id = mysqli_escape_string($connect, $_POST['id']);

    //Excluindo do banco de dados
    $sql = "DELETE FROM cadastrar WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?erro');
    endif;
endif;

?>


