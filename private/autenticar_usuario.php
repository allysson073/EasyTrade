<?php
    session_start();

    $c = new Conexao();
    $conexao = $c->conectar();

    $query = '
    select login, senha, nome, sobrenome
    from tb_usuarios
    where login = :login
    ';

    $stmt = $conexao->prepare($query);
    $stmt -> bindValue(':login', $_POST['login']);
    $stmt -> execute();

    $autenticador = $stmt -> fetchAll(PDO::FETCH_OBJ);

    $nome = $autenticador[0]->nome . ' ' . $autenticador[0]->sobrenome;

    if($autenticador != null){
        if($autenticador[0]->senha == $_POST['senha']){
            $_SESSION['autenticado'] = 'sim';
            header('location: tela_principal.php?nome=' . $nome);
        } else {
            header('location: index.php?retorno=senha_invalida');
        }
    } else {
        header('location: index.php?retorno=login_invalido');
    }

?>