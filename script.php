<?php 
    session_start();

    //caso usuário queira entrar nesta página sem nem preencher o formulário
    if(!isset($_SESSION['mostrar']) || !isset($_SESSION['mensagem_erro'])){
        $_SESSION['mensagem_erro'] = "Tentativa incorreta de usar o sistema";
        header("Location: index.php");
    }
 
    //criando variáveis iniciais
    $nome = "";
    $idade = "";
    $categoria = "";
            
    //criando array ou lista de categorias
    $categories = array();

    //adicionando elementos no array
    array_push($categories, "Infantil");
    array_push($categories, "Adolescente");
    array_push($categories, "Adulto");
    $categories[] = "Idoso";

    //filtrar e validar dados do formulário para depois redirecionar para o index
    if(isset($_POST['enviar'])){                
        if(empty($_POST['nome']) OR empty($_POST['idade'])){
            $_SESSION['mensagem_erro'] = "Preencha todos os campos";
            header("Location: index.php");                   
        }else{
            if(strlen($_POST['nome'])<4 OR strlen($_POST['nome']) >100){
                $_SESSION['mensagem_erro'] = "Nome não pode ter mais que 100 ou menos que 4 caracteres";
                header("Location: index.php");
            }else{
                if(!filter_var($_POST['idade'], FILTER_VALIDATE_INT)){
                    $_SESSION['mensagem_erro'] = "Idade precisa ser um número inteiro";
                    header("Location: index.php");
                }else{
                    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
                            
                    //verificar idade e definir categoria
                    if($idade < 6){
                        $categoria = "Inválida";
                        $_SESSION['mostrar'] = true;
                        $_SESSION['nome'] = $nome;
                        $_SESSION['idade'] = $idade;
                        $_SESSION['categoria'] = $categoria;
                        $_SESSION['mensagem_erro'] = "Categoria inválida. Só pode participar a partir de 6 anos.";
                        header("Location: index.php");
                    }elseif($idade >=6 && $idade <=12){    
                        $categoria = $categories[0];    
                    }elseif ($idade <= 18){
                        $categoria = $categories[1];
                    }elseif($idade >= 18 && $idade < 65){
                        $categoria = $categories[2];
                    }else{
                        $categoria = $categories[3];
                    }
                    $_SESSION['mostrar'] = true;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['idade'] = $idade;
                    $_SESSION['categoria'] = $categoria;
                    header("Location: index.php");
                }
            }
        } 
    }            
?>