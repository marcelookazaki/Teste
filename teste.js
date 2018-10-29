function cadastrar() {
    var padrao_nome = /[0-9]/g;
    var padrao_cpf = /^[0-9]{11}$/;

    var nome = document.f1.nome.value;
    var cpf = document.f1.cpf.value;
 

    // console.clear();

    // console.log('nome', nome.match(padrao_nome));
    // console.log('nome', padrao_nome.test(nome));

    // console.log('cpf', cpf.match(padrao_cpf));
    // console.log('cpf', !padrao_cpf.test(cpf));

    // return;

    if (nome == "") {
        document.f1.nome.focus();
        alert("Por favor, Digite seu nome");
        return false;
    }    
    else if(nome.match(padrao_nome)) {
        document.f1.nome.focus();
        alert("algum caracter no seu nome está incorreto");
        return false;
    } 
        
    if (cpf == "") {
        document.f1.cpf.focus();
        alert("Por favor, Digite seu cpf");
        return false;
    }
    else if(!padrao_cpf.test(cpf)) {
        document.f1.cpf.focus();
        alert("algum caracter no seu cpf está incorreto");
        return false;
    } 

    alert("Obrigado !," + nome );
}

function destel(){
    var cel = document.f1.cel.value;
    var tel = document.f1.tel.value;    

    if(cel != ""){
        document.f1.tel.disabled = true;                            
    }
    else if (cel == ""){
        document.f1.tel.disabled = false;   
    }

    if(tel != ""){
        document.f1.cel.disabled = true;                            
    }
    else if (tel == ""){
        document.f1.cel.disabled = false;   
    }
}

//function descel()
//{
//  var cel = document.getElementById("cel");   
//  var tel= document.getElementById("tel");

//  if(cel.value != "")
//  {
//      cel.disabled=true;
//  }

//}

