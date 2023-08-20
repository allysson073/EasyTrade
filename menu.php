<?php
    session_start();

    if(!isset($_SESSION['autenticado'])){
        header('location: index.php');
    }
?>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTrade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

  <body>

    <div class="container mt-2 h-25" style="border: 1px solid red">
        <div class="row h-75">
          <div class="col-8"> Logo </div>
          <div class="col-4"> Nome do usuario </div>
        </div>

        <div class="row h-25">
          <div>
            <ul class="nav">
              <li class="nav-item">
                <a href="" class="nav-link"> Dashboard </a>
              </li>
            </ul>
          </div>
        </div>
    </div>

  </body>
</html>