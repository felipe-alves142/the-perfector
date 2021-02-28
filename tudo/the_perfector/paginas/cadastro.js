
///Validar o E-mail
// validar a senha
// validar a confirmanção da senha
// validar o nome
// validar o cpf
// validar a data
// validar celular
    
function validar(){
    document.getElementById('bt').addEventListener('click' , vcpf())
    var estado =document.getElementById("state").value
    var cidade =document.getElementById("city").value
    var nome =document.getElementById("name").value
    document.getElementById("cpf") //.addEventListener('input' ,function(){vcpf()})
    var data =document.getElementById("date").value
    var email =document.getElementById("email").value
    var senha =document.getElementById("password").value
    var confsenha =document.getElementById("passwordOne").value
    var telefone =document.getElementById("tlf").addEventListener('input',function(){te()})
    var celular =document.getElementById("cll").value
    
    if(nome == ""){
        document.getElementById("rnome").innerHTML="Nome Inválido!"

    }
    if(senha == "" | senha.length < 8){
        document.getElementById("rsenha").innerHTML="Senha Inválida!"
    }   
    if(confsenha != senha){
        document.getElementById("rcsenha").innerHTML="Senhas são Desiguais!"
    }
    if(estado == ""){
        document.getElementById("restado").innerHTML="Estado Inválido!"
    }
    if(cidade == ""){
        document.getElementById("rcidade").innerHTML="Cidade Inválida!"
    }
    function vcpf(){
        let sum = Number(cpf.value[0])+ Number(cpf.value[1])+Number(cpf.value[2])+Number(cpf.value[4])+Number(cpf.value[5])+Number(cpf.value[6])+Number(cpf.value[8])+Number(cpf.value[9])+Number(cpf.value[10])+Number(cpf.value[12])+Number(cpf.value[13]) 
        console.log(sum)
        
        let c= String(sum)
        console.log(cpf.value[10])
        
        if(c.length == 2 && c[0] == c[1]){
           document.getElementById('rcpf').innerHTML = 'Cpf valido'
        }else{
            document.getElementById('rcpf').innerHTML = 'Cpf invalido'    
        }
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

        if(celular == ""){
            document.getElementById("rcelular").innerHTML="Celular Inválido!"
            
        }
        
    
    }