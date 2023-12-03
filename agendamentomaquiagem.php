<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Agendamento</title>
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
            <li class="nav-item"><a href="servicos.html" class="nav-link active">Serviços</a></li>
            <li class="nav-item"><a href="cadastro.html" class="nav-link">Cadastro</a></li>
            <li class="nav-item"><a href="login2.html" class="nav-link">Logar</a></li>
            <li class="nav-item"><a href="equipe.html" class="nav-link">Equipe</a></li>
            <li class="nav-item"><a href="contato.html" class="nav-link">Contato</a></li>
          </ul>
      </header>
    </div>

<?php
    $selecaomaquiagem = $_POST['selecaomaquiagem'];

    switch ($selecaomaquiagem){
        case "semcilios":
            echo "Você agendou uma MAQUIAGEM SEM A UTILIZAÇÃO DE CÍLIOS";
        break;
        case "comcilios":
            echo "Você agendou uma MAQUIAGEM COM A UTILIZAÇÃO DE CÍLIOS";
        break;
        case "designsobrancelha":
            echo "Você agendou um DESIGN DE SOBRANCELHAS";
        break;
        case "manuntencao":
            echo "Você agendou uma MANUNTEÇÃO";
        break;
    }
    
?>
    <br><br><a href="login2.html"><button type="submit" class="btn btn-primary btn-lg px-2 me-md-2">Voltar</button></a>