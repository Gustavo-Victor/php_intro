<?php 
session_start(); 

//apenar jogar a mensagem de erro na sessão
function setaMensagemErro(string $mensagem):void{
    $_SESSION['mensagem_erro'] = $mensagem;
}

//função para retornar mensagem se existir
function obterMensagemErro() : ?string{
    if(isset($_SESSION['mensagem_erro'])){
        return $_SESSION['mensagem_erro'];
    }else{
        return null;
    }
}

//apenar jogar a mensagem de sucesso na sessão
function setaMensagemSucesso(string $mensagem):void{
    $_SESSION['mensagem_sucesso'] = $mensagem;
}

//função para retornar mensagem de sucesso se existir
function obterMensagemSucesso() : ?string{
    if(isset($_SESSION['mensagem_sucesso'])){
        return $_SESSION['mensagem_sucesso'];
    }else{
        return null;
    }
}

//remover mensagem_erro
function removerMensagemErro(){
    if(isset($_SESSION['mensagem_erro'])){
        unset($_SESSION['mensagem_erro']);
    }
}

//remover mensagem_sucesso
function removerMensagemSucesso(){
    if(isset($_SESSION['mensagem_sucesso'])){
        unset($_SESSION['mensagem_sucesso']);
    }
}