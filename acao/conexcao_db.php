<?php
$connect = mysqli_connect('localhost', 'root', '', 'db_cadastro_de_pessoas');

if(mysqli_connect_error()):
    echo "Erro na conexão".mysqli_connect_error();
endif;

?>
