
function validarLogin(){

    if(document.formLogin.login.value == "" || document.formLogin.login.value.length < 3){
        alert( "Login inválido." );
        document.formLogin.login.focus();
        return false;
    }

    if(document.formLogin.senha.value == "" || document.formLogin.senha.value.length < 3){
        alert( "Senha inválida." );
        document.formLogin.senha.focus();
        return false;
    }

    return true;
}


function validarCadastro(){

    if (document.formCadastro.nome.value == "" || document.formCadastro.nome.value.length < 10){
        alert( "Nome inválido." );
        
        document.formCadastro.nome.focus();
        return false;
    }

    if (document.formCadastro.endereco.value == "" || document.formCadastro.endereco.value.length < 8){
        alert( "Endereço inválido." );
        document.formCadastro.endereco.focus();
        return false;
    }
    
    if ( document.formCadastro.email.value=="" || document.formCadastro.email.value.indexOf('@')==-1 || document.dados.tx_email.value.indexOf('.')==-1 ){
        alert( "E-mail Inválido" );
        document.formCadastro.email.focus();
        return false;
    }
    
    if (document.formCadastro.cor.selectedIndex == 0){
        alert( "Cor inválida." );
        alert( document.formCadastro.cor.selectedIndex );
        document.formCadastro.cor.focus();
        return false;
    }

    return true;
}