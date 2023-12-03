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
            <li class="nav-item"><a href="servicos.html" class="nav-link action">Serviços</a></li>
            <li class="nav-item"><a href="cadastro.html" class="nav-link">Cadastro</a></li>
            <li class="nav-item"><a href="login2.html" class="nav-link">Logar</a></li>
            <li class="nav-item"><a href="equipe.html" class="nav-link">Equipe</a></li>
            <li class="nav-item"><a href="contato.html" class="nav-link">Contato</a></li>
          </ul>
      </header>
    </div>

<?php
    $selecaounhas = $_POST['selecaounhas'];
    $selecaoex = $_POST['selecaoex'];
    
    if ($selecaounhas == "combo" and $selecaoex == "francesinha"){
        echo "Você agendou uma sessão de Combo de Manicure e Pedicure no estilo Francesinha.";
    }
    else if ($selecaounhas == "combo" and $selecaoex == "decorada"){
        echo "Você agendou uma sessão de Combo de Manicure e Pedicure no estilo Decorada.";
    }
    else if ($selecaounhas == "combo" and $selecaoex == "esmalte"){
        echo "Você agendou uma sessão de Combo de Manicure e Pedicure no estilo Esmalte importado.";
    }
    else if ($selecaounhas == "mani" and $selecaoex == "francesinha"){
        echo "Você agendou uma sessão de Manicure no estilo Francesinha.";
    }
    else if ($selecaounhas == "mani" and $selecaoex == "decorada"){
        echo "Você agendou uma sessão de Manicure no estilo Decorada.";
    }
    else if ($selecaounhas == "mani" and $selecaoex == "esmalte"){
        echo "Você agendou uma sessão de Manicure no estilo Esmalte importado.";
    }
    else if ($selecaounhas == "pedicure" and $selecaoex == "francesinha"){
        echo "Você agendou uma sessão de Pedicure no estilo Francesinha.";
    }
    else if ($selecaounhas == "pedicure" and $selecaoex == "decorada"){
        echo "Você agendou uma sessão de Pedicure no estilo Decorada.";
    }
    else if ($selecaounhas == "pedicure" and $selecaoex == "esmalte"){
        echo "Você agendou uma sessão de Pedicure no estilo Esmalte importado.";
    }
    
?>
    <br><br><a href="login2.html"><button type="submit" class="btn btn-primary btn-lg px-2 me-md-2">Voltar</button></a>