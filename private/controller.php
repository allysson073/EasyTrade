<?php

    require "conexao.php";

    $acao = $_GET['acao'];

    if($acao == 'autenticar_usuario'){
        require "autenticar_usuario.php";
        require "usuarios.php";
    }

?>