<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

    <title>Cadastro de Veículos</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Cadastro de Veículos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="?page=novo">Novo Veículo</a>
        <a class="nav-link" href="?page=listar">Lista de Veículos</a>
      </div>
    </div>
  </div>
</nav>

    <div class="container">
      <div class="row"></div>
        <div class="col mt-5">
           <?php
          include("config.php");
          switch(@$_REQUEST["page"]){
            case"novo":
              include("novoVeiculo.php");
            break;
            case"listar":
              include("listaDeVeiculos.php");
            break;
            case "salvar":
              include("salvarVeiculo.php");
              break;
            case"editar":
              include("editarVeiculo.php");
            default:
              print"<h1>Gerêncie Seus Veículos</h1>";
          }

        ?>
          
        </div>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>