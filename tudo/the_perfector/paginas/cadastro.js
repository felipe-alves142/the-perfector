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
    }
    if(telefone == ""){
        document.getElementById("rtelefone").innerHTML="Telefone Inválido!"

    }
        if(celular == ""){
            document.getElementById("rcelular").innerHTML="Celular Inválido!"
        }

}