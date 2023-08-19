<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTrade</title>
  </head>

  <body>
    <div>
      <h1>EasyTrade</h1>
      <form method="post" action="controller.php?acao=autenticar_usuario">
        <div>
          <label for="login">Usuário:</label>
          <input type="text" name="login" required>
        </div>
        <div>
          <label for="senha">Senha:</label>
          <input type="password" name="senha" required>
        </div>

        <?php if(isset($_GET['retorno']) && $_GET['retorno'] == 'senha_invalida') {?>
          <div>
            <h5> Senha inválida </h5>
          </div>
        <?php } ?>

        <?php if(isset($_GET['retorno']) && $_GET['retorno'] == 'login_invalido') {?>
          <div>
            <h5> Login inválido </h5>
          </div>
        <?php } ?>

        <input type="submit" value="Entrar">
      </form>
    </div>
  </body>
</html>