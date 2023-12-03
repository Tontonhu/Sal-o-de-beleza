<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Contato</title>
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="Imagens/logo.png" height="70">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <!-- <span class="fs-4">Joaquina Hair Design</span> -->
          </a>
    
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.html" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="servicos.html" class="nav-link">Serviços</a></li>
            <li class="nav-item"><a href="cadastro.html" class="nav-link">Cadastro</a></li>
            <li class="nav-item"><a href="login2.html" class="nav-link">Logar</a></li>
            <li class="nav-item"><a href="equipe.html" class="nav-link">Equipe</a></li>
            <li class="nav-item"><a href="contato.html" class="nav-link active">Contato</a></li>
          </ul>
      </header>
    </div>

<?php
    $nome1 = $_POST['nome1'];
    $email1 = $_POST['email1'];
    $duvidas = $_POST['duvidas'];

    echo "Enviado com sucesso";
    

?>
    <br><br><a href="index.html"><button type="submit" class="btn btn-primary btn-lg px-2 me-md-2">Voltar</button></a>