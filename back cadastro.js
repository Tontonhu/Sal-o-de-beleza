function validarCadastro(){
  
    //Declaração de variáveis
    var nome = document.getElementById("nome").value;
    var telefone = document.getElementById("telefone").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;

    //Validação da senha

      if(nome===""){
      alert("Insira seu nome!")
    }
      else if (telefone===""){
        alert ("Insira um telefone!")
      }

      else if (email===""){
        alert ("Precisamos de seu E-mail")
      }

      else if (senha===""){
        alert ("Crie uma senha!")
      }
  }