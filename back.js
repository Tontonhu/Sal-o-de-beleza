var login = 0;

function validarLogin(){
  
    //Declaração de variáveis
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    

    //Validação da senha

      if(email==="" || senha===""){
      alert("Um dos campos está vazio.")
    }

    else if(email==="teste@gmail.com" && senha==="123"){
        login++
      alert("Login bem sucedido")
      location.href="index.html"
    }

    else{
      alert("Email ou Login inválidos")
    }
  }

  
  function verificarLogin(){
    //Verificação do Login

    validarLogin()

      if(login==0){
      alert("Para realizar seu agendamento é necessário ter o login feito.")
      location.href="login2.html"
    }

    else{
      alert("Agendamento realizado com sucesso!")
    }
  }