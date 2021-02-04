///Validar o E-mail
// validar a senha
// validar a confirmanção da senha
// validar o nome
// validar o cpf
// validar a data
// validar celular



function validar(){
    var estado =document.getElementById("state").value
    var cidade =document.getElementById("city").value
    var nome =document.getElementById("name").value
    var cpf =document.getElementById("cpf").value
    var data =document.getElementById("date").value
    var email =document.getElementById("email").value
    var senha =document.getElementById("password").value
    var confsenha =document.getElementById("passwordOne").value
    var telefone =document.getElementById("tlf").value
    var celular =document.getElementById("cll").value
    if(nome == ""){
        document.getElementById("rnome").innerHTML="Nome Inválido!"

    }
    if(senha == ""){
        document.getElementById("rsenha").innerHTML="Senha Inválida!"
    }   
    if(confsenha != senha){
        document.getElementById("rcsenha").innerHTML="Senhas São Desiguais!"
    }
    if(estado == ""){
        document.getElementById("restado").innerHTML="Estado Inválido!"
    }
    if(cidade == ""){
        document.getElementById("rcidade").innerHTML="Cidade Inválida!"
    }
    if(cpf == ""){
        document.getElementById("rcpf").innerHTML="CPF Invalido!"
    }
    if(email == ""){
    document.getElementById("remail").innerHTML="Email Inválido!"
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }
      
      function validate() {
        const $result = $("#remail");
        const email = $("#email").val();
        $result.text("");
      
        if (validateEmail(email)) {
          $result.text("Email Valido!");
          
        } else {
          $result.text("Email não Valido!");
        }
        return false;
      }
      
      $("#validate").on("click", validate);
      
}
    if(telefone == ""){
        document.getElementById("rtelefone").innerHTML="Telefone Inválido!"

    }
        if(celular == ""){
            document.getElementById("rcelular").innerHTML="Celular Inválido!"
        }

}