<?php 

    //incluir arquivos 
    include_once ('servicos/servicoMensagem.php');
    include_once ('servicos/servicoCategoriaCompetidor.php');
    include_once ('servicos/servicoValidacao.php');
 
    //pegando dados do formulário
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];        
    }elseif(isset($_GET['enviar'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    }else{
        setaMensagemErro("Preencha todos os campos do formulário.");
        header("Location: index.php");
    }       
    defineCategoria($nome, $idade);
    header("Location: index.php");
?>