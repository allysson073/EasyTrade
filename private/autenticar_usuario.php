<?php
    session_start();

    $c = new Conexao();
    $conexao = $c->conectar();

    $query = '
    select login, senha
    from tb_usuarios
    where login = :login
    ';

    $stmt = $conexao->prepare($query);
    $stmt -> bindValue(':login', $_POST['login']);
    $stmt -> execute();

    $autenticador = $stmt -> fetchAll(PDO::FETCH_OBJ);

    if($autenticador != null){
        if($autenticador[0]->senha == $_POST['senha']){
            $_SESSION['autenticado'] = 'sim';
            header('location: tela_principal.php');
        } else {
            header('location: index.php?retorno=senha_invalida');
        }
    } else {
        header('location: index.php?retorno=login_invalido');
    }

?>