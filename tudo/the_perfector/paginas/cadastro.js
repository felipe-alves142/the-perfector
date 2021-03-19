
///Validar o E-mail
// validar a senha
// validar a confirmanção da senha
// validar o nome
// validar o cpf
// validar a data
// validar celular
    
window.onload = function(){
    var senha = document.getElementById("se")
    document.getElementById("se").oninput =function(){validaSenha()}
    var length
    for(length=0;length < 9; length++){
        
    }
    
    function validaSenha(){
        var mn = /[0-9]{2}/i
        var espe = /[@!%;:.]/i
        if(senha.value.length < 8){
            document.getElementById("mx").style.color = "red";
        }
        else{
            document.getElementById("mx").style.color = "green";
        }
        if(!senha.value.match(mn)) {
            document.getElementById("mn").style.color = "red";    
        }else{
            document.getElementById("mn").style.color = "green"
        }
        if(!senha.value.match(espe)){
            document.getElementById("mc").style.color = "red"
        }else{
            document.getElementById("mc").style.color = "green"
        }
    }
}
    /*if(nome == ""){
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
        
    */
    