<?php 
//session_start();

//validar nome
function ValidaNome(string $nome):bool{
    if(empty($nome)){
        setaMensagemErro("O nome não pode estar vazio!");
        return false;
    }elseif(strlen($nome)<4 || strlen($nome)>100){
        setaMensagemErro("O nome não pode ter menos que 4 ou mais que 100 caracteres");       
        return false;
    }else{
        return true;
    }
}

//validar idade
function ValidaIdade(string $idade):bool{
    if(empty($idade)){
        setaMensagemErro("Idade não pode estar vazia!");        
        return false;
    }else if(!is_numeric($idade)){
        setaMensagemErro("Idade precisa ser um número inteiro");
        return false;
    }elseif($idade < 6){
        setaMensagemErro("A idade mínima para participar é 6 anos");
        return false;
    }else{
        return true;
    }
}

?>