<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programação Web - PHP</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- Meu style e script -->
  <script src="assets/js/script.js"></script>
  <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>

  <header class="p-5 bg-primary text-white text-center">
    <h1>Programação WEB</h1>
  </header>

  <div class="container fluid">
    <div class="row">
      <nav class="col-md-3 p-3">
        <br>
        <h2>meu menu</h2>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="?controller=site&action=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=site&action=products">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=site&action=contact">Contato</a>
          </li>
        </ul>
        <h3>Clientes</h3>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="?controller=client&action=register">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?controller=client&action=listClients">Listar</a>
          </li>
        </ul>
      </nav>
      <section class="col-md-9">
        <br>